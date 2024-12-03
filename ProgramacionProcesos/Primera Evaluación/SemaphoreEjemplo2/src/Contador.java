import java.util.Random;
import java.util.concurrent.Semaphore;


public class Contador {
    private static Random numeroRandom = new Random();
        Semaphore semaforo;
        private int sumaTotal = 0;
        
        public Contador(){

        }


        public void generarNumeroRandom(Semaphore semaforo){
            this.semaforo = semaforo;
            sumaTotal =  numeroRandom.nextInt(11)+5;


        }

}

