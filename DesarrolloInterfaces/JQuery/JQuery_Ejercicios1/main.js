

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


$(document).ready(function () {
    $("#tablaProductos").on("click", "button", function () {
        var fila = $(this).closest("tr");
        var nombreProducto = fila.find("td").eq(0).text();
        var precioProducto = parseFloat(fila.find("td").eq(1).text());

        var productoEncontrado = false;

        // Mirar si ya he metido el producto en el carrito
        $("#tablaCarrito tr").each(function () {
            var nombreProductoCarrito = $(this).find("td").eq(0).text();
            if (nombreProductoCarrito === nombreProducto) {
                productoEncontrado = true;

                // Incrementar la cantidad del producto
                var cantidadActual = parseInt($(this).find(".cantidad").text());
                $(this).find(".cantidad").text(cantidadActual + 1);
                actualizarTotal();
                return false;
            }
        });

        // Si no está en el carrito, lo agrego
        if (!productoEncontrado) {
            $("#tablaCarrito").append(
                "<tr>" +
                    "<td>" + nombreProducto + "</td>" +
                    "<td class='precio'>" + precioProducto.toFixed(2) + "</td>" +
                    "<td class='cantidad'>1</td>" +
                    "<td>" +
                        "<button class='remove-one-btn'>-</button>" +
                        " <button class='remove-btn'>Eliminar</button>" +
                    "</td>" +
                "</tr>"
            );
            actualizarTotal();
        }
    });

    // Botón para quitar un producto (reducir la cantidad)
    $("#tablaCarrito").on("click", ".remove-one-btn", function () {
        var fila = $(this).closest("tr");
        var cantidadActual = parseInt(fila.find(".cantidad").text());

        if (cantidadActual > 1) {
            // Reducir la cantidad
            fila.find(".cantidad").text(cantidadActual - 1);
        } else {
            // Si llega a 0, eliminar la fila completa
            fila.remove();
        }

        actualizarTotal();
    });

    // Botón para eliminar completamente una fila
    $("#tablaCarrito").on("click", ".remove-btn", function () {
        $(this).closest("tr").remove();
        actualizarTotal();
    });

    function actualizarTotal() {
        var total = 0;

        // Recorrer cada fila de la tabla del carrito
        $("#tablaCarrito tr").each(function () {
            var precio = $(this).find(".precio").text();
            var cantidad = $(this).find(".cantidad").text();

            // Asegurarse de que precio y cantidad no estén vacíos
            if (precio !== "" && cantidad !== "") {
                total += parseFloat(precio) * parseInt(cantidad);
            }
        });

        // Mostrar el total en el DOM
        $("#totalCarrito").remove();
        $("#tablaCarrito").after("<p style='text-align: center ;background-color :beige; max-width: 200px; border-radius:10px'  id='totalCarrito'><strong>Total:" + total.toFixed(2) + " €</p>");
    }
});










//  3. Reproductor de Notificaciones

//    - Crea un sistema de notificaciones en la página. Al hacer clic en un botón, muestra una notificación en la parte superior de la página (con fadeIn y fadeOut) que se oculta automáticamente después de unos segundos.

//    - Objetivo: Aprender a manejar la aparición y desaparición de elementos con efectos, y trabajar con temporizadores en jQuery.

 
$(document).ready(function () {
    
    $("#btnNotificacion").on("click", function () {
        
        $("#notificacion")
            .text("NOTIIIIFICAAAACIOOOOOOONNNNN GET EXILED!!!!") 
            .fadeIn(500, function () {
                //Cuando pasen 3 segundos, va a hacer timeout y lanzar la función de dentro para desaparer
                setTimeout(function () { $("#notificacion").fadeOut(500);}, 3000); 
            });
    });
});
 



//  4. Buscador de Frases

//    - Crea una lista de frases. Añade un campo de búsqueda y permite al usuario filtrar las frases en tiempo real según lo que escriba.

//    - Objetivo: Practicar el uso de `keyup()` y `filter()` para filtrar datos y mejorar la experiencia de usuario en tiempo real.

 
$(document).ready(function () {
    // Evento para el buscador de frases
    $("#campoBusqueda").on("keyup", function () {
        var textoBusqueda = $(this).val().toLowerCase(); // Texto de búsqueda en minúsculas

        //Paso entre todas las frases de magic :)
        $("#listaFrases li").each(function () {
            var frase = $(this).text().toLowerCase();

            // Si la encuentra la muestra, si no, la oculta
            if (frase.includes(textoBusqueda)) {
                $(this).show(); 
            } else {
                $(this).hide(); 
            }
        });
    });
});










//  5. Galería de Imágenes con Slideshow Automático

//    - Crea una galería de imágenes que cambie automáticamente cada 3 segundos. Incluye botones para que el usuario pueda navegar manualmente.

//    - Objetivo: Trabajar con `setInterval` y efectos como `fadeIn()` y `fadeOut()` para mejorar el dinamismo.


$(document).ready(function() {
    var indexImagen = 0; 
    var intervalo;

    // Para que TODAS las imágenes se pongan al mismo tamaño que si no me da mucho mareo moviendo la página
    $(".imagenGaleria").css({
        "width": "500px",   
        "height": "700px",  
        "display": "none"   
    });

    
    $(".imagenGaleria").eq(indexImagen).show();

    // Va pasando entre las imágenes usando el índice hasta que se acaben y vuelta a empezar
    function cambiarImagen() {
        var imagenes = $(".imagenGaleria");
        var totalImagenes = imagenes.length;

        
        $(imagenes[indexImagen]).hide();

        // Incrementar el índice para pasar a la siguiente imagen
        indexImagen = (indexImagen + 1) % totalImagenes; // Si llegamos al final, vuelve a la primera

        // Mostrar la nueva imagen
        $(imagenes[indexImagen]).show();
    }



    // Inicia cada 3 segundos la función para cambiar la imagen :)
    intervalo = setInterval(cambiarImagen, 3000);

    



    $("#siguienteButton").click(function() {
        clearInterval(intervalo); // Detener el slideshow automático

        var imagenes = $(".imagenGaleria");
        var totalImagenes = imagenes.length;


        //Esto lo he tenido que mirar porque no me salía ni a patadas la vueltecita al indice que tocaba y no podía más ya 
        $(imagenes[indexImagen]).hide();

        indexImagen = (indexImagen + 1) % totalImagenes; 

     
        $(imagenes[indexImagen]).show();

        intervalo = setInterval(cambiarImagen, 3000);
    });

 


    $("#anteriorButton").click(function() {
        clearInterval(intervalo); // esto para la ejecución el interval del slideshow

        var imagenes = $(".imagenGaleria");
        var totalImagenes = imagenes.length;

        $(imagenes[indexImagen]).hide();

        indexImagen = indexImagen - 1;
        // Si estamos en la primera imagen, vuelve a la última para hacer bien la vuelta
        if (indexImagen < 0) {
            indexImagen = totalImagenes - 1; 
        }

        
        $(imagenes[indexImagen]).show();

        intervalo = setInterval(cambiarImagen, 3000);
    });
});








