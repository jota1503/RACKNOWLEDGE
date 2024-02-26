document.addEventListener("DOMContentLoaded", function () {

    const minijuegos = [
        { nombre: "Prueba 1", descripcion: "Una diversa variedad de preguntas de diferentes categorias" },
        { nombre: "Prueba 2", descripcion: "Descripción de la prueba 2" },
        { nombre: "Prueba 3", descripcion: "Descripción de la prueba 3" },
        { nombre: "+", descripcion: "" },
    ];


    function actualizarContenidoJuego(juegoId, juegoData) {
        const juegoElement = document.getElementById(juegoId);
        juegoElement.querySelector("h2").textContent = juegoData.nombre;
        juegoElement.querySelector("p").textContent = juegoData.descripcion;
    }

    
    actualizarContenidoJuego("juego1", minijuegos[0]);
    actualizarContenidoJuego("juego2", minijuegos[1]);
    actualizarContenidoJuego("juego3", minijuegos[2]);
    actualizarContenidoJuego("creareva", minijuegos[3]);
});