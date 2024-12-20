import java.util.concurrent.BrokenBarrierException;
import java.util.concurrent.CyclicBarrier;

public class LanzaHilos {
    final static int NUMERO_JUGADORES = 4;
    public static CyclicBarrier newBarrier = new CyclicBarrier(13);
   

        public  void crearJugadores(){
            for (int i = 0; i < NUMERO_JUGADORES; i++) {
                Jugador nuevoJugador = new Jugador("Singular", newBarrier);
                Thread nuevoHiloJugador = new Thread(nuevoJugador);
                nuevoHiloJugador.setName("Jugador Singular " + i);
                nuevoHiloJugador.start();
            }
        
            for (int i = 0; i < NUMERO_JUGADORES; i++) {
                Jugador nuevoJugador = new Jugador("Par/Impar", newBarrier);
                Thread nuevoHiloJugador = new Thread(nuevoJugador);
                nuevoHiloJugador.setName("Jugador Par/Impar " + i);
                nuevoHiloJugador.start();
            }

            for (int i = 0; i < NUMERO_JUGADORES; i++) {
                Jugador nuevoJugador = new Jugador("Martingala", newBarrier);
                Thread nuevoHiloJugador = new Thread(nuevoJugador);
                nuevoHiloJugador.setName("Jugador Martingala " + i);
                nuevoHiloJugador.start();
            }

        }

        public  void crearRuleta(){
            Ruleta nuevaRuleta = new Ruleta(newBarrier);
            Thread threadRuleta = new Thread(nuevaRuleta);
            System.out.println("\nRULETA CREADA, HILO CREADO. EMPEZANDO THREAD RULETA...");
            threadRuleta.start();

           

        }

        


    
}
