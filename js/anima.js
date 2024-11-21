
function mostrarSaludo() {
    const saludoElement = document.getElementById("saludo");
    const hora = new Date().getHours();
    let saludo = "";

    if (hora >= 6 && hora < 12) {
        saludo = "Buenos días";
    } else if (hora >= 12 && hora < 18) {
        saludo = "Buenas tardes";
    } else {
        saludo = "Buenas noches";
    }

    saludoElement.textContent = saludo;
}

// Llamar a la función para mostrar el saludo al cargar la página
window.onload = mostrarSaludo;
