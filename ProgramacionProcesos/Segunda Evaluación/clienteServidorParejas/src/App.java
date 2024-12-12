import Cliente;
import Server;

package app;
public class App {

    final private static String host = "localhost";
    final private static int port = 1337;
    public static void main(String[] args) throws Exception {

        //SERVER
        Server srv = new Server(port);
        Thread tServer = new Thread(srv);
        tServer.start();
        try {
            Thread.sleep(1000);
        } catch (Exception e) {
            e.printStackTrace();

        }


        //CLIENTE
        Cliente c = new Cliente(host, port);
        if (!c.connect()) {
            System.out.println("ERROR: CAN'T CONNECT");
        }
        c.send("Hola mundo");
        String ans = c.recieve();
        System.out.println(ans);


   

    }
}
