import java.util.Random;


public class Ruleta {
    private Random numeroRandom = new Random();

    private Boolean esperandoApuestas = false;
    private int numeroResultado;
    private Integer dineroBanca = 50000;


    Ruleta(){
        iniciarJuego();

    }

    public void iniciarJuego(){
        Boolean juegoEncendido = false;
       
        while (juegoEncendido) {
            esperandoApuestas();
 
        }

    }


    public void esperandoApuestas(){
        try {
            Thread.sleep(30000);
        } catch (InterruptedException e) {
            e.printStackTrace();
            System.out.println("SE HA INTERRUMPIDO LA APUESTA");
        }
    }




    public int girarRuleta(){
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







