package controllers;

import java.util.Map;

import org.springframework.stereotype.Controller;
import org.springframework.ui.Model;
import org.springframework.web.bind.annotation.GetMapping;

import models.User;

@Controller
public class UserController {

    @GetMapping("/models")
    public String mostrar(Map<String,Object> model){
        User user = new User("Daniel","Mena");
        user.setEmail("danymena@gmail");

        model.put("title","Título");
        model.put("user", user);
        
        return "details";
    }





}