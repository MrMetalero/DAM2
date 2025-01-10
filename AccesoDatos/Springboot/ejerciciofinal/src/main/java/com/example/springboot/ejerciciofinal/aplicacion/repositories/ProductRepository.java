package com.example.springboot.ejerciciofinal.aplicacion.repositories;

import java.util.List;

import com.example.springboot.ejerciciofinal.aplicacion.models.Producto;

public interface  ProductRepository {
    List<Producto> findAll();
    Producto findById(Long id);
}
