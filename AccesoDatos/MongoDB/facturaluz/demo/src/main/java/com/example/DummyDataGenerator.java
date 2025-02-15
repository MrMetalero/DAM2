package com.example;

import java.time.YearMonth;
import java.util.*;

import org.bson.Document;

public class DummyDataGenerator {
    public static List<Document> generateDummyData(int numberOfContracts, String date) {
        RandomNumberGenerator generatorIdName = new RandomNumberGenerator(1, 100000);
        RandomNumberGenerator generatorIdContract = new RandomNumberGenerator(1, 100000);

        List<Document> contractsList = new ArrayList<>();
        int daysInMonth = getDaysInMonth(date);

        for (int i = 0; i < numberOfContracts; i++) {
            Document contract = new Document();

            Document cliente = new Document();
            cliente.append("nombre", "Jose" + generatorIdName.getNextID());
            cliente.append("apellido", "ApellidoJose");
            contract.append("cliente", cliente);

            Document contrato = new Document();
            contrato.append("id", "CON" + (2300000 + generatorIdContract.getNextID())); 
            contrato.append("fecha_renovacion", date);
            contract.append("contrato", contrato);

            List<Document> dias = new ArrayList<>();

            // Generate a new set of hourly values for each day
            for (int day = 1; day <= daysInMonth; day++) {
                Document hoursList = new Document(); // Create a new object for each day

                for (int hour = 1; hour <= 24; hour++) {
                    Double valorHora = new Random().nextDouble(0, 0.20);
                    hoursList.append("hora" + hour, String.format("%.2f", valorHora));
                }

                dias.add(hoursList); // Add the unique hours list for the day
            }

            // Append all days under "consumos"
            Document consumos = new Document();
            consumos.append("dias", dias);
            contract.append("consumos", consumos);

            contractsList.add(contract);
        }

        return contractsList;
    }

    // Utility method to get the number of days in a month from a date string
    public static int getDaysInMonth(String date) {
        int returnValue = 0;

        if (date.contains("-")) {
            String[] parts = date.split("-");
            int year = Integer.parseInt(parts[0]);
            int month = Integer.parseInt(parts[1]);
            returnValue = YearMonth.of(year, month).lengthOfMonth();
        } else if (date.contains("_")) {
            String[] parts = date.split("_");
            int year = Integer.parseInt(parts[1]);
            int month = Integer.parseInt(parts[0]);
            returnValue = YearMonth.of(year, month).lengthOfMonth();
        }

        return returnValue;
    }
}
