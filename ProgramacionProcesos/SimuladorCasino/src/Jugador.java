public class Jugador implements Runnable {
    Integer cantidadDinero = 1000;
    Boolean apostando = false;  
    String tipoApuesta;
    

    public Jugador(){
        
    }

    public Jugador(String tipoApuesta){
        this.tipoApuesta = tipoApuesta;
        
    }

    @Override
    public void run() {
        switch (tipoApuesta) {
            case "Singular":
                
            break;

            case "Par/Impar":
            
            break;
        
            case "Martingala":
                
            break;


            default: System.out.println(" ERROR: Ese tipo de juego no existe");
            break;
        }


    }

}
