package com.example;

import java.io.*;
import java.net.Socket;

public class Cliente implements Runnable {

    private final String serverAddress;
    private final int serverPort;

    // Constructor
    public Cliente(String serverAddress, int serverPort) {
        this.serverAddress = serverAddress;
        this.serverPort = serverPort;
    }

    @Override
    public void run() {
        try (Socket socket = new Socket(serverAddress, serverPort);
             PrintWriter out = new PrintWriter(socket.getOutputStream(), true);
             BufferedReader in = new BufferedReader(new InputStreamReader(socket.getInputStream()))) {

            // Simulated user inputs
            String username = "ajani";
            String password = "contadores";
            String cardRequest = "Ancestor's Chosen, Lightning Bolt, Black Lotus";

            // Step 1: Receive welcome message
            System.out.println("CLIENT: " + in.readLine());

            // Step 2: Send username
            System.out.println("CLIENT: Sending username...");
            out.println(username);

            // Step 3: Receive prompt for password
            System.out.println("CLIENT: " + in.readLine());

            // Step 4: Send password
            System.out.println("CLIENT: Sending password...");
            out.println(password);

            // Step 5: Receive login response
            String loginResponse = in.readLine();
            System.out.println("CLIENT: " + loginResponse);

            if (loginResponse.contains("ACCESO PERMITIDO")) {
                // Step 6: Server requests card names
                System.out.println("CLIENT: " + in.readLine());

                // Step 7: Send card names
                System.out.println("CLIENT: Sending card request...");
                out.println(cardRequest);

                // Step 8: Receive server response
                String serverResponse;
                while ((serverResponse = in.readLine()) != null) {
                    System.out.println("CLIENT: " + serverResponse);
                }
            } else {
                System.out.println("CLIENT: Login failed. Exiting...");
            }

        } catch (IOException e) {
            System.err.println("CLIENT: Error communicating with server: " + e.getMessage());
        }
    }

   
}