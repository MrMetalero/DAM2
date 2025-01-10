package com.example.springboot.ejerciciofinal.aplicacion.services;

import java.util.List;

import com.example.springboot.ejerciciofinal.aplicacion.models.*;
import com.example.springboot.ejerciciofinal.aplicacion.repositories.ProductRepository;

public interface  ServicioProducto {
    List<Producto> findAll();
    Producto findById(Long id);
    ProductRepository create(Long id, String nombre, Long precio, Long idCategoria);
    ProductRepository update(Long id, String nombre, Long precio, Long idCategoria);
    ProductRepository delete(Long id);
}
