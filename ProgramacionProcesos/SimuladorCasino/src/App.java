
public class App {
    public static void main(String[] args) throws Exception {
    boolean encendido = true;
    LanzaHilos hiloLanzador = new LanzaHilos();
   

    


    while (encendido) {

        hiloLanzador.crearJugadores();

        hiloLanzador.crearRuleta();



        try {
            LanzaHilos.newBarrier.await();
        } catch (Exception e) {
            System.out.println("Ha habido un ERROR");
        }
    }
        

    System.out.println("ABORTADO");

    }



}
