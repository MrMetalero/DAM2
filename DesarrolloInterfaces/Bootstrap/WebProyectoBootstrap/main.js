

const cardAll = document.querySelectorAll(".card")

document.addEventListener("DOMContentLoaded", () => {

    fadeIn(cardAll);
});

function fadeIn(elementos, delay = 300) {
 
    elementos.forEach((elemento, index) => {
        setTimeout(() => {
            elemento.style.opacity = "1";
            elemento.style.transform = "translateY(0)";
        }, index * delay)
    });
}









