package com.example.demo.controllers;
import org.springframework.stereotype.Controller;
import org.springframework.web.bind.annotation.GetMapping;
import org.springframework.web.bind.annotation.PostMapping;
import org.springframework.ui.Model;
import org.springframework.web.bind.annotation.RequestParam;

@Controller
public class FormController {

    // This is the method to show the form
    @GetMapping("/userlist")
    public String showForm() {
        return "userlist"; // this will return the 'form.html' page
    }

    // This method will handle the POST request when the form is submitted
    @PostMapping("/submitForm")
    public String handleFormSubmit(@RequestParam("nombre") String nombre, 
                                    @RequestParam("apellido") String apellido, 
                                    Model model) {
        // Add data to model to send to the next view
        model.addAttribute("nombre", nombre);
        model.addAttribute("apellido", apellido);

        // Redirect to another page after the form is processed
        return "resultado"; // 'result.html' will display the data
    }
}
