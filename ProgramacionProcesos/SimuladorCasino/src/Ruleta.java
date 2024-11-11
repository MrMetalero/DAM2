import java.util.Random;
import java.util.concurrent.*;

public class Ruleta implements Runnable {
    private Random numeroRandom = new Random();
    private Boolean esperandoApuestas = false;
    private int numeroResultado;
    private Integer dineroBanca = 50000;


    Ruleta(){
       

    }

    @Override
    public void run(){
        System.out.println("Iniciando juego...");
        iniciarJuego();

        System.out.println("Comprobando si se ha acabado de apostar..." );
        if (esperandoApuestas == false) {
            System.out.println("El número de la ruleta es: " + girarRuleta());
            
        }

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
            Thread.sleep(30000);
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







