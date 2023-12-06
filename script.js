document.addEventListener("DOMContentLoaded", function () {
    // Obtener el elemento "C"
    var movingElement = document.getElementById("movingElement");

    // Obtener el tamaño de la ventana
    var windowWidth = window.innerWidth;
    var windowHeight = window.innerHeight;

    // Número de estrellas y líneas
    var numStars = 50;

    // Crear estrellas y líneas
    for (var i = 0; i < numStars; i++) {
        createStar();
    }

    // Animación del elemento "C"
    function moveElement() {
        // Tu código de animación aquí...

        // Llamada recursiva para animar continuamente
        requestAnimationFrame(moveElement);
    }

    // Iniciar la animación
    moveElement();

    // Función para crear una estrella en una posición aleatoria
    function createStar() {
        var star = document.createElement("div");
        star.className = "star";
        star.style.left = Math.random() * windowWidth + "px";
        star.style.top = Math.random() * windowHeight + "px";
        document.body.appendChild(star);
    }

});
