

// 1. Sistema de Puntuación Dinámico

//    - Crea una lista de elementos (por ejemplo, películas o canciones) y un sistema de puntuación con estrellas. Al hacer clic en una estrella, el sistema debe cambiar la puntuación y guardar el valor en cada elemento.

//    - Objetivo: Trabajar con eventos de clic y manipulación del DOM para actualizar la interfaz en tiempo real.

$(document).ready(function() {
    // Iterate over each <li> inside #listaPelis
    $("#listaPelis li").each(function() {
        // Find all <img> tags inside each <li> and set the 'bloqueada' attribute
        $(this).find("img").attr("bloqueada", "false");
    });
});

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

 
















//  3. Reproductor de Notificaciones

//    - Crea un sistema de notificaciones en la página. Al hacer clic en un botón, muestra una notificación en la parte superior de la página (con fadeIn y fadeOut) que se oculta automáticamente después de unos segundos.

//    - Objetivo: Aprender a manejar la aparición y desaparición de elementos con efectos, y trabajar con temporizadores en jQuery.

 

 









//  4. Buscador de Frases

//    - Crea una lista de frases. Añade un campo de búsqueda y permite al usuario filtrar las frases en tiempo real según lo que escriba.

//    - Objetivo: Practicar el uso de `keyup()` y `filter()` para filtrar datos y mejorar la experiencia de usuario en tiempo real.

 











//  5. Galería de Imágenes con Slideshow Automático

//    - Crea una galería de imágenes que cambie automáticamente cada 3 segundos. Incluye botones para que el usuario pueda navegar manualmente.

//    - Objetivo: Trabajar con `setInterval` y efectos como `fadeIn()` y `fadeOut()` para mejorar el dinamismo.












