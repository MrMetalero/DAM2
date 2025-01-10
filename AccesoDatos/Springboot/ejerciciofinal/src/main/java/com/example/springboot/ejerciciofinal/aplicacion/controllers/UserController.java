package com.example.springboot.ejerciciofinal.aplicacion.controllers;

import java.util.List;

import org.springframework.stereotype.Controller;
import org.springframework.ui.Model;
import org.springframework.web.bind.annotation.GetMapping;
import org.springframework.web.bind.annotation.PathVariable;
import org.springframework.web.bind.annotation.PostMapping;
import org.springframework.web.bind.annotation.RequestParam;

import com.example.springboot.ejerciciofinal.aplicacion.models.Producto;
import com.example.springboot.ejerciciofinal.aplicacion.models.TipoProducto;
import com.example.springboot.ejerciciofinal.aplicacion.repositories.ProductRepositoryImpl;
import com.example.springboot.ejerciciofinal.aplicacion.repositories.ProductTypeRepositoryImpl;
import com.example.springboot.ejerciciofinal.aplicacion.services.ImplServicioProducto;

@Controller
public class UserController {

    ProductTypeRepositoryImpl ptr = new ProductTypeRepositoryImpl();
    ProductRepositoryImpl pr = new ProductRepositoryImpl(ptr.findAll());
    ImplServicioProducto sp = new ImplServicioProducto(pr, ptr);
    List<TipoProducto> categorias = ptr.findAll();
    List<Producto> productos = pr.findAll();

    @GetMapping("/Categorias")
    public String listarTipos(Model model) {
        model.addAttribute("title", "Lista Categorias");
        model.addAttribute("categorias", categorias);
        return "listaTiposProductos";
    }

    @GetMapping("/Productos")
    public String listarProductos(Model model) {
        model.addAttribute("title", "Lista de Productos");
        model.addAttribute("productos", productos);
        return "listaProductos";
    }

    @GetMapping("/newProducto")
    public String newProducto(Model model) {
        model.addAttribute("categorias", categorias);
        return "newProducto";
    }

    @PostMapping("/newProducto")
    public String agregarProducto(
        Model model,
        @RequestParam(value = "id", required = false) Long id,
        @RequestParam(value = "nombre", required = false) String nombre,
        @RequestParam(value = "precio", required = false) Long precio,
        @RequestParam(value = "idCategoria", required = false) Long idCategoria
    ) {
        productos = sp.create(id, nombre, precio, idCategoria).findAll();

        model.addAttribute("title", "Lista de Productos");
        model.addAttribute("productos", productos);
        return "listaProductos";
    }

    @GetMapping("/borrarProducto/{id}")
    public String borrarProducto(
        @PathVariable Long id,
        Model model) {
        productos = sp.delete(id).findAll();

        model.addAttribute("title", "Lista de Productos");
        model.addAttribute("productos", productos);
        return "listaProductos";
    }

    @GetMapping("/modificarProducto/{id}")
    public String mostrarProducto(
        @PathVariable Long id,
        Model model) {
        if (id != null && pr.findAll() != null) {
            for (Producto pr : pr.findAll()) {
                if (pr.getId().equals(id)) {
                    model.addAttribute("producto", pr);
                }
            }
        }
        model.addAttribute("categorias", categorias);
        return "modificarProducto";
    }

    @PostMapping("/modificarProducto/{id}")
    public String modificarProducto(
        @PathVariable Long id,
        @RequestParam(value = "nombre", required = false) String nombre,
        @RequestParam(value = "precio", required = false) Long precio,
        @RequestParam(value = "idCategoria", required = false) Long idCategoria,
        Model model) {
        productos = sp.update(id, nombre, precio, idCategoria).findAll();

        model.addAttribute("title", "Lista de Productos");
        model.addAttribute("productos", productos);
        return "listaProductos";
    }
}
