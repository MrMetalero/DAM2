package main;

import java.io.IOException;
import java.net.ServerSocket;
import java.net.Socket;

public class Server implements Runnable {
    int port;
    ServerSocket server;
    Socket clientSocket;

    public Server(int port){
       this.port = port;
    }

    @Override
    public void run() {

        try {
            server = new ServerSocket(port);
        } catch (IOException e) {
            System.out.println("SERVER: Error, no se ha podido crear el socket en el puerto "+ port);
            e.printStackTrace();
        }

        while (true) {
            try {
                System.out.println("Esperando conexiones...");
                clientSocket = server.accept();

                //Lanza cada nueva conexión al ClientHandler para que puedan haber varias conexiones
                ClientHandler newClient = new ClientHandler(clientSocket);
                Thread threadClientNew = new Thread(newClient);
                threadClientNew.start();






            } catch (IOException e) {
                System.out.println("SERVER: Error conectando al servidor a través del puerto " + port );
                e.printStackTrace();
            }
            
        }

    }
    
}
