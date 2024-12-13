package com.example.inyeccion.services;

import com.example.inyeccion.repositories.ProductRepository;

import java.util.List;
import java.util.stream.Collectors;

import com.example.inyeccion.models.Product;
public class ProductService {
    private ProductRepository repository = new ProductRepository();
    

    public List<Product> findAll(){
        return repository.findAll().stream().map(p -> {
            Double priceImp = p.getPrice()*1.21d;
            p.setPrice(priceImp.longValue()); // Quitar para implementar con una nueva instancia o clone
            return p;


        }).collect(Collectors.toList());
    }

    public Product findById(Long id){
        return repository.findById(id);

    }

  

}
