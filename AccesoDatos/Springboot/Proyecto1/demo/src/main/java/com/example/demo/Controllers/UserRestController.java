package com.example.demo.Controllers;

import java.util.HashMap;
import java.util.Map;

import org.springframework.ui.Model;
import org.springframework.web.bind.annotation.GetMapping;
import org.springframework.web.bind.annotation.RestController;

@RestController
public class UserRestController {

   //METODOLOGÍA MVC:
    //Siempre precedido en getmapping por "/"
    // Indicamos el nombre del fichero que va a devolver esta funcion. En nuestro caso details (que es un html5)
    @GetMapping("/llamadaMap")
    public Map<String, Object> detalles(){
       
        Map<String, Object> body = new HashMap<>();
        body.put("title", "Hola Mundo");
        body.put("name", "Daniel");
        body.put("surname", "Mena");
        return body;
    }





}
