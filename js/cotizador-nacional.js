// Variables globales
let selectedService = "sobre";
let clientType = "empresa";
let transportType = "barco";

// Inicialización
document.addEventListener("DOMContentLoaded", () => {
    configurarEventos();
    configurarFechaActual();
});

function configurarEventos() {
    configurarSeleccion(".service-option", "selected", (el) => {
        selectedService = el.getAttribute("data-type");
        const esSobre = selectedService === "sobre";
        toggleVisibility("dimensionsSection", !esSobre);
        toggleVisibility("quantityField", esSobre);
    });

    configurarSeleccion(".client-option", "selected", (el) => {
        clientType = el.getAttribute("data-type");
        toggleVisibility("transporteSection", clientType === "persona");
    });

    configurarSeleccion(".transport-option", "selected", (el) => {
        transportType = el.getAttribute("data-type");
    }, true);

    document.getElementById("calculateBtn").addEventListener("click", calcularTarifaNacional);
    document.getElementById("newQuoteBtn").addEventListener("click", resetCalculator);
}

function configurarSeleccion(selector, claseSeleccionada, callback, seleccionarPrimero = false) {
    const opciones = document.querySelectorAll(selector);
    if (seleccionarPrimero && opciones[0]) opciones[0].classList.add(claseSeleccionada);

    opciones.forEach(opcion => {
        opcion.addEventListener("click", function () {
            opciones.forEach(opt => opt.classList.remove(claseSeleccionada));
            this.classList.add(claseSeleccionada);
            callback(this);
        });
    });
}

function toggleVisibility(id, visible) {
    const el = document.getElementById(id);
    el.style.display = visible ? "block" : "none";
    el.classList.toggle("hidden", !visible);
}

function configurarFechaActual() {
    const now = new Date();
    const options = { year: 'numeric', month: 'long', day: 'numeric' };
    document.getElementById("currentDate").textContent = now.toLocaleDateString('es-ES', options);
}

async function calcularTarifaNacional() {
    const origin = document.getElementById("origin").value;
    const destination = document.getElementById("destination").value;
    const length = parseFloat(document.getElementById("length").value) || 30;
    const width = parseFloat(document.getElementById("width").value) || 20;
    const weight = parseFloat(document.getElementById("weight").value) || 1;
    const quantity = parseInt(document.getElementById("quantity").value) || 1;

    if (!origin || !destination) return mostrarError("Por favor, seleccione tanto el origen como el destino");
    if (origin === destination) return mostrarError("El origen y el destino no pueden ser el mismo");

    try {
        actualizarBotonCalculo(true);

        const formData = new FormData();
        formData.append('action', 'calcularTarifa');
        formData.append('tipo_cliente', clientType);
        formData.append('tipo_embalaje', selectedService);
        formData.append('origen', origin);
        formData.append('destino', destination);
        formData.append('peso', selectedService === 'sobre' ? 0 : weight);
        formData.append('cantidad', selectedService === 'sobre' ? quantity : 1);
        if (clientType === 'persona') formData.append('tipo_transporte', transportType);

        const response = await fetch('api/nacional.php', {
            method: 'POST',
            body: formData
        });

        if (!response.ok) throw new Error("Error en la respuesta del servidor");

        const data = await response.json();
        if (!data.success) throw new Error(data.error || "Error desconocido al calcular la tarifa");

        mostrarResultadoNacional(data, origin, destination, length, width, weight, quantity);

    } catch (error) {
        console.error("Error:", error);
        mostrarError(error.message);
    } finally {
        actualizarBotonCalculo(false);
    }
}

function actualizarBotonCalculo(cargando) {
    const btn = document.getElementById("calculateBtn");
    btn.disabled = cargando;
    btn.innerHTML = cargando ? '<i class="fas fa-spinner fa-spin"></i> Calculando...' : '<i class="fas fa-calculator"></i> Calcular Costo';
}

function mostrarError(mensaje) {
    const errorDiv = document.getElementById("error-message");
    const errorText = document.getElementById("error-text");

    errorText.textContent = mensaje;
    errorDiv.classList.remove("d-none");
    errorDiv.scrollIntoView({ behavior: "smooth", block: "center" });

    setTimeout(() => errorDiv.classList.add("d-none"), 5000);
}

function mostrarResultadoNacional(data, origin, destination, length, width, weight, quantity) {
    const precioFormateado = new Intl.NumberFormat("fr-FR", { style: "currency", currency: "XAF", minimumFractionDigits: 0 }).format(data.precio);
    const distancia = obtenerDistancia(origin, destination);
    const tracking = "GE" + Math.floor(10000000 + Math.random() * 90000000);

    document.getElementById("resultPrice").textContent = precioFormateado;
    document.getElementById("resultOrigin").textContent = getCityName(origin);
    document.getElementById("resultDestination").textContent = getCityName(destination);
    document.getElementById("resultDistance").textContent = distancia + " km";
    document.getElementById("resultService").textContent = data.tipo_servicio + (clientType === 'persona' ? ` (${transportType})` : '');
    document.getElementById("resultTime").textContent = data.tiempo_entrega;
    document.getElementById("resultNumber").textContent = tracking;

    toggleVisibility("dimensionsResult", selectedService !== "sobre");
    toggleVisibility("weightResult", selectedService !== "sobre");
    toggleVisibility("quantityResult", selectedService === "sobre");

    document.getElementById("resultDimensions").textContent = selectedService !== "sobre" ? `${length} × ${width} cm` : "-";
    document.getElementById("resultWeight").textContent = selectedService !== "sobre" ? `${weight} kg` : "-";
    document.getElementById("resultQuantity").textContent = selectedService === "sobre" ? quantity : "-";

    document.getElementById("resultSection").classList.add("show");
    document.getElementById("resultSection").scrollIntoView({ behavior: "smooth", block: "start" });
}

function obtenerDistancia(origen, destino) {
    const distancias = {
        "malabo-bata": 250, "malabo-ebebiyin": 180, "malabo-mongomo": 200, "malabo-evinayong": 150,
        "bata-ebebiyin": 120, "bata-mongomo": 220, "bata-evinayong": 180,
        "ebebiyin-mongomo": 50, "ebebiyin-evinayong": 100, "mongomo-evinayong": 80
    };
    return distancias[`${origen}-${destino}`] || distancias[`${destino}-${origen}`] || 100;
}

function getCityName(code) {
    const cities = {
        malabo: "Malabo", bata: "Bata", ebebiyin: "Ebebiyín", mongomo: "Mongomo", evinayong: "Evinayong"
    };
    return cities[code] || code;
}

function resetCalculator() {
    ["origin", "destination"].forEach(id => document.getElementById(id).value = "");
    document.getElementById("length").value = "30";
    document.getElementById("width").value = "20";
    document.getElementById("weight").value = "1";
    document.getElementById("quantity").value = "1";

    document.querySelectorAll(".service-option").forEach(opt => opt.classList.remove("selected"));
    document.querySelector('[data-type="sobre"]').classList.add("selected");
    selectedService = "sobre";

    document.querySelectorAll(".client-option").forEach(opt => opt.classList.remove("selected"));
    document.querySelector('[data-type="empresa"]').classList.add("selected");
    clientType = "empresa";

    toggleVisibility("transporteSection", false);
    toggleVisibility("dimensionsSection", false);
    toggleVisibility("quantityField", true);

    document.getElementById("resultSection").classList.remove("show");
    window.scrollTo({ top: 0, behavior: "smooth" });
}
