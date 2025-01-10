package com.example.springboot.ejerciciofinal.aplicacion.repositories;

import java.util.ArrayList;
import java.util.Arrays;
import java.util.List;

import org.springframework.stereotype.Repository;

import com.example.springboot.ejerciciofinal.aplicacion.models.Producto;
import com.example.springboot.ejerciciofinal.aplicacion.models.TipoProducto;

@Repository
public class ProductRepositoryImpl implements ProductRepository{
    private List<Producto> data;

    public ProductRepositoryImpl(List<TipoProducto> categorias) {
        this.data = new ArrayList<>(Arrays.asList(
            new Producto(1L, "MONSTER MANGO LOCO", 2L, 1L, categorias),
            new Producto(2L, "MONSTER BLANCO", 1L, 2L, categorias),
            new Producto(3L, "MONSTER VENENO", 1L, 2L, categorias),
            new Producto(4L, "MONSTER CALENTADO CON TERMITA", 1L, 2L, categorias)
        ));
    }
    
    public List<Producto> findAll() {
        return data;
    }

    public Producto findById(Long id) {
        return data.stream().filter(p -> p.getId().equals(id)).findFirst().orElse(null);
    }
}
