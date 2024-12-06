

const barraNavegacion = document.getElementById("navBarGeneral")
const sidepanel = document.getElementById("previewCardMain")

document.addEventListener("DOMContentLoaded", () => {

    fadeIn(sidepanel);
});

function fadeIn(element) {
    let opacity = 0; // Inicializamos la opacidad en 0
    element.style.opacity = opacity;
    element.style.display = "block"; // Aseguramos que sea visible

    const interval = setInterval(() => {
        if (opacity < 1) {
            opacity += 0.05; // Incrementamos la opacidad gradualmente
            element.style.opacity = opacity;
        } else {
            clearInterval(interval); // Detenemos el intervalo al llegar a 1
        }
    }, 50); // Incrementos cada 50 ms
}









