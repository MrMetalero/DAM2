
// 
//  6. Contar los elementos de una lista
//  - Descripción: Crea un botón que cuente el número de elementos de una lista y lo muestre en un párrafo.

function contarLista() {
    
    document.getElementById("resultadoLista1").textContent = "El resultado de la cuenta es: " +document.getElementById("lista1").children.length
}

// 7. Cambiar una imagen al hacer clic
// - Descripción: Crea una imagen que cambie al hacer clic sobre ella.

function cambiarImagen(){
    document.getElementById("imagen1").src = "img/Saul.png"

}

// 8. Validar un campo de texto
// - Descripción: Crea un formulario con un campo de texto que muestre un mensaje de error si está vacío al hacer clic en un botón.

function comprobarVacio() {
    if (document.getElementById("cajaTexto1").value == "") {
        alert("Error! No puedes enviar un campo vacío al formulario")
    }

}


// 9. Cambiar el tamaño de un div con botones
// - Descripción: Crea dos botones, uno para aumentar y otro para reducir el tamaño de un `div`.

function cambiarDivSizeAumentar() {
    var alturaDiv = parseInt(document.getElementById("divModificable").style.minHeight) 
    document.getElementById("divModificable").style.minHeight = String(alturaDiv + 100) + "px" 
}

function cambiarDivSizeReducir() {
    var alturaDiv = parseInt(document.getElementById("divModificable").style.minHeight) 
    document.getElementById("divModificable").style.minHeight = String(alturaDiv - 100) + "px"  
}



// 10. Crear un reloj simple
// - Descripción: Crea un reloj que muestre la hora actual y se actualice cada segundo.


function darHora() {
    document.getElementById("parrafoHora").textContent = String(Date.now) 

}






