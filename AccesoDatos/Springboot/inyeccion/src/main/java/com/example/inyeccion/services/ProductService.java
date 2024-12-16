package com.example.inyeccion.services;

import com.example.inyeccion.repositories.ProductRepository;

import java.util.List;
import java.util.stream.Collectors;

import com.example.inyeccion.models.Product;
public interface ProductService {
    List<Product> findAll();
    Product findById(Long id);
    

 

  

}
