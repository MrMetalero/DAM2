package com.example.inyeccion.controllers;

import java.util.List;

import org.springframework.web.bind.annotation.GetMapping;
import org.springframework.web.bind.annotation.PathVariable;
import org.springframework.web.bind.annotation.RequestMapping;
import org.springframework.web.bind.annotation.RestController;

import com.example.inyeccion.models.Product;
import com.example.inyeccion.services.ProductService;

@RestController
@RequestMapping("/api") 
public class ControladorRest {
   
    private ProductService service = new ProductService();

    @GetMapping("/list")
    public List<Product> list(){
        return service.findAll();
    }

    @GetMapping("/show")
    public Product show(@PathVariable Long id){
        return service.findById(id);
    }


}
