package app;

import java.util.Map;

public class Main {
    final private static String host = "127.0.0.1";
    final private static int port = 0; // Use 0 to let the OS assign an available port

    // Cuentas para el login
    final static Map<String, String> users = Map.of(
        "ajani", "contadores",
        "ivan", "valencia",
        "dani", "tarkov",
        "liliana", "muertos",
        "kaito", "mapache"
    );

    public static void main(String[] args) {
        try {
            // Create server with port 0 (random port assigned by OS)
            Server servidorCreado = new Server(port);
            Thread hiloServer = new Thread(servidorCreado);

            // Start the server thread
            hiloServer.start();

            // Wait for the server to initialize and get the actual port
            Thread.sleep(1000); // Small delay to ensure the server is running

            int actualPort = servidorCreado.getPort(); // Get the assigned port

            // Start the client with the actual server port
            Cliente cliente1 = new Cliente(host, actualPort);
            Thread hiloCliente = new Thread(cliente1);
            hiloCliente.start();

        } catch (InterruptedException e) {
            System.err.println("Error: " + e.getMessage());
        }
    }
}
