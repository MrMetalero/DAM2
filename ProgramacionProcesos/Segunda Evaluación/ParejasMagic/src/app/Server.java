package app;
import java.io.BufferedReader;
import java.io.IOException;
import java.io.InputStream;
import java.io.InputStreamReader;
import java.io.OutputStream;
import java.io.PrintWriter;
import java.net.ServerSocket;
import java.net.Socket;

public class Server implements Runnable  {
    private ServerSocket server = null;
    private Socket client= null;
    int port = 0;


    public Server(int port){
        this.port = port;
    }

    @Override
    public void run()  {
        InputStream is = null;
        InputStreamReader isr = null;
        BufferedReader reader = null;
        PrintWriter pw = null;
        OutputStream os = null;

        System.out.println("INF: Server Launching...");

        try {
            server = new ServerSocket(port);
        } catch (IOException e) {
            System.out.println("ERROR: Unable to open socket on TCP " + port);
            return;
        }

      

     

    }




    public String getAnswer(String message){
        return new StringBuilder(message).reverse().toString();
    }




}
