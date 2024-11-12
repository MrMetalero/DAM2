import java.util.concurrent.BrokenBarrierException;

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

        try {
            LanzaHilos.newBarrier.await();
        } catch (InterruptedException | BrokenBarrierException e) {
            e.printStackTrace();
        }


        switch (tipoApuesta) {
            case "Singular":
                System.out.println("Apostando Singular...");
            break;

            case "Par/Impar":
                System.out.println("Apostando Par/Impar...");

            break;
        
            case "Martingala":
                System.out.println("Apostando Martingala...");
            break;


            default: System.out.println(" ERROR: Ese tipo de juego no existe");
            break;
        }


    }

}
