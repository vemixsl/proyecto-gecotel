// Variables globales
let paisesCargados = false;

// Cargar países al iniciar
document.addEventListener("DOMContentLoaded", function() {
    cargarPaises();
    
    // Configurar eventos
    document.getElementById("btnCalcularInternacional").addEventListener("click", calcularTarifaInternacional);
    document.getElementById("paisOrigen").addEventListener("change", manejarCambioOrigen);
});

// Cargar lista de países desde la API
async function cargarPaises() {
    try {
        const response = await fetch('api/internacional.php?action=getPaises');
        if (!response.ok) throw new Error("Error al cargar países");

        const result = await response.json();
        if (!result.success || !result.data) throw new Error("Sin datos");

        const paises = result.data;
        const destinoSelect = document.getElementById("paisDestino");
        const origenSelect = document.getElementById("paisOrigen");

        // Limpiar y agregar opciones
        destinoSelect.innerHTML = '<option value="">Seleccione un país</option>';
        origenSelect.innerHTML = '<option value="">Seleccione un país</option>';

        paises.forEach(pais => {
            const option1 = document.createElement("option");
            option1.value = pais.nombre;
            option1.textContent = pais.nombre;
            destinoSelect.appendChild(option1);

            const option2 = option1.cloneNode(true);
            origenSelect.appendChild(option2);
        });

        paisesCargados = true;
    } catch (error) {
        console.error("Error:", error);
        alert("No se pudieron cargar los países. Por favor recarga la página.");
    }
}


// Manejar cambio en país de origen
function manejarCambioOrigen() {
    const origen = this.value;
    const destinoSelect = document.getElementById("paisDestino");
    
    if (origen === "Guinea Ecuatorial") {
        destinoSelect.disabled = false;
        if (!paisesCargados) cargarPaises();
    } else {
        destinoSelect.innerHTML = '<option value="Guinea Ecuatorial">Guinea Ecuatorial</option>';
        destinoSelect.disabled = true;
    }
}

// Calcular tarifa internacional
async function calcularTarifaInternacional() {
    const origen = document.getElementById("paisOrigen").value;
    const destino = document.getElementById("paisDestino").value;
    const pesoInput = document.getElementById("pesoInternacional");
    const peso = parseFloat(pesoInput.value);
    const resultadoSection = document.getElementById("resultadoInternacional");
    
    // Validaciones básicas
    if (!origen || !destino) {
        alert("Seleccione el país de origen y destino.");
        return;
    }
    
    if (!peso || peso <= 0) {
        alert("Ingrese un peso válido (mayor a 0).");
        pesoInput.focus();
        return;
    }
    
    if (peso > 70) {
        alert("El peso máximo permitido para cotización en línea es 70 kg.");
        pesoInput.focus();
        return;
    }
    
    try {
        // Mostrar carga
        const btnCalcular = document.getElementById("btnCalcularInternacional");
        btnCalcular.disabled = true;
        btnCalcular.innerHTML = '<i class="fas fa-spinner fa-spin"></i> Calculando...';
        
        // Preparar datos
        const formData = new FormData();
        formData.append('action', 'calcularTarifa');
        formData.append('pais', origen === "Guinea Ecuatorial" ? destino : origen);
        formData.append('peso', peso);
        
        // Llamar a la API
        const response = await fetch('api/internacional.php', {
            method: 'POST',
            body: formData
        });
        
        if (!response.ok) throw new Error("Error en la respuesta del servidor");
        
        const data = await response.json();
        
        // Manejar posibles errores o ambigüedades
        if (data.error) {
            throw new Error(data.error);
        }
        
        if (data.status === "ambiguo") {
            const paisElegido = await mostrarSelectorPaises(data.options);
            if (!paisElegido) return;
            
            formData.set('pais', paisElegido);
            const newResponse = await fetch('api/internacional.php', {
                method: 'POST',
                body: formData
            });
            data = await newResponse.json();
        }
        
        // Formatear y mostrar resultados
        mostrarResultadoInternacional(data, origen === "Guinea Ecuatorial" ? destino : origen, peso);
        
    } catch (error) {
        console.error("Error:", error);
        alert(error.message || "Ocurrió un error al calcular la tarifa");
    } finally {
        // Restaurar botón
        const btnCalcular = document.getElementById("btnCalcularInternacional");
        btnCalcular.disabled = false;
        btnCalcular.innerHTML = '<i class="fas fa-calculator"></i> Calcular Costo';
    }
}

// Mostrar selector de países en caso de ambigüedad
function mostrarSelectorPaises(opciones) {
    return new Promise((resolve) => {
        // Crear modal
        const modal = document.createElement("div");
        modal.style.position = "fixed";
        modal.style.top = "0";
        modal.style.left = "0";
        modal.style.width = "100%";
        modal.style.height = "100%";
        modal.style.backgroundColor = "rgba(0,0,0,0.5)";
        modal.style.display = "flex";
        modal.style.justifyContent = "center";
        modal.style.alignItems = "center";
        modal.style.zIndex = "1000";
        
        // Contenido del modal
        const content = document.createElement("div");
        content.style.backgroundColor = "white";
        content.style.padding = "20px";
        content.style.borderRadius = "10px";
        content.style.maxWidth = "500px";
        content.style.width = "90%";
        
        content.innerHTML = `
            <h3>Se encontraron múltiples países</h3>
            <p>Seleccione el país correcto:</p>
            <ul id="opcionesPaises" style="list-style: none; padding: 0; max-height: 300px; overflow-y: auto;">
                ${opciones.map((pais, i) => `
                    <li style="padding: 10px; border-bottom: 1px solid #eee; cursor: pointer;" 
                        data-pais="${pais.nombre}">
                        ${pais.nombre} (Zona ${pais.zona})
                    </li>
                `).join('')}
            </ul>
            <button id="cancelarSeleccion" style="margin-top: 15px; padding: 8px 15px; background: #f44336; color: white; border: none; border-radius: 5px; cursor: pointer;">
                Cancelar
            </button>
        `;
        
        modal.appendChild(content);
        document.body.appendChild(modal);
        
        // Manejar selección
        const opcionesList = content.querySelectorAll("#opcionesPaises li");
        opcionesList.forEach(opcion => {
            opcion.addEventListener("click", function() {
                resolve(this.getAttribute("data-pais"));
                document.body.removeChild(modal);
            });
        });
        
        // Manejar cancelación
        content.querySelector("#cancelarSeleccion").addEventListener("click", function() {
            resolve(null);
            document.body.removeChild(modal);
        });
    });
}

// Mostrar resultados en la interfaz
function mostrarResultadoInternacional(data, pais, peso) {
    const precioFormateado = new Intl.NumberFormat("fr-FR", {
        style: "currency",
        currency: "XAF",
        minimumFractionDigits: 0
    }).format(data.precio);
    
    // Actualizar fecha
    const fecha = new Date().toLocaleDateString('es-ES', {
        year: 'numeric', month: 'long', day: 'numeric'
    });
    document.getElementById("fechaInternacional").textContent = fecha;
    
    // Actualizar resultados
    document.getElementById("precioInternacional").textContent = precioFormateado;
    document.getElementById("detallePais").textContent = pais;
    document.getElementById("detalleZona").textContent = "Zona " + data.zona;
    document.getElementById("detallePeso").textContent = peso + " kg";
    
    // Mostrar sección de resultados
    document.getElementById("resultadoInternacional").classList.add("show");
    
    // Scroll a resultados
    document.getElementById("resultadoInternacional").scrollIntoView({
        behavior: "smooth",
        block: "start"
    });
}