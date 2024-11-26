import java.util.concurrent.Semaphore;

public class Cliente extends Thread {
    private final int id;
    private final Semaphore clientesListos;
    private final Semaphore barberosListos;
    private final Semaphore sillasDisponibles;

    public Cliente(int id, Semaphore clientesListos, Semaphore barberosListos, Semaphore sillasDisponibles) {
        this.id = id;
        this.clientesListos = clientesListos;
        this.barberosListos = barberosListos;
        this.sillasDisponibles = sillasDisponibles;
    }

    @Override
    public void run() {
        System.out.println("Cliente " + id + " llegó a la barbería.");
        
        //El intento de pillar la silla
        if (sillasDisponibles.tryAcquire()) { 
            System.out.println("Cliente " + id + " se sienta en una silla.");
            clientesListos.release(); 
            try {
                barberosListos.acquire(); 
                System.out.println("Cliente " + id + " está siendo atendido.");
            } catch (InterruptedException e) {
                Thread.currentThread().interrupt();
            }
        } else {
            System.out.println("Cliente " + id + " se va porque no hay sillas disponibles.");
        }
    }
}