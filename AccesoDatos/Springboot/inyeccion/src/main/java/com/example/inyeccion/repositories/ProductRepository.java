package com.example.inyeccion.repositories;

import java.util.Arrays;
import java.util.List;

import com.example.inyeccion.models.Product;

public interface ProductRepository {
    List<Product> findAll();
    Product findById(Long id);
       

}
