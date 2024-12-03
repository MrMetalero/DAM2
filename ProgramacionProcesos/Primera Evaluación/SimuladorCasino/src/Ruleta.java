import java.util.Random;
import java.util.concurrent.*;

public class Ruleta implements Runnable {
    private Random numeroRandom = new Random();
    private Boolean esperandoApuestas = false;
    public static int numeroResultado;
    private Integer dineroBanca = 50000;
    CyclicBarrier barrera;


    Ruleta(CyclicBarrier barrera){
       this.barrera = barrera;

    }

    @Override
    public void run(){
        System.out.println("Iniciando juego...");
        iniciarJuego();

        System.out.println("Comprobando si se ha acabado de apostar..." );
        try {
            barrera.await();
        } catch (InterruptedException | BrokenBarrierException e) {
            
            e.printStackTrace();
        }
        System.out.println("SE HA ACABADO DE APOSTAR..." );
       
        
        numeroResultado = girarRuleta();
        // Una vez se alcancen los límites de la cyclic barrier, se pasará a generar el número
        System.out.println("El número de la ruleta es: " + numeroResultado);
            
        


       

    }



    private void iniciarJuego(){
        Boolean juegoEncendido = true;
        esperandoApuestas = true;
        System.out.println("Iniciando espera de apuestas " + "esperandoApuestas = " +  esperandoApuestas);

        esperandoApuestas();
 
        

    }


    private void esperandoApuestas(){
        try {
            System.out.println("ESPERANDO APUESTAS");
            Thread.sleep(3000);
        } catch (InterruptedException e) {
            e.printStackTrace();
            System.out.println("SE HA INTERRUMPIDO LA APUESTA");
        }
    }




    private int girarRuleta(){
        System.out.println("\nGIRANDO LA RULETA ...");
        numeroResultado = numeroRandom.nextInt(37);

        return numeroResultado;
    }






    public Boolean getEsperandoApuestas() {
        return esperandoApuestas;
    }

    public void setEsperandoApuestas(Boolean esperandoApuestas) {
        this.esperandoApuestas = esperandoApuestas;
    }

    public int getNumeroResultado() {
        return numeroResultado;
    }

    public void setNumeroResultado(int numeroResultado) {
        this.numeroResultado = numeroResultado;
    }

    public Integer getDineroBanca() {
        return dineroBanca;
    }

    public void setDineroBanca(Integer dineroBanca) {
        this.dineroBanca = dineroBanca;
    }


}







