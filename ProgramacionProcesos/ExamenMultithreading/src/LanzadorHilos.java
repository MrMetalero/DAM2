import java.util.concurrent.CyclicBarrier;
import java.util.concurrent.Semaphore;

public class LanzadorHilos   {
    CyclicBarrier barreraPadre = new CyclicBarrier(6);
    public final int NUMERO_JUGADORES = 6;
    Semaphore semaforoPadre = new Semaphore(1, true);


    public void lanzarHilos(){

        for (int i = 0; i < NUMERO_JUGADORES; i++) {
            Jugador jugadorCreado = new Jugador(semaforoPadre,barreraPadre);
            Thread hiloJugador = new Thread(jugadorCreado);
            hiloJugador.setName("Jugador"+ i);
            hiloJugador.start();
        }


    }

  
}
