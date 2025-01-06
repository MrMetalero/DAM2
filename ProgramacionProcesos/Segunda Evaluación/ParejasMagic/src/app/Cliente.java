package app;

import java.io.*;
import java.net.Socket;

public class Cliente implements Runnable {

    private final String serverAddress;
    private final int serverPort;

    public Cliente(String serverAddress, int serverPort) {
        this.serverAddress = serverAddress;
        this.serverPort = serverPort;
    }

    @Override
    public void run() {
        try (Socket socket = new Socket(serverAddress, serverPort);
             PrintWriter out = new PrintWriter(socket.getOutputStream(), true);
             BufferedReader in = new BufferedReader(new InputStreamReader(socket.getInputStream()))) {

            // Step 1: Print server welcome message
            System.out.println("CLIENT: MENSAJE RECIBIDO: " + in.readLine());

            // Step 2: Send username
            System.out.println("Sending username...");
            out.println("ajani"); // Send username (changed from out.write to out.println)

            // Step 3: Send password
            System.out.println("Sending password...");
            out.println("contadores"); // Send password (changed from out.write to out.println)

            // Step 4: Receive login response
            String loginResponse = in.readLine();
            System.out.println("CLIENT: MENSAJE RECIBIDO: " + loginResponse);

            if (loginResponse.contains("ACCESO PERMITIDO")) {
                // Step 5: Server requests card names
                System.out.println("CLIENT: MENSAJE RECIBIDO: " + in.readLine());

                // Step 6: Send card names
                System.out.println("Sending card request...");
                out.println("Ancestor's Chosen, Lightning Bolt, Black Lotus");

                // Step 7: Receive server response with card data
                String serverResponse = in.readLine();
                System.out.println("CLIENT: MENSAJE RECIBIDO: " + serverResponse);

            } else {
                System.out.println("Login failed. Exiting client.");
            }

        } catch (IOException e) {
            System.err.println("Error communicating with server: " + e.getMessage());
        }
    }
}
