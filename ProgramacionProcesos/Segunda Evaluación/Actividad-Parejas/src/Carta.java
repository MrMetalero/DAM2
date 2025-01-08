public class Carta {
    private int cantidad;
    private String nombre;

    public Carta(int cantidad, String nombre){
        this.cantidad = cantidad;
        this.nombre = nombre;
    }

    public int getCantidad() {
        return cantidad;
    }

    public void setCantidad(int cantidad) {
        this.cantidad = cantidad;
    }

    public String getNombre() {
        return nombre;
    }

    public void setNombre(String nombre) {
        this.nombre = nombre;
    }
}
