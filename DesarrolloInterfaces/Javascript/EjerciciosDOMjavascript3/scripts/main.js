
// Nota "Se ha puesto este main.js en una carpeta scripts para ver si el intellisense de VisualStudio pilla las referencias
// a los objetos desde aquí, pero de momento parece que no"




// 1. Modificar el contenido de varios párrafos dinámicamente
// - Descripción: Crea un botón que cambie el contenido de todos los párrafos de la página al hacer clic.



function cambiarContenidoParrafo() {
    var parrafosArray = document.getElementsByClassName("pModificable");
    

    for(var i = 0, len = parrafosArray.length; i < len; i++) {
        parrafosArray[i].textContent = "Este es el nuevo texto";
    
    }

}


// 2. Cambiar el color de fondo de un div de forma alternada
// - Descripción: Crea un botón que cambie el color de fondo de un `div` alternando entre dos colores.

var booleanRojoNegro = true;

function cambiarColorDiv(){
    var divCambiarColor = document.getElementById("divColor");
    

    if (booleanRojoNegro) {
        divCambiarColor.style.backgroundColor = "black";
        booleanRojoNegro = false;
    } else {
        divCambiarColor.style.backgroundColor = "brown";
        booleanRojoNegro = true;
    }

    



}


// 3. Mostrar y ocultar un elemento con transición
// - Descripción: Crea un botón que oculte o muestre un párrafo con una transición suave al cambiar la opacidad.
var booleanOpacidad = true;
function transicionDiv(){
    var divOpacidad = document.getElementById("divOpacidad");
    
    if (booleanOpacidad) {
        //El primero para la transición y el segundo para la opacidad
        divOpacidad.style.transition = "opacity 0.5s";
        divOpacidad.style.opacity = "0";

        booleanOpacidad = false;
    } else {
         //El primero para la transición y el segundo para la opacidad
         divOpacidad.style.transition = "opacity 0.5s";
         divOpacidad.style.opacity = "1";
 
         booleanOpacidad = true;
    }


  
}


// 4. Añadir un nuevo elemento a la lista con contenido personalizado
// - Descripción: Crea un campo de texto y un botón que permita al usuario añadir un nuevo elemento a la lista con el texto que ha introducido.


function crearElementoListaBox1(){
    var cajaTexto1 = document.getElementById("textBox1");
    var stringTexto = cajaTexto1.value;
    const listItemNuevo = document.createElement("li");

    listItemNuevo.textContent = stringTexto;
    document.getElementById("listaElementos").appendChild(listItemNuevo);


   

}



// 5. Eliminar un elemento específico de la lista
// - Descripción: Crea un botón que permita eliminar un elemento específico de una lista al hacer clic en él.

function eliminarElementoListaBox1(){
    // He tenido que usar una cosa que delega los listeners de ul 
    // para que funcione bien de forma dinámica con el resto de elementos
    // si no, los elementos nuevos no tenían la funcionalidad

    document.getElementById("listaElementos").addEventListener("click", function(event) {
        if (event.target && event.target.nodeName === "LI") {
            event.target.parentNode.removeChild(event.target);
        }
    });
   

}






