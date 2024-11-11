package com.example.demo.Controllers;

import org.springframework.stereotype.Controller;
import org.springframework.ui.Model;
import org.springframework.web.bind.annotation.GetMapping;

@Controller
public class UserController {

    //METODOLOGÍA MVC:
    //Siempre precedido en getmapping por "/"
    // Indicamos el nombre del fichero que va a devolver esta funcion. En nuestro caso details (que es un html5)
    @GetMapping("/llamada")
    public String mostrar(Model model){
        model.addAttribute("title", "Hola mundo");
        model.addAttribute("name", "Daniel");
        model.addAttribute("lastname", "Mena");
        return "details";
    }





}
