

// 1. Sistema de Puntuación Dinámico

//    - Crea una lista de elementos (por ejemplo, películas o canciones) y un sistema de puntuación con estrellas. Al hacer clic en una estrella, el sistema debe cambiar la puntuación y guardar el valor en cada elemento.

//    - Objetivo: Trabajar con eventos de clic y manipulación del DOM para actualizar la interfaz en tiempo real.



 function hoverElementos() {  

   

    $("#listaPelis").children("li").children("img").hover(function(){
            $(this).prevAll().addBack().attr("src", "img/starRatingLit.png")
        

        if ($(this).attr("bloqueada") == "true") {
            

        } else {
            $(this).click(function() { 
                $(this).prevAll().addBack().attr("bloqueada","true")
                $(this).prevAll().addBack().attr("src", "img/starRatingLit.png")
    
            });
            

        }

       
    
        }, //SI DEJAS DE HACER HOVER O NO SE ESTÁ HACIENDO HOVER
        function(){
            if ($(this).attr("bloqueada") == "true"){

            }else{
                if ($(this).attr("bloqueada") == "false")
                $(this).prevAll().addBack().attr("src", "img/starRating.png")
            }

            
        }

    
    )

   
        
    

 };


 function  contarElementos(objetoEntrada){
    var longitud = $(objetoEntrada).length
    
    return longitud
 }












//  2. Simulador de Carrito de Compras

//    - Crea una lista de productos con precios. Permite que el usuario agregue o quite productos de un carrito, actualizando el total en tiempo real y mostrando una lista de productos seleccionados.

//    - Objetivo: Practicar la manipulación de datos y la actualización del DOM en un contexto de simulación de e-commerce.




function addElementoCarrito() {

   $("#tablaProductos").children("tr").children("td").children("button").on("click",function () { 
    
    var fila = $(this).closest('tr');
    var nombreProducto = fila.find('td').eq(0).text();  // El primer <td> contiene el nombre
    var precioProducto = parseFloat(fila.find('td').eq(1).text());  // El segundo <td> contiene el precio
    

    $("#tablaCarrito").append(
        "<tr>" + 
            "<td>" + nombreProducto + "</td>" +
            "<td>" + precioProducto + "</td>" +
            "<td><button class='remove-btn'>Remove</button></td>" +
         "</tr>"
          
    );
        
    $("#tablaCarrito").children("tr").children("td").children("button")
        $(selector).remove();
    });

    if ($('#tablaCarrito"').children("tr").children("td").text().trim() !== '') {
        $(this).append("<p> </p>")
    }

    
    
}


$(document).ready(function() {
    // Event delegation to bind click event to dynamically added buttons
    $("#tablaProductos").on("click", "button", function() {
        var fila = $(this).closest('tr');  // Get the closest <tr> that contains the clicked button
        var nombreProducto = fila.find('td').eq(0).text();  // Extract product name from the first <td>
        var precioProducto = parseFloat(fila.find('td').eq(1).text());  // Extract price from the second <td>
        
       //Para comprobar si se encuentra ya el elemento clicado en el carrito
       //Itera entre todos los tr del carrito y saca su texto del primer elemento para compararlo
        var productoEncontrado = false;
        $("#tablaCarrito tr").each(function() {
            var nombreProductoCarrito = $(this).find('td').eq(0).text();  // Get the product name from the cart
            if (nombreProductoCarrito === nombreProducto) {
                productoEncontrado = true;  // True es que si lo ha encontrado
                return true;  
            }
        });

        if (productoEncontrado) {
            $("#tablaCarrito").children("tr").

        } else {
            $("#tablaCarrito").append(
                "<tr>" +
                    "<td>" + nombreProducto + "</td>" +
                    "<td>" + precioProducto + "</td>" +
                    "<td>0</td>" +
                    "<td><button class='remove-btn'>Eliminar</button></td>" +
                "</tr>"
            );
        }
            
        

    });

    // Event handler to remove item from the cart when "Eliminar" is clicked
    $("#tablaCarrito").on("click", ".remove-btn", function() {
        $(this).closest('tr').remove();  // Remove the row containing the clicked button
    });
});











//  3. Reproductor de Notificaciones

//    - Crea un sistema de notificaciones en la página. Al hacer clic en un botón, muestra una notificación en la parte superior de la página (con fadeIn y fadeOut) que se oculta automáticamente después de unos segundos.

//    - Objetivo: Aprender a manejar la aparición y desaparición de elementos con efectos, y trabajar con temporizadores en jQuery.

 

 









//  4. Buscador de Frases

//    - Crea una lista de frases. Añade un campo de búsqueda y permite al usuario filtrar las frases en tiempo real según lo que escriba.

//    - Objetivo: Practicar el uso de `keyup()` y `filter()` para filtrar datos y mejorar la experiencia de usuario en tiempo real.

 











//  5. Galería de Imágenes con Slideshow Automático

//    - Crea una galería de imágenes que cambie automáticamente cada 3 segundos. Incluye botones para que el usuario pueda navegar manualmente.

//    - Objetivo: Trabajar con `setInterval` y efectos como `fadeIn()` y `fadeOut()` para mejorar el dinamismo.












