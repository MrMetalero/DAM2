package com.example.springboot.ejerciciofinal.aplicacion.models;
import java.util.List;

public class Producto implements Cloneable {
    private Long id;
    private String nombre;
    private Long precio;
    private Long precioConImpuesto;
    private Long idCategoria;
    private String tipoProducto;

    public Producto() {}

    public Producto(Long id, String nombre, Long precio, Long idCategoria, List<TipoProducto> categorias) {
        this.id = id;
        this.nombre = nombre;
        this.precio = precio;
        this.precioConImpuesto = calcularIva(precio);
        this.idCategoria = idCategoria;
        this.tipoProducto = obtenerNombrePorId(categorias, idCategoria);
    }

   
    public Long getId() {
        return id;
    }

    public void setId(Long id) {
        this.id = id;
    }

    public String getNombre() {
        return nombre;
    }

    public void setNombre(String nombre) {
        this.nombre = nombre;
    }

    public Long getPrecio() {
        return precio;
    }

    public void setPrecio(Long precio) {
        this.precio = precio;
    }

    public Long getPrecioConImpuesto() {
        return precioConImpuesto;
    }

    public void setPrecioConImpuesto(Long precioConImpuesto) {
        this.precioConImpuesto = precioConImpuesto;
    }

    public Long getIdCategoria() {
        return idCategoria;
    }

    public void setIdCategoria(Long idCategoria) {
        this.idCategoria = idCategoria;
    }

    public String getTipoProducto() {
        return tipoProducto;
    }

    public void setTipoProducto(String tipoProducto) {
        this.tipoProducto = tipoProducto;
    }

    private Long calcularIva(Long precio) {
        return precio + ((precio * 21) / 100);
    }

    public String obtenerNombrePorId(List<TipoProducto> categorias, Long id) {
        for (TipoProducto categoria : categorias) {
            if (categoria.getId().equals(id)) {
                return categoria.getNombre();
            }
        }
        return "";
    }

    @Override
    public Object clone() {
        try {
            return super.clone();
        } catch (CloneNotSupportedException e) {
            e.printStackTrace();
            return null;
        }
    }
}
