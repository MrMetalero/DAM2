package com.example.demo.controllers;

import java.util.ArrayList;
import java.util.List;
import java.util.Map;

import org.springframework.stereotype.Controller;
import org.springframework.ui.Model;
import org.springframework.web.bind.annotation.GetMapping;

import com.example.demo.models.User;

@Controller
public class UserController {

    @GetMapping("/models")
    public String mostrar(Map<String,Object> model){
        List<User> usuarios = new ArrayList<>();
        User user1 = new User("Daniel","Mena");
        User user2 = new User("Jace","Beleren");
        User user3 = new User("Chandra","Nalaar");
        User user4 = new User("Vraska","Noname");
    
        usuarios.add(user1);
        usuarios.add(user2);
        usuarios.add(user3);
        usuarios.add(user4);
        

        model.put("title","Título");
        model.put("usuarios",usuarios);

        return "details";
    }





}