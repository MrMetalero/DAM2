import java.util.concurrent.Semaphore;

public class Barbero extends Thread {
    private final int id;
    private final Semaphore clientesListos;
    private final Semaphore barberosListos;
    private final Semaphore sillasDisponibles;

    public Barbero(int id, Semaphore clientesListos, Semaphore barberosListos, Semaphore sillasDisponibles) {
        this.id = id;
        this.clientesListos = clientesListos;
        this.barberosListos = barberosListos;
        this.sillasDisponibles = sillasDisponibles;
    }

    @Override
    public void run() {
        while (true) {
            try {
                clientesListos.acquire(); 
                sillasDisponibles.release(); 
                System.out.println("Barbero " + id + " está cortando el pelo...");
                // Se espera porque está cortandio
                Thread.sleep((int) (Math.random() * 5000));
                System.out.println("Barbero " + id + " ha acabado de cortar el pelo.");
                barberosListos.release(); 
            } catch (InterruptedException e) {
                Thread.currentThread().interrupt();
            }
        }
    }
}