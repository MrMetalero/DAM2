package Main;
import java.net.ServerSocket;
import java.net.Socket;

public class Server implements Runnable {
    int port;
    ServerSocket calcetin = null;

    public Server(int port) {
        this.port = port;
        
    }
    @Override
    public void run() {
        
        System.out.println("Server Launching...");

        try {
                calcetin = new ServerSocket(port);
        } catch (Exception e) {
            System.out.println("No se ha podido iniciar el servidor");
            e.printStackTrace();
            return;
        }

        while (true) {
            try {

                
                Socket socket = calcetin.accept();

                System.out.println("Cliente conectado");

                ClientHandler ClienteNuevo = new ClientHandler(socket);
                Thread hiloCliente = new Thread(ClienteNuevo);
                hiloCliente.start();

            } catch (Exception e) {
                System.out.println("Se ha producido un error al aceptar la conexión");
                e.printStackTrace();
                return;
            }
        }
    }
    
}
