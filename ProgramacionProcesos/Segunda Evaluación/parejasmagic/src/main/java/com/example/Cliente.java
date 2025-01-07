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

            String username = "ajani";
            String password = "contadores";
            String cardRequest = "Ancestor's Chosen, Lightning Bolt, Black Lotus, Serra Angel, Giant Growth, Hill Giant";

            // Recibir el mensaje de WELCOME
            System.out.println("CLIENT: " + in.readLine());

            
            System.out.println("CLIENT: Sending username...");
            out.println(username);

            
            System.out.println("CLIENT: " + in.readLine());

            
            System.out.println("CLIENT: Sending password...");
            out.println(password);

            
            String loginResponse = in.readLine();
            System.out.println("CLIENT: " + loginResponse);

            if (loginResponse.contains("ACCESO PERMITIDO")) {
                System.out.println("CLIENT: " + in.readLine());

                System.out.println("CLIENT: Sending card request...");
                out.println(cardRequest);

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