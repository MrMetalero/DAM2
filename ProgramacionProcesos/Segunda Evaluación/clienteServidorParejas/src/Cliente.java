import java.io.BufferedReader;
import java.io.BufferedWriter;
import java.io.IOException;
import java.io.InputStreamReader;
import java.io.PrintWriter;
import java.net.ConnectException;
import java.net.Socket;

public class Cliente {
    private String host = "";
    private int port = 0;

    private Socket socket = null;
    private InputStreamReader isr = null;
    private BufferedReader bfr = null;

    private final String errorMSG = "CLIENT ERROR";


    public Cliente(String host2, int port2) {
        host = host2;
        port = port2;
    }




    public boolean connect(){
            try {
                socket = new Socket(host,port);
                System.out.println("CLIENT: Connected");
                return true;
            } catch (ConnectException ce) {
                System.out.println("CLIENT: CONNECTION REJECTED");
                return false;
            } catch(IOException ioe){
                ioe.printStackTrace();
                return false;
            }
    }




    public String recieve(){
        try {
            isr = new InputStreamReader(socket.getInputStream());
            bfr = new BufferedReader(isr);
            String ans = bfr.readLine();
            System.out.println("CLIENT: Message recieved");
            bfr.close();
            isr.close();
            return ans;
        } catch (Exception e) {
            return errorMSG;
        }
    }


    public Boolean send(String message){
        try {
            PrintWriter pw = new PrintWriter(socket.getOutputStream());
            pw.println(message);
            pw.flush();
            System.out.println("CLIENT: Message sent");
            return true;
        } catch (Exception e) {
            return false;
        }

    }






}
