package app;

import org.json.JSONObject;
import org.json.JSONArray;
import java.io.BufferedReader;
import java.io.IOException;
import java.io.InputStream;
import java.io.InputStreamReader;
import java.io.OutputStream;
import java.io.PrintWriter;
import java.net.ServerSocket;
import java.net.Socket;
import java.util.Map;

public class Server implements Runnable  {
    private ServerSocket server = null;
    private Socket client= null;
    int port = 0;




    public Server(int port){
        this.port = port;
    }

    @Override
    public void run()  {


        System.out.println("SERVER: Server Launching...");

        try {
            server = new ServerSocket(port);
            System.out.println("SERVER: Servidor iniciado, esperando conexiones...");

            while (true) {
                client = server.accept();
                System.out.println("SERVER: Cliente conectado desde: " + client.getInetAddress());

                //Para manejar varios clients

                ClienteHandler clienteHandler = new ClienteHandler(client);
                Thread clienteThread = new Thread(clienteHandler);
                clienteThread.start();
            }



        } catch (IOException e) {
            System.out.println("ERROR: Unable to open socket on TCP " + port);
            e.printStackTrace();
            return;
        }





    }




    public String getAnswer(String message){
        return new StringBuilder(message).reverse().toString();
    }



    public int getPort() {
        return server != null ? server.getLocalPort() : -1;
    }


}
