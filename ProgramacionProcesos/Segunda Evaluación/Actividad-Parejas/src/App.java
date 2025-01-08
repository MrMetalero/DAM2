import java.util.HashMap;

public class App {
    private static final int PORT = 1337; // Puerto del servidor

    public static void main(String[] args) {
        // Crear instancia del servidor
        Server server = new Server(PORT);

        // Crear un hilo para el servidor y ejecutarlo
        Thread serverThread = new Thread(server);
        serverThread.start();

        System.out.println("INFO: Server running on port " + PORT);
    }
}