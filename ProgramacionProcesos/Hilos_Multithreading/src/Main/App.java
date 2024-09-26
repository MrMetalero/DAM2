package Main;

public class App {
    public static void main(String[] args){
        final int NUM_HILOS = 500;
        String nombre = args[0];
        EjecutorTareaCompleja op;


        for (int i=0; i<NUM_HILOS; i++) {
            op = new EjecutorTareaCompleja("Hilo "+ nombre + " - " + i);
            Thread hilo = new Thread(op);
            hilo.start();
        }


    }


   

        
    
}
