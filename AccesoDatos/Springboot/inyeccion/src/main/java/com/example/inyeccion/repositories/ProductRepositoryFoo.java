package com.example.inyeccion.repositories;

import java.util.Collections;
import java.util.List;

import org.springframework.context.annotation.Primary;
import org.springframework.stereotype.Repository;

import com.example.inyeccion.models.Product;

@Primary
@Repository
public class ProductRepositoryFoo implements ProductRepository {

    @Override
    public List<Product> findAll() {
        return Collections.singletonList(new Product(1L,"Kaito",600L));
    }

    @Override
    public Product findById(Long id) {
        return new Product(id,"Kaito", 600L);
    }
    
}
