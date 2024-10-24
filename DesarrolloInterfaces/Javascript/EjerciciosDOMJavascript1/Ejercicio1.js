

function cambiarParrafo() {
    document.getElementById("p1").textContent = "Modificado"
   document.getElementById("p1").style.backgroundColor  = "red"
}

function cambiarFondoDiv() {
    document.getElementById("div1").style.backgroundColor  = "grey"

}

function ocultarParrafo() {
    document.getElementById("p2").style.visibility = "hidden"


}


function crearParrafo() {
    const listItemNuevo = document.createElement("li")
    listItemNuevo.textContent = "Este es el nuevo elemento"
    document.getElementById("listaModificable").appendChild(listItemNuevo)
}

function eliminarElemento() {
    document.getElementById("listaModificable").removeChild(document.getElementById("listaModificable").lastChild)

}





