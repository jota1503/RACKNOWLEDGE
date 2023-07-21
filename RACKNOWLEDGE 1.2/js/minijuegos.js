document.addEventListener("DOMContentLoaded", function () {

    const minijuegos = [
        { nombre: "Juego 1", descripcion: "Descripción del Juego 1" },
        { nombre: "Juego 2", descripcion: "Descripción del Juego 2" },
        { nombre: "Juego 3", descripcion: "Descripción del Juego 3" },
    ];


    function actualizarContenidoJuego(juegoId, juegoData) {
        const juegoElement = document.getElementById(juegoId);
        juegoElement.querySelector("h2").textContent = juegoData.nombre;
        juegoElement.querySelector("p").textContent = juegoData.descripcion;
    }

    
    actualizarContenidoJuego("juego1", minijuegos[0]);
    actualizarContenidoJuego("juego2", minijuegos[1]);
    actualizarContenidoJuego("juego3", minijuegos[2]);
});
