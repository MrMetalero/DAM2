import java.util.concurrent.BrokenBarrierException;
import java.util.concurrent.CyclicBarrier;

public class Jugador implements Runnable {
    Integer cantidadDinero = 1000;
    Boolean apostando = false;  
    String tipoApuesta;
    CyclicBarrier barrera;
    int numeroApostado;
    String miNombre;

  

    public Jugador(){
        
    }

    public Jugador(String tipoApuesta, CyclicBarrier barrera){
        this.tipoApuesta = tipoApuesta;
        this.barrera = barrera;
        
    }

    @Override
    public void run() {
        miNombre = Thread.currentThread().getName();
      

        switch (tipoApuesta) {
            case "Singular":
                numeroApostado = GeneradorNumeros.generadorSingular();
                System.out.println(getMiNombre()+ " Apostando Singular..."+ numeroApostado);
                

            break;

            case "Par/Impar":
                //FALTA POR IMPLEMENTAR
                numeroApostado = GeneradorNumeros.generadorPares();
                System.out.println(getMiNombre()+ " Apostando Par/Impar..."+ numeroApostado);
            break;
        
            case "Martingala":
                //FALTA POR IMPLEMENTAR
                numeroApostado = GeneradorNumeros.generadorSingular();
                System.out.println(getMiNombre() + " Apostando Martingala..."+ numeroApostado);
            break;


            default: System.out.println(" ERROR: Ese tipo de juego no existe");
            break;
        }


        try {
            
            barrera.await();
        } catch (InterruptedException | BrokenBarrierException e) {
            e.printStackTrace();
        }


        try {
            Thread.sleep(1000);
        } catch (InterruptedException e) {
            e.printStackTrace();
        }
        if (numeroApostado == Ruleta.numeroResultado) {
            System.out.println(miNombre + " Ganador!");
        }

    }

    public String getMiNombre() {
        return miNombre;
    }

}
