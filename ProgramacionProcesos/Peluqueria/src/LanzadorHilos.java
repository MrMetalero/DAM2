import java.util.concurrent.Semaphore;

public class LanzadorHilos {
    
    private final Semaphore sillasDisponibles = new Semaphore(App.NUM_SILLAS, true);
    private final Semaphore clientesListos = new Semaphore(0, true);
    private final Semaphore barberosListos = new Semaphore(0, true);

    public void iniciarPrograma() {
        
        for (int i = 1; i <= App.NUM_BARBEROS; i++) {
            new Barbero(i, clientesListos, barberosListos, sillasDisponibles).start();
        }

        // Generar clientes
        for (int i = 1; i <= App.NUM_CLIENTES; i++) {
            new Cliente(i, clientesListos, barberosListos, sillasDisponibles).start();
            try {
                //Para que pase tiempo entre que llegan clientes
                Thread.sleep((int) (Math.random() * 2000)); 
            } catch (InterruptedException e) {
                Thread.currentThread().interrupt();
            }
        }
    }
}
