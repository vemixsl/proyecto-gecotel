<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

include_once '../db.php';

$database = new Database();
$db = $database->getConnection();

// Función para generar respuesta JSON y finalizar
function responderJson($success, $data = [], $mensaje = '') {
    echo json_encode(array_merge([
        "success" => $success,
        "error" => $success ? null : $mensaje
    ], $success ? $data : []));
    exit;
}

// Validar método y acción
if ($_SERVER['REQUEST_METHOD'] !== 'POST' || ($_POST['action'] ?? '') !== 'calcularTarifa') {
    responderJson(false, [], "Acción no válida o método incorrecto");
}

try {
    // Validación de parámetros obligatorios
    $requeridos = ['tipo_cliente', 'tipo_embalaje', 'origen', 'destino'];
    foreach ($requeridos as $param) {
        if (empty($_POST[$param])) {
            throw new Exception("Parámetro requerido faltante: $param");
        }
    }

    $tipo_cliente = $_POST['tipo_cliente'];
    $tipo_embalaje = $_POST['tipo_embalaje'];
    $origen = $_POST['origen'];
    $destino = $_POST['destino'];
    $peso = isset($_POST['peso']) ? floatval($_POST['peso']) : 0;
    $cantidad = isset($_POST['cantidad']) ? intval($_POST['cantidad']) : 1;
    $tipo_transporte = $_POST['tipo_transporte'] ?? null;

    // Validaciones de valores
    $clientes_validos = ['empresa', 'persona'];
    $embalajes_validos = ['sobre', 'bolsa', 'paquete'];
    $transportes_validos = ['barco', 'avion', 'terrestre'];

    if (!in_array($tipo_cliente, $clientes_validos)) {
        throw new Exception("Tipo de cliente no válido");
    }

    if (!in_array($tipo_embalaje, $embalajes_validos)) {
        throw new Exception("Tipo de embalaje no válido");
    }

    if ($tipo_cliente === 'persona') {
        if (!$tipo_transporte || !in_array($tipo_transporte, $transportes_validos)) {
            throw new Exception("Tipo de transporte no válido o no proporcionado");
        }
    }

    // Construir consulta SQL
    $sql = "SELECT * FROM tarifas_nacionales WHERE 
            tipo_cliente = :tipo_cliente AND 
            tipo_embalaje = :tipo_embalaje AND 
            origen = :origen AND 
            destino = :destino";

    $params = [
        ':tipo_cliente' => $tipo_cliente,
        ':tipo_embalaje' => $tipo_embalaje,
        ':origen' => $origen,
        ':destino' => $destino
    ];

    if ($tipo_cliente === 'persona') {
        $sql .= " AND tipo_transporte = :tipo_transporte";
        $params[':tipo_transporte'] = $tipo_transporte;
    }

    $stmt = $db->prepare($sql);
    $stmt->execute($params);

    if ($stmt->rowCount() === 0) {
        throw new Exception("No se encontró tarifa para los parámetros especificados");
    }

    $tarifa = $stmt->fetch(PDO::FETCH_ASSOC);

    // Calcular precio
    if ($tipo_embalaje === 'sobre') {
        $costo = $tarifa['precio_sobre'] * $cantidad;
    } else {
        if ($peso <= 0) {
            throw new Exception("Debe proporcionar un peso válido para este tipo de embalaje");
        }
        $costo = $tarifa['precio_por_kg'] * $peso;
    }

    // Preparar respuesta
    $respuesta = [
        "precio" => $costo,
        "tiempo_entrega" => $tarifa['tiempo_entrega'],
        "tipo_servicio" => $tipo_embalaje === 'sobre' ? "Sobres ($cantidad)" : ucfirst($tipo_embalaje),
        "detalles" => [
            "tipo_cliente" => $tipo_cliente,
            "origen" => $origen,
            "destino" => $destino,
            "peso" => $tipo_embalaje !== 'sobre' ? $peso : null,
            "cantidad" => $tipo_embalaje === 'sobre' ? $cantidad : null,
            "tipo_transporte" => $tipo_transporte
        ]
    ];

    responderJson(true, $respuesta);

} catch (Exception $e) {
    error_log("Error al calcular tarifa nacional: " . $e->getMessage());
    responderJson(false, [], $e->getMessage());
}
?>
