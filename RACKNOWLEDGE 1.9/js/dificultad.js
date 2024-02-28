document.addEventListener("DOMContentLoaded", function () {

    const minijuegos = [
        { nombre: "Facil", descripcion: "---" },
        { nombre: "Medio", descripcion: "---" },
        { nombre: "Dificil", descripcion: "---" },
    ];


    function actualizarContenidoJuego(juegoId, juegoData) {
        const juegoElement = document.getElementById(juegoId);
        juegoElement.querySelector("h2").textContent = juegoData.nombre;
        juegoElement.querySelector("p").textContent = juegoData.descripcion;
    }

    
    actualizarContenidoJuego("Facil", minijuegos[0]);
    actualizarContenidoJuego("Medio", minijuegos[1]);
    actualizarContenidoJuego("Dificil", minijuegos[2]);
});