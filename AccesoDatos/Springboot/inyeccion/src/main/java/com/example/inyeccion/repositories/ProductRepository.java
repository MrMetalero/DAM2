package com.example.inyeccion.repositories;

import java.util.Arrays;
import java.util.List;

import com.example.inyeccion.models.Product;

public class ProductRepository {

    private List<Product> data;
    public ProductRepository(){
        this.data = Arrays.asList(
        new Product(1L,"Kaito",15L),
        new Product(2L,"Liliana",20L),
        new Product(3L,"Ajani",2L),
        new Product(4L,"Garruk",1L)
        );
    }



    public List<Product> findAll(){
        return data;
    }

    public Product findById(Long id){
        return data.stream().filter(p -> p.getId().equals(id)).findFirst().orElse(null);
    }

}
