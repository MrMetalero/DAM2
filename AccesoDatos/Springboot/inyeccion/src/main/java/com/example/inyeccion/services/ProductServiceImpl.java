package com.example.inyeccion.services;

import com.example.inyeccion.repositories.ProductRepository;
import com.example.inyeccion.repositories.ProductRepositoryImpl;

import java.util.List;
import java.util.stream.Collectors;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Service;

import com.example.inyeccion.models.Product;
@Service
public class ProductServiceImpl implements ProductService {
    //private ProductServiceImpl repository = new ProductServiceImpl(); //Inyección or la capa de acceso a datos
    
    //@Autowired
    //private ProductRepositoryImpl repository; // Inyectando la clase concreta

    @Autowired
    private ProductRepositoryImpl repository; //Inyectando la interfaz

    //@Autowired
    // public void setService(ProductServiceImpl service) { //Inyectado mediante el setter
    // this.service = service
    //}

    //@Autowired
     public void ProductRepositoryImpl(ProductRepositoryImpl repository) {
     this.repository = repository;
    }


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
