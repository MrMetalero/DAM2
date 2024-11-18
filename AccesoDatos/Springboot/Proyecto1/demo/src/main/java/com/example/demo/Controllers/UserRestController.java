package com.example.demo.Controllers;

import java.util.ArrayList;
import java.util.HashMap;
import java.util.List;
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
    public List<Map<String,Object>> detalles(){
    
       List listaMapas = new ArrayList<HashMap<String,Object>>();


       for (int i = 0; i < 3; i++) {
        Map<String, Object> body = new HashMap<>();
        body.put("title", "Hola Mundo");
        body.put("name", "Daniel");
        body.put("surname", "Mena");
        body.put("numero", i);
        listaMapas.add(body);
       }
       

        
        return listaMapas;
    }





}
