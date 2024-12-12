

const cardAll = document.querySelectorAll(".card")

document.addEventListener("DOMContentLoaded", () => {

    fadeIn(cardAll);
});

function fadeIn(elementos, delay = 300) {
 
    elementos.forEach((elemento, index) => {
        setTimeout(() => {
            elemento.style.opacity = "0.9";
            
            elemento.style.transform = "translateY(0)";



          // Selecciona todos los h3 y p dentro del árbol del elemento (incluso si hay un div intermedio)
          const headersAndParagraphs = elemento.querySelectorAll('div h3, div p, div a');

          // Aplica la opacidad a 1 para cada h3 y p encontrado
          headersAndParagraphs.forEach((innerElement) => {
              innerElement.style.opacity = "1";
          });


        }, index * delay)
    });
}









