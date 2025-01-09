package Main;
public class App {
    public static void main(String[] args) throws Exception {

        Server server = new Server(1337);
        Thread hiloServer = new Thread(server);

        hiloServer.start();

    }
}
