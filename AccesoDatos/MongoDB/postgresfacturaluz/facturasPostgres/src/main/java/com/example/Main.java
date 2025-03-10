package com.example;

import java.sql.Connection;
import java.sql.DriverManager;
import java.sql.SQLException;
import java.util.Arrays;
import java.util.Random;

public class Main {
    public static void main(String[] args) {
        String url = "jdbc:postgresql://localhost:5432/facturaluz";
        String user = "mati";
        String password = "mati";

        try (Connection connection = DriverManager.getConnection(url, user, password)) {
            PostgresCrud postgresOps = new PostgresCrud(connection);

            // DUMMY DATA A SACO
            //DummyDataGenerator.generateDummyData(connection, 10000, "2025-03");

            //postgresOps.insertClient("Jose", "ApellidoJose");

            // Necesitaría asegurarme de tener el id de un cliente que esté insertado, claro
            //postgresOps.insertContrato(1, "2025-04-01");

            // Inserta un consumo de un cliente, igual que en el contrato,
            // necesito poner bien la clave o dará error
            //Double[] horas = new Double[24];
            //Arrays.fill(horas, new Random().nextDouble(0, 2));
            //postgresOps.insertConsumo(1, "2025-04-01", 1, horas);

            // Calculate monthly bills
            postgresOps.calculateMonthlyBills(3);

            // Delete a client
            //postgresOps.deleteClient(5004);

        } catch (SQLException e) {
            e.printStackTrace();
        }
    }
}