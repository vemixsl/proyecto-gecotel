<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

include_once '../db.php';

$database = new Database();
$db = $database->getConnection();

// 1. OBTENER LISTA DE PAÍSES
if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['action']) && $_GET['action'] === 'getPaises') {
    try {
        $query = "SELECT id, nombre, codigo_iso, zona FROM paises ORDER BY nombre";
        $stmt = $db->prepare($query);
        $stmt->execute();
        
        $paises = array();
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $paises[] = $row;
        }
        
        echo json_encode([
            "success" => true,
            "data" => $paises
        ]);
        exit;
    } catch (PDOException $e) {
        error_log("Error al obtener países: " . $e->getMessage());
        echo json_encode([
            "error" => "Error al cargar la lista de países",
            "details" => $e->getMessage()
        ]);
        exit;
    }
}

// 2. CALCULAR TARIFA INTERNACIONAL
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['action']) && $_POST['action'] === 'calcularTarifa') {
    try {
        // Validar parámetros
        if (!isset($_POST['pais'])) {
            throw new Exception("Parámetro 'pais' faltante");
        }
        
        if (!isset($_POST['peso'])) {
            throw new Exception("Parámetro 'peso' faltante");
        }
        
        $pais = trim($_POST['pais']);
        $peso = floatval($_POST['peso']);
        
        if ($peso <= 0) {
            throw new Exception("El peso debe ser mayor a 0");
        }
        
        // BUSCAR POR NOMBRE EXACTO PRIMERO
        $query = "SELECT id, nombre, codigo_iso, zona FROM paises WHERE nombre = :pais LIMIT 1";
        $stmt = $db->prepare($query);
        $stmt->bindParam(":pais", $pais);
        $stmt->execute();
        
        $paisEncontrado = null;
        $busquedaPorCodigo = false;
        
        // Si no se encuentra por nombre, buscar por código ISO
        if ($stmt->rowCount() == 0) {
            $query = "SELECT id, nombre, codigo_iso, zona FROM paises WHERE codigo_iso = :codigo";
            $stmt = $db->prepare($query);
            $stmt->bindParam(":codigo", $pais);
            $stmt->execute();
            
            $busquedaPorCodigo = true;
            
            // Si hay múltiples países con el mismo código
            if ($stmt->rowCount() > 1) {
                $paises = [];
                while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                    $paises[] = $row;
                }
                
                echo json_encode([
                    "status" => "ambiguo",
                    "message" => "Múltiples países encontrados con este código",
                    "options" => $paises,
                    "busquedaPorCodigo" => true
                ]);
                exit;
            }
            
            // Si solo hay un país con ese código
            if ($stmt->rowCount() == 1) {
                $paisEncontrado = $stmt->fetch(PDO::FETCH_ASSOC);
            }
        } else {
            $paisEncontrado = $stmt->fetch(PDO::FETCH_ASSOC);
        }
        
        // Si no se encontró ningún país
        if (!$paisEncontrado) {
            throw new Exception("País no encontrado");
        }
        
        // OBTENER TARIFA SEGÚN PESO Y ZONA
        $query = "SELECT * FROM tarifas_internacionales WHERE peso >= :peso ORDER BY peso ASC LIMIT 1";
        $stmt = $db->prepare($query);
        $stmt->bindParam(":peso", $peso);
        $stmt->execute();
        
        // Si no encuentra tarifa para ese peso, usar la más alta
        if ($stmt->rowCount() == 0) {
            $query = "SELECT * FROM tarifas_internacionales ORDER BY peso DESC LIMIT 1";
            $stmt = $db->prepare($query);
            $stmt->execute();
        }
        
        $tarifa = $stmt->fetch(PDO::FETCH_ASSOC);
        
        if (!$tarifa) {
            throw new Exception("No se encontraron tarifas configuradas");
        }
        
        $zona = $paisEncontrado['zona'];
        $precio = $tarifa["zona" . $zona];
        
        // RESPUESTA FINAL
        echo json_encode([
            "success" => true,
            "precio" => $precio,
            "zona" => $zona,
            "peso" => $peso,
            "pais" => $paisEncontrado['nombre'],
            "codigo_iso" => $paisEncontrado['codigo_iso'],
            "advertencia" => $busquedaPorCodigo ? "Se usó el código ISO para encontrar el país" : null
        ]);
        exit;
        
    } catch (Exception $e) {
        error_log("Error en cálculo de tarifa: " . $e->getMessage());
        echo json_encode([
            "error" => $e->getMessage(),
            "success" => false
        ]);
        exit;
    }
}

// RESPUESTA PARA ACCIONES NO RECONOCIDAS
echo json_encode([
    "error" => "Acción no válida",
    "success" => false
]);
?>