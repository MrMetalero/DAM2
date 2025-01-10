package com.example.springboot.ejerciciofinal.aplicacion.repositories;

import java.util.List;

import com.example.springboot.ejerciciofinal.aplicacion.models.TipoProducto;

public interface  ProductTypeRepository {
    List<TipoProducto> findAll();
    TipoProducto findById(Long id);
}
