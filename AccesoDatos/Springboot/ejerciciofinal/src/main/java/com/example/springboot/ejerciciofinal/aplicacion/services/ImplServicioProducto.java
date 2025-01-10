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
    private ProductRepository productRepository;

    public ImplServicioProducto(ProductRepositoryImpl repository, ProductTypeRepositoryImpl ptr){
        this.productRepository = repository;
        this.ptr = ptr;
    }
    
    public List<Producto> findAll(){
        return productRepository.findAll();
    }

    public Producto findById(Long id){
        return productRepository.findById(id);
    }

    @Override
    public ProductRepository create(Long id, String nombre, Long precio, Long idCategoria) {
        if (nombre != null && !nombre.isEmpty() &&
            id != null &&
            precio != null &&
            idCategoria != null) {

            productRepository.findAll().add(new Producto(id, nombre, precio, idCategoria, ptr.findAll()));
            Collections.sort(productRepository.findAll(), Comparator.comparing(Producto::getId));
        }

        return productRepository;
    }

    @Override
    public ProductRepository update(Long id, String nombre, Long precio, Long idCategoria) {
        if (nombre != null && !nombre.isEmpty() && id != null && precio != null && idCategoria != null) {
        Producto productoModificado = null;

        
            for (Producto productRepository : productRepository.findAll()) {
                if (productRepository.getId().equals(id)) {
                    productoModificado = productRepository;
                    break;
                }
            }

            if (productoModificado != null) {
                productRepository.findAll().remove(productoModificado);
                productRepository.findAll().add(new Producto(id, nombre, precio, idCategoria, ptr.findAll()));
                Collections.sort(productRepository.findAll(), Comparator.comparing(Producto::getId));
            }
        }
        return productRepository;
    }

    @Override
    public ProductRepository delete(Long id) {
        if (id != null && productRepository.findAll() != null) {
            productRepository.findAll().removeIf(producto -> producto.getId().equals(id));
        }
        return productRepository;
    }
}
