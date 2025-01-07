package com.example;

import java.util.Map;

public class Main {
    // Dirección y puerto
    private static final String HOST = "127.0.0.1";
    private static final int PORT = 1337; // 0 para que el sistema operativo asigne un puerto libre

    // Cuentas para el login
    static final Map<String, String> users = Map.of(
        "ajani", "contadores",
        "ivan", "valencia",
        "dani", "tarkov",
        "liliana", "muertos",
        "kaito", "mapache"
    );

    public static void main(String[] args) {
        try {
            // Crear servidor con puerto asignado automáticamente
            Server servidorCreado = new Server(PORT);
            Thread hiloServer = new Thread(servidorCreado);

            // Iniciar el servidor
            hiloServer.start();
            System.out.println("SERVER: Servidor lanzado. Esperando asignación de puerto...");

            // Esperar a que el servidor se inicialice y obtener el puerto asignado
            while (servidorCreado.getPort() == -1) {
                Thread.sleep(100); // Polling corto para esperar la inicialización
            }

            int actualPort = servidorCreado.getPort();
            System.out.println("SERVER: Servidor iniciado en el puerto: " + actualPort);

            // Crear y lanzar un cliente de prueba
            Cliente clientePrueba = new Cliente(HOST, actualPort);
            Thread hiloCliente = new Thread(clientePrueba);
            hiloCliente.start();

        } catch (InterruptedException e) {
            System.err.println("MAIN: Error al inicializar el servidor o cliente: " + e.getMessage());
        }
    }
}
