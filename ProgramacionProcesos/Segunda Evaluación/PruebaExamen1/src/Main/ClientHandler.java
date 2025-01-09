package Main;
import java.io.BufferedOutputStream;
import java.io.BufferedReader;
import java.io.InputStreamReader;
import java.io.PrintWriter;
import java.net.Socket;


public class ClientHandler implements Runnable
 {
    Socket clientSocket;

    public ClientHandler(Socket socket) {
        this.clientSocket = socket;
        
    }
    @Override
    public void run() {
        
        try(
            PrintWriter out = new PrintWriter(clientSocket.getOutputStream(), true);
            InputStreamReader in = new InputStreamReader(clientSocket.getInputStream());
            BufferedReader buf = new BufferedReader(in);
        ) {
            // Aquí se implementa la lógica del servidor

            Funciones.enviarMensaje(out, "Selecciona una opción: ");
            

        } catch (Exception e) {
            System.out.println("Se ha producido un error al aceptar la conexión");
            e.printStackTrace();
            return;
        }



    }
    
}
