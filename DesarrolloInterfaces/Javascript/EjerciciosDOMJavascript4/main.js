


function contarElementos(){
    var listaModificable = document.getElementById("listaModificable").getElementsByTagName("li");
    
    return listaModificable.length;
}

function crearElementoLi() {
    const listItemNuevo = document.createElement("li");
    listItemNuevo.textContent = "Este es el nuevo elemento";
    //Añade elementos
    document.getElementById("listaModificable").appendChild(listItemNuevo);

    // Actualizar el contador
    document.getElementById("numeroContadorLi").textContent = contarElementos();
}

function eliminarElementoLi() {
    var listaModificable = document.getElementById("listaModificable");
    //Si hay un último elemento
    if (listaModificable.lastChild) {
        listaModificable.removeChild(listaModificable.lastChild);
        
        // Actualizar el contador
        document.getElementById("numeroContadorLi").textContent = contarElementos();
    }
}

// 7. Cambiar una imagen al hacer clic y restablecerla después de unos segundos
// - Descripción: Crea una imagen que cambie al hacer clic y vuelva a su estado original después de 3 segundos.


function cambiarImagen(){
    var imagenCambiar = document.getElementById("imagenCambiar")

    if (imagenCambiar.src != "img/Dies of cringe.gif") {
        imagenCambiar.src = "img/Dies of cringe.gif";
        imagenCambiar.width = "300"; 
        setTimeout(() => { imagenCambiar.src = "img/SamSmile.png" }, 1200);
    
    }else{
        
    }

   

}



// 8. Validar un campo de texto y cambiar el borde si está vacío
// - Descripción: Crea un formulario con un campo de texto que cambie su borde a rojo si está vacío al hacer clic en un botón, o verde si es válido.



function validarTexto(){
    var textoValidarCaja = document.getElementById("TextoValidar")
    var textoValidar = document.getElementById("TextoValidar").value
    if (textoValidar == "") {
        textoValidarCaja.style.borderColor = "red"
    } else {
        textoValidarCaja.style.borderColor = "green"
    }


}



// 9. Cambiar el tamaño de un div con botones y limitar su tamaño máximo y mínimo
// - Descripción: Crea dos botones, uno para aumentar y otro para reducir el tamaño de un `div`, con límites en su tamaño máximo y mínimo.




function cambiarDivSizeAumentar() {
    var alturaDiv = parseInt(document.getElementById("divModificable").style.minHeight) 

    if (alturaDiv >= 200) {
        //No hace nada para evitar subir a más de 200px
    }else{
        document.getElementById("divModificable").style.minHeight = String(alturaDiv + 50) + "px" 
    }
   


}

function cambiarDivSizeReducir() {
    var alturaDiv = parseInt(document.getElementById("divModificable").style.minHeight) 

    if (alturaDiv <=50) {
        //No hace nada para evitar bajar a menos de 50px
    }else{
        document.getElementById("divModificable").style.minHeight = String(alturaDiv - 50) + "px"  

    }
}


// 10. Crear un reloj simple con formato personalizado
// - Descripción: Crea un reloj que muestre la hora actual en formato `HH:MM:SS` y se actualice cada segundo.


setInterval("crearReloj()",1000)


function crearReloj() {
    
   document.getElementById("headerHora").textContent = String( new Date().toLocaleTimeString())
}
    






