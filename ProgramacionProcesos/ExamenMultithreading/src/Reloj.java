import java.util.Random;
import java.util.concurrent.Semaphore;

public class Reloj {
    // Es el recurso compartido
    static Semaphore semaforoReloj;
    static Integer numeroGenerado = -1;
    private int upperBound = 12;
    private int lowerBound = 5;
    
        public Reloj(Semaphore semaforoRecibido){
            semaforoReloj = semaforoRecibido;
    
        }
    
    
        public static int generarNumeroAleatorio(){
            numeroGenerado = new Random().nextInt(13);
            
            
            return numeroGenerado;
    }

}
