package com.example.springboot.ejerciciofinal.aplicacion.services;

import java.util.Collections;
import java.util.Comparator;
import java.util.List;

import org.springframework.stereotype.Service;

import com.example.springboot.ejerciciofinal.aplicacion.models.*;
import com.example.springboot.ejerciciofinal.aplicacion.repositories.ProductRepository;
import com.example.springboot.ejerciciofinal.aplicacion.repositories.ProductRepositoryImpl;
import com.example.springboot.ejerciciofinal.aplicacion.repositories.ProductTypeRepositoryImpl;

@Service
public class ImplServicioProducto implements ServicioProducto{
    private ProductTypeRepositoryImpl ptr; 
    private ProductRepository pr;

    public ImplServicioProducto(ProductRepositoryImpl repository, ProductTypeRepositoryImpl ptr){
        this.pr = repository;
        this.ptr = ptr;
    }
    
    public List<Producto> findAll(){
        return pr.findAll();
    }

    public Producto findById(Long id){
        return pr.findById(id);
    }

    @Override
    public ProductRepository create(Long id, String nombre, Long precio, Long idCategoria) {
        if (nombre != null && !nombre.isEmpty() &&
            id != null &&
            precio != null &&
            idCategoria != null) {

            pr.findAll().add(new Producto(id, nombre, precio, idCategoria, ptr.findAll()));
            Collections.sort(pr.findAll(), Comparator.comparing(Producto::getId));
        }

        return pr;
    }

    @Override
    public ProductRepository update(Long id, String nombre, Long precio, Long idCategoria) {
        if (nombre != null && !nombre.isEmpty() && id != null && precio != null && idCategoria != null) {
        Producto productoModificado = null;

        
            for (Producto pr : pr.findAll()) {
                if (pr.getId().equals(id)) {
                    productoModificado = pr;
                    break;
                }
            }

            if (productoModificado != null) {
                pr.findAll().remove(productoModificado);
                pr.findAll().add(new Producto(id, nombre, precio, idCategoria, ptr.findAll()));
                Collections.sort(pr.findAll(), Comparator.comparing(Producto::getId));
            }
        }
        return pr;
    }

    @Override
    public ProductRepository delete(Long id) {
        if (id != null && pr.findAll() != null) {
            pr.findAll().removeIf(producto -> producto.getId().equals(id));
        }
        return pr;
    }
}
