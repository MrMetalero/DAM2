package com.example;

import java.sql.Connection;
import java.sql.PreparedStatement;
import java.sql.ResultSet;
import java.sql.SQLException;
import java.util.Random;

public class PostgresCrud {
    private final Connection connection;

    public PostgresCrud(Connection connection) {
        this.connection = connection;
    }

    public void insertClient(String nombre, String apellido) {
        String sql = "INSERT INTO clientes (nombre, apellido) VALUES (?, ?)";

        try (PreparedStatement pstmt = connection.prepareStatement(sql)) {
            pstmt.setString(1, nombre);
            pstmt.setString(2, apellido);
            pstmt.executeUpdate();
        } catch (SQLException e) {
            e.printStackTrace();
        }
    }

    public void insertContrato(int clienteId, String fechaRenovacion) {
        String sql = "INSERT INTO contratos (cliente_id, fecha_renovacion) VALUES (?, ?)";

        try (PreparedStatement pstmt = connection.prepareStatement(sql)) {
            pstmt.setInt(1, clienteId);
            pstmt.setDate(2, java.sql.Date.valueOf(fechaRenovacion));
            pstmt.executeUpdate();
        } catch (SQLException e) {
            e.printStackTrace();
        }
    }

    public void insertConsumo(int clienteId, String date, int dia, Double[] horas) {
        String sql = "INSERT INTO consumos (cliente_id, month, dia, horas) VALUES (?, ?, ?, ?)";

        try (PreparedStatement pstmt = connection.prepareStatement(sql)) {
            pstmt.setInt(1, clienteId);
            pstmt.setInt(2, Integer.parseInt(date.substring(5, 7)));
            pstmt.setInt(3, dia);
            pstmt.setArray(4, connection.createArrayOf("float8", horas));
            pstmt.executeUpdate();
        } catch (SQLException e) {
            e.printStackTrace();
        }
    }

    public void calculateMonthlyBills(int month) {
        long startTime = System.currentTimeMillis();
    
        String sql = "SELECT cliente_id, SUM(unnested_horas) AS total_consumption " +
                     "FROM consumos, unnest(horas) AS unnested_horas " +
                     "WHERE month = ? " +
                     "GROUP BY cliente_id";
    
        String insertFacturaSQL = "INSERT INTO facturas (cliente_id, month, total_mensual) VALUES (?, ?, ?)";
    
        try (PreparedStatement pstmt = connection.prepareStatement(sql);
             PreparedStatement pstmtFactura = connection.prepareStatement(insertFacturaSQL)) {
    
            pstmt.setInt(1, month);
            ResultSet rs = pstmt.executeQuery();
    
            while (rs.next()) {
                int clienteId = rs.getInt("cliente_id");
                double totalConsumption = rs.getDouble("total_consumption");
    
                pstmtFactura.setInt(1, clienteId);
                pstmtFactura.setInt(2, month);
                pstmtFactura.setDouble(3, totalConsumption);
                pstmtFactura.executeUpdate();
    
                System.out.println("Inserted factura for client " + clienteId + " in month " + month + " with total: " + totalConsumption);
            }
        } catch (SQLException e) {
            e.printStackTrace();
        }
    
        long endTime = System.currentTimeMillis();
        long totalTime = endTime - startTime;
        System.out.println("Total time taken: " + totalTime + " ms");
    }
    

    public void deleteClient(int clienteId) {
        String sql = "DELETE FROM clientes WHERE id = ?";

        try (PreparedStatement pstmt = connection.prepareStatement(sql)) {
            pstmt.setInt(1, clienteId);
            pstmt.executeUpdate();
        } catch (SQLException e) {
            e.printStackTrace();
        }
    }
}