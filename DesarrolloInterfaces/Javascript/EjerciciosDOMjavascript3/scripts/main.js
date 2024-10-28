
///<reference path="../index.html" />




// 1. Modificar el contenido de varios párrafos dinámicamente
// - Descripción: Crea un botón que cambie el contenido de todos los párrafos de la página al hacer clic.





function cambiarDivSizeAumentar() {
    var parrafosArray = document.getElementByClassName("pModificable")
    

   parrafosArray.forEach();
    
    
    var alturaDiv = parseInt(document.getElementById("pModificable").style.minHeight) 
    document.getElementById("pModificable").style.minHeight = String(alturaDiv + 50) + "px" 
}

function cambiarDivSizeReducir() {

}





