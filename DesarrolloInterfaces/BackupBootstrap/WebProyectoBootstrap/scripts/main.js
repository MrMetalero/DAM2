

//Para usar los tooltips y los popovers he visto que hace falta inicializarlos
//Así que aquí lo hacemos
document.addEventListener('DOMContentLoaded', function () {
    // Inicializar los tooltips
    var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'));
    tooltipTriggerList.map(function (tooltipTrigger) {
      return new bootstrap.Tooltip(tooltipTrigger);
    });

    // Inicializar los popovers
    var popoverTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="popover"]'));
    popoverTriggerList.map(function (popoverTrigger) {
      return new bootstrap.Popover(popoverTrigger);
    });
});


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









