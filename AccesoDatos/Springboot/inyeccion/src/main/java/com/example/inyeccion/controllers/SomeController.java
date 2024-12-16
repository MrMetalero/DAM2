package com.example.inyeccion.controllers;

import java.util.List;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.web.bind.annotation.RequestMapping;
import org.springframework.web.bind.annotation.RestController;

import com.example.inyeccion.models.Product;
import com.example.inyeccion.services.ProductServiceImpl;
import org.springframework.web.bind.annotation.GetMapping;
import org.springframework.web.bind.annotation.PathVariable;
import org.springframework.web.bind.annotation.RequestParam;


@RestController
@RequestMapping("/api")
public class SomeController {
    
    @Autowired
    private ProductServiceImpl service; //Limpiando la clase concreta

    //@Autowired 
    //public void setService(ProductServiceImpl service) { //Inyectando mediante setter
    // this.service = service;
    //}
    //
    //

    //public SomeController(ProductService service){ //Mediante constructor, no necesita autowired
    //  this.service = service
    //{

    
    @GetMapping("/productos")
    public List<Product> listProducts() {
        return service.findAll();
    }
    
    @GetMapping("/productos/{id}")
    public Product list(@PathVariable Long id) {
        return service.findById(id);
    }

}
