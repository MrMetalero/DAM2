package com.example.springboot.ejerciciofinal.aplicacion.repositories;

import java.util.ArrayList;
import java.util.Arrays;
import java.util.List;

import org.springframework.stereotype.Repository;

import com.example.springboot.ejerciciofinal.aplicacion.models.TipoProducto;

@Repository
public class ProductTypeRepositoryImpl implements ProductTypeRepository{
    private List<TipoProducto> datosProductos;

    public ProductTypeRepositoryImpl() {
        this.datosProductos = new ArrayList<>(Arrays.asList(
            new TipoProducto(1L, "Monster Bueno", "Dios te pedí un desayuno no un manjar"),
            new TipoProducto(2L, "Monster Malo", "Solo ligeramente cancerígeno"),
            new TipoProducto(3L, "Monster Uma Delicia", "Terriblemente venenoso"),
            new TipoProducto(4L, "Monster Regulinchi", "Bomb has been planted")
            ));
    }

  



    public List<TipoProducto> findAll() {
        return datosProductos;
    }




    public TipoProducto findById(Long id) {
        return datosProductos.stream().filter(p -> p.getId().equals(id)).findFirst().orElse(null);
    }
}
