package main;
public class Main {
    static String host = "localhost";
    static int port = 1234;

    public static void main(String[] args) throws Exception {
        Server server = new Server(port);
        Thread serverThread = new Thread(server);
        serverThread.start();

    }
    
}

