package com.example;

import java.sql.*;
import java.time.YearMonth;
import java.util.ArrayList;
import java.util.List;
import java.util.Random;

public class DummyDataGenerator {

    public static void generateDummyData(Connection connection, int numberOfContracts, String date) throws SQLException {
        long startTime = System.currentTimeMillis();
        Random random = new Random();
        int daysInMonth = getDaysInMonth(date);
        int batchSize = 1000;
        
        String insertClienteSQL = "INSERT INTO clientes (nombre, apellido) VALUES (?, ?)";
        String insertContratoSQL = "INSERT INTO contratos (cliente_id, fecha_renovacion) VALUES (?, ?)";
        String insertConsumosSQL = "INSERT INTO consumos (cliente_id, month, dia, horas) VALUES (?, ?, ?, ?)";

        List<Integer> clienteIds = new ArrayList<>();

        try (PreparedStatement pstmtCliente = connection.prepareStatement(insertClienteSQL, Statement.RETURN_GENERATED_KEYS);
             PreparedStatement pstmtContrato = connection.prepareStatement(insertContratoSQL);
             PreparedStatement pstmtConsumos = connection.prepareStatement(insertConsumosSQL)) {

            for (int i = 0; i < numberOfContracts; i++) {
                String nombre = "Jose" + random.nextInt(100000);
                String apellido = "ApellidoJose";

                pstmtCliente.setString(1, nombre);
                pstmtCliente.setString(2, apellido);
                pstmtCliente.addBatch();

                if ((i + 1) % batchSize == 0 || i == numberOfContracts - 1) {
                    pstmtCliente.executeBatch();

                    // Pilla claves generadas para poder ir introduciendo el resto de elementos
                    // con el id de el cliente concreto que le toca en cada iteración
                    try (ResultSet generatedKeys = pstmtCliente.getGeneratedKeys()) {
                        while (generatedKeys.next()) {
                            clienteIds.add(generatedKeys.getInt(1));
                        }
                    }
                }
            }

            for (int clienteId : clienteIds) {
                pstmtContrato.setInt(1, clienteId);
                pstmtContrato.setDate(2, java.sql.Date.valueOf(date + "-01"));
                pstmtContrato.addBatch();
            }
            pstmtContrato.executeBatch();

            for (int clienteId : clienteIds) {
                for (int day = 1; day <= daysInMonth; day++) {
                    Double[] horas = new Double[24];
                    for (int hour = 0; hour < 24; hour++) {
                        horas[hour] = random.nextDouble(0.0, 0.2);
                    }

                    pstmtConsumos.setInt(1, clienteId);
                    pstmtConsumos.setInt(2, Integer.parseInt(date.substring(5, 7)));
                    pstmtConsumos.setInt(3, day);
                    pstmtConsumos.setArray(4, connection.createArrayOf("float8", horas));
                    pstmtConsumos.addBatch();
                }
            }
            pstmtConsumos.executeBatch();
        }

        long endTime = System.currentTimeMillis();
        System.out.println("Total time taken for data generation: " + (endTime - startTime) + " ms");
    }

    public static int getDaysInMonth(String date) {
        String[] parts = date.split("-");
        int year = Integer.parseInt(parts[0]);
        int month = Integer.parseInt(parts[1]);
        return YearMonth.of(year, month).lengthOfMonth();
    }
}
