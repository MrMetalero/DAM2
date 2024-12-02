import java.util.ArrayList;
import java.util.HashMap;
import java.util.concurrent.BrokenBarrierException;
import java.util.concurrent.CyclicBarrier;
import java.util.concurrent.Semaphore;

public class Jugador implements Runnable {
    //Comentado para intentar usar semaphore
    // private CyclicBarrier barreraInterna = new CyclicBarrier(6);
    private Semaphore semaforoInterno = new Semaphore(1,true);
    private CyclicBarrier barreraJugador;
    private Semaphore semaforoJugador;
    private int numeroObtenido;
    private int vecesGanadas = 0;
    private String name;
    static Integer numeroCache;
    Integer resto;

    HashMap<Jugador, Integer> mapaResultados = new HashMap<>();


    public Jugador(Semaphore semaforoRecibido, CyclicBarrier barreraRecibida){
        semaforoJugador = semaforoRecibido;
        barreraJugador = barreraRecibida;
    }



    @Override
    public void run() {
        
        //Buscan número 10 veces
        for (int i = 0; i < 10; i++) {
            name = Thread.currentThread().getName();
            // Intenta acceder al semáforo, si puede, continúa a buscar número
            semaforoJugador.tryAcquire();
            numeroObtenido = Reloj.generarNumeroAleatorio();
            System.out.println("El jugador "+ name + " ha obtenido el número "+ numeroObtenido);
            
            //Mapeo el resultado y el objeto Jugador que lo obtiene
            mapaResultados.put(this, numeroObtenido);

            try {
                Thread.sleep(numeroObtenido * 1000);
            } catch (InterruptedException e) {
                e.printStackTrace();
            }

            //Espera a que todos los demás hayan pillado número
            System.out.println("El "+name+ " está esperando...");
            try {
                barreraJugador.await();
            } catch (InterruptedException | BrokenBarrierException e) {
                e.printStackTrace();
            }

            

            //Para testear que cuando compruebo todos los valores y
            //los meta en el HashMap, que tenga todos los valores
            //pueda compararlos y que solo los más cercanos a 10 reciban
            //el win (Igual ni me hace falta, porque el número lo pillo
            // y lo meto inmediatamente al hashmap con una barrier para esperar)

            //LO HE COMENTADO POR SI ME DA TIEMPO A USAR SEMAPHORE
            // try {
            //     barreraInterna.await();
            // } catch (InterruptedException | BrokenBarrierException e) {
            //     e.printStackTrace();
            // }

            try {
                semaforoInterno.acquire();
            } catch (InterruptedException e) {
                // TODO Auto-generated catch block
                e.printStackTrace();
            }
            comprobarNumero();

        }

        System.out.println("\n\nEl jugador "+name+" ha ganado "+vecesGanadas+" veces");


    }

    private void comprobarNumero(){
        //Dado que igual no me da tiempo pero tengo la idea de lo que quiero hacer
        //lo voy a explicar. 
        /*
         * No consigo realizar de forma sencilla una comparación de los objetos dentro del hashmap
         * pero la idea era comprobar sus restos, siendo el que tenga el menor de estos
         * el más cercano a 10, en caso de que fuese 10 exacto, le añado un win instantáneamente
         * el caso de empate de números funcionará de forma que el número con el menor resto al ser elegido
         * busca a quien tiene como Jugador y se les pone un win.
         * 
         * De hecho y ahora que lo pienso es posible que usar un Semaphore para
         * que poco a poco se vaya realizando la comparación del primer hilo que entra al código de 
         * comparación con los que se van poniendo a la cola uno a uno habria sido buena idea
         * guardo en numeroCache el que esté más cercano a 10 y como es estático lo voy comparando entre los diferentes
         * objetos.
         */
        

        if (numeroObtenido == 10) {
            numeroCache = numeroObtenido;
            vecesGanadas += 1;
        }

        if (numeroObtenido < 10) {
            resto = 10 - numeroObtenido;

        }

        if (numeroObtenido > 10) {
            resto =  numeroObtenido -10;
        }
    
       

    }



}
