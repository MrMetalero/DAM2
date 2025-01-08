import java.io.BufferedReader;
import java.io.InputStreamReader;
import java.io.OutputStreamWriter;
import java.io.PrintWriter;
import java.net.Socket;

public class Cliente {
    private static final String SERVER_HOST = "127.0.0.1"; // Dirección del servidor
    private static final int SERVER_PORT = 1337; // Puerto del servidor

    public static void main(String[] args) {
        try (Socket socket = new Socket(SERVER_HOST, SERVER_PORT);
             PrintWriter out = new PrintWriter(new OutputStreamWriter(socket.getOutputStream()), true);
             BufferedReader in = new BufferedReader(new InputStreamReader(socket.getInputStream()));
             BufferedReader console = new BufferedReader(new InputStreamReader(System.in))) {

            // Leer mensaje inicial del servidor
            System.out.println("SERVER: " + in.readLine());

            // Enviar opción al servidor
            System.out.print("Ingrese la opción de formato de mazo (1 para Modern, 2 para Commander): ");
            String userOption = console.readLine();
            out.println(userOption); // Enviar al servidor

            // Leer y mostrar la respuesta del servidor
            String serverResponse;
            while ((serverResponse = in.readLine()) != null) {
                System.out.println("SERVER: " + serverResponse);
            }

        } catch (Exception e) {
            System.err.println("Error al conectar con el servidor: " + e.getMessage());
        }
    }
}
