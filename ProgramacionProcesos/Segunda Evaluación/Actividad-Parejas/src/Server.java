import java.io.*;
import java.net.*;
import java.util.*;

public class Server implements Runnable {
    private ServerSocket server;
    private final int port;

    public Server(int port) {
        this.port = port;
    }

    @Override
    public void run() {
        System.out.println("INFO: Launching server on port " + port);
        try {
            server = new ServerSocket(port);
            while (true) {
                // Aceptar la conexión
                Socket client = server.accept();
                System.out.println("SERVER: Client connected from " + client.getInetAddress());
                // Lanza los hilos para diferentes conexiones permitiendo que entren varios clients
                new Thread(() -> handleClient(client)).start();
            }
        } catch (IOException e) {
            System.err.println("ERROR: Unable to launch server: " + e.getMessage());
        }
    }

    private void handleClient(Socket client) {
        HashMap<Integer, Mazo> mazos = generarMazos(new HashMap<>());
        try (
            BufferedReader reader = new BufferedReader(new InputStreamReader(client.getInputStream()));
            PrintWriter pw = new PrintWriter(client.getOutputStream(), true) 
        ) {
            // Enviar pregunta al cliente
            pw.println("SERVER: Which deck format are you looking for? \n 1. Modern \n 2. Commander \n Write only the number: ");

            // Leer opción del cliente
            int option = Integer.parseInt(reader.readLine());
            System.out.println("SERVER: Client chose option " + option);

            // Mostrar mazo según la opción
            if (mazos.containsKey(option)) {
                mostrarMazo(mazos, option, pw);
            } else {
                pw.println("SERVER: Invalid option. Please restart and try again.");
            }

        } catch (IOException | NumberFormatException e) {
            System.err.println("SERVER: Error handling client: " + e.getMessage());
        } finally {
            try {
                client.close();
                System.out.println("SERVER: Client disconnected.");
            } catch (IOException e) {
                System.err.println("SERVER: Error closing client connection: " + e.getMessage());
            }
        }
    }

    private void mostrarMazo(HashMap<Integer, Mazo> mazos, int numeroMazo, PrintWriter pw) {
        Mazo mazo = mazos.get(numeroMazo);
        if (mazo != null) {
            pw.println(mazo.getNombre() + " : " + mazo.getPrecio() + "€");
            for (Carta carta : mazo.getMazo()) {
                pw.println(carta.getCantidad() + "x " + carta.getNombre());
            }
            pw.flush();
        } else {
            pw.println("SERVER: Deck not found.");
        }
    }

    private static HashMap<Integer, Mazo> generarMazos(HashMap<Integer, Mazo> mazos) {
        Mazo m = new Mazo();
        mazos.put(1, m.generarMazoLifeStealth());
        mazos.put(2, m.generarMazoCounters());
        return mazos;
    }
}