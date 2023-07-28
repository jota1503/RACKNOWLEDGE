document.addEventListener("DOMContentLoaded", function () {

    const minijuegos = [
        { nombre: "Español", descripcion: "---" },
        { nombre: "Ingles", descripcion: "---" },
        { nombre: "Matematicas", descripcion: "---" },
        { nombre: "Sociales", descripcion: "---" },
        { nombre: "Biologia", descripcion: "---" },
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