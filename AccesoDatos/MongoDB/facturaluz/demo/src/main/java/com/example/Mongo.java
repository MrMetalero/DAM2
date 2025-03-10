package com.example;

import com.mongodb.client.MongoClient;
import com.mongodb.client.MongoClients;
import com.mongodb.client.MongoDatabase;
import com.mongodb.client.model.Filters;
import com.mongodb.client.model.InsertOneModel;
import com.mongodb.client.model.UpdateOptions;
import com.mongodb.client.model.Updates;
import com.mongodb.client.model.WriteModel;
import com.mongodb.client.MongoCollection;
import org.bson.Document;

import java.text.DecimalFormat;
import java.text.SimpleDateFormat;
import java.util.ArrayList;
import java.util.Date;
import java.util.HashMap;
import java.util.List;
import java.util.Map;
import java.util.Random;
import java.time.LocalDate;
import java.time.format.DateTimeFormatter;

public class Mongo {

    private MongoClient mongoClient;
    public MongoDatabase database;

    public void mongoConnection() {
        String connectionString = "mongodb://mati:mati@localhost:27017";

        if (mongoClient == null) {
            try {
                mongoClient = MongoClients.create(connectionString);
                System.out.println("Connected to MongoDB!");
                database = mongoClient.getDatabase("facturaluz");
            } catch (Exception e) {
                e.printStackTrace();
                System.out.println("Error connecting to MongoDB!");
            }
        } else {
            System.out.println("Already connected to MongoDB.");
        }
    }

    public void insertDummyData(int numberOfContracts, String date) {
        String collectionName = "contratos_" + date.substring(5, 7) + "_" + date.substring(0, 4); 

        boolean collectionExists = database.listCollectionNames().into(new ArrayList<>()).contains(collectionName);

        if (!collectionExists) {
            database.createCollection(collectionName);
            System.out.println("Created collection: " + collectionName);
        } else {
            System.out.println("Collection " + collectionName + " already exists.");
        }

        MongoCollection<Document> collection = database.getCollection(collectionName);

        List<Document> dummyContracts = DummyDataGenerator.generateDummyData(numberOfContracts, date);

        long startTime = System.nanoTime();

        collection.insertMany(dummyContracts);

        long endTime = System.nanoTime();
        long duration = (endTime - startTime) / 1000000;

        System.out.println(numberOfContracts + " dummy contracts inserted into '" + collectionName + "' collection.");
        System.out.println("Insertion took: " + duration + " ms");
    }

    public String getCurrentDate() {
        SimpleDateFormat sdf = new SimpleDateFormat("yyyy-MM-dd");
        return sdf.format(new Date());
    }

    public void closeConnection() {
        if (mongoClient != null) {
            mongoClient.close();
            System.out.println("MongoDB connection closed.");
        }
    }

    public <T> void updateOneDocumentByFieldName(String collectionName, String nameOfClient, String fieldName, T modifiedData) {
        MongoCollection<Document> collection = database.getCollection(collectionName);

        collection.updateOne(
                Filters.eq("cliente.nombre", nameOfClient),
                Updates.set(fieldName, modifiedData));
    }

    public void deleteHourOneByName(String collectionName,String nameOfClient) {
        MongoCollection<Document> collection = database.getCollection(collectionName);

        collection.updateMany(
                Filters.and(
                        Filters.eq("cliente.nombre", nameOfClient) 
                ),
                Updates.unset("consumos.dias.0.hora1") // Elimina la "hora 9" en el día 1
        );
    }

    public void deleteDocumentByName(String collectionName,String nameOfClient) {
        MongoCollection<Document> collection = database.getCollection(collectionName);

        collection.deleteMany(
                Filters.and(
                        Filters.eq("cliente.nombre", nameOfClient) 
                ));
    }

    public void printDocumentsByName(String collectionName, String nameOfClient) {
        MongoCollection<Document> collection = database.getCollection(collectionName);

        System.out.println("\nCOINCIDENCIAS:");
        for (Document document : collection.find(
                Filters.or(
                        Filters.eq("cliente.nombre", nameOfClient) 
                ))) {
            System.out.println(document.toString() + "\n");
        }

    }

    public void printDocumentsByNameRegex(String collectionName, String nameOfClientRegex) {
        MongoCollection<Document> collection = database.getCollection("contratos_04_2025");

        System.out.println("\nCOINCIDENCIAS:");
        for (Document document : collection.find(
                Filters.or(
                        Filters.regex("cliente.nombre", nameOfClientRegex)))) {
            System.out.println(document.toString() + "\n");
        }

    }

    
 
    public void calculateMonthlyBills(String collectionName) {
    long startTime = System.nanoTime();

    String datePart = collectionName.substring(collectionName.indexOf("_") + 1);
    String newCollectionName = "facturas_" + datePart;

    MongoCollection<Document> collection = database.getCollection(collectionName);
    MongoCollection<Document> billsCollection = database.getCollection(newCollectionName);

    // Hace falta usar esto para las inserciones en bulk
    List<WriteModel<Document>> bulkOperations = new ArrayList<>();

    for (Document clientDocument : collection.find()) {
        // Document cliente = clientDocument.get("cliente", Document.class) SIN DOCUMENT.CLASS NO PUEDE SABER QUE TIPO ES
        Document cliente = clientDocument.get("cliente", Document.class);
        String clientName = cliente != null ? cliente.getString("nombre") : "Unknown Client";

        Document contrato = clientDocument.get("contrato", Document.class);
        String contractId = contrato != null ? contrato.getString("id") : "Unknown Contract";

        Document consumos = clientDocument.get("consumos", Document.class);

        double monthlyTotal = 0.0;

        if (consumos != null) {
            List<Document> dias = consumos.getList("dias", Document.class);

            if (dias != null) {
                for (Document dailyConsumption : dias) {
                    for (int hour = 1; hour <= 24; hour++) {
                        String hourKey = "hora" + hour;
                        String hourValueStr = dailyConsumption.getString(hourKey);

                        if (hourValueStr != null && !hourValueStr.isEmpty()) {
                            double hourValue = Double.parseDouble(hourValueStr.replace(",", "."));
                            monthlyTotal += hourValue;
                        }
                    }
                }
            }
        }

        DecimalFormat df = new DecimalFormat("#.##");
        String formattedMonthlyTotal = df.format(monthlyTotal);

        Factura factura = new Factura(clientName, contractId, monthlyTotal);

        Document monthlyBill = new Document()
                .append("cliente", factura.getCliente())
                .append("contrato", factura.getContrato())
                .append("total_mensual", factura.getTotalMensual());

        bulkOperations.add(new InsertOneModel<>(monthlyBill));

    }

    // Se hacen las inserts en bulk
    if (!bulkOperations.isEmpty()) {
        billsCollection.bulkWrite(bulkOperations);
    }

    long endTime = System.nanoTime();
    long duration = (endTime - startTime) / 1000000; 

    System.out.println("saved in collection: " + newCollectionName);
    System.out.println("Time taken:: " + duration + " ms  :)");
}

    
    
    

    public void insertClient(String collectionName, String nombre, String apellido) {
        MongoCollection<Document> collection = database.getCollection(collectionName);

        Document contract = new Document();

        Document cliente = new Document();
        cliente.append("nombre", nombre);
        cliente.append("apellido", apellido);
        contract.append("cliente", cliente);

        Document contrato = new Document();
        contrato.append("id", "CON" + (2300000 + new Random().nextInt(3000)));
        contrato.append("fecha_renovacion", LocalDate.now());
        contract.append("contrato", contrato);

        // Crea las horas con sus valores de gasto
        Document hoursList = new Document();
        Random random = new Random();
        for (int hour = 1; hour <= 24; hour++) {
            hoursList.append("hora" + hour, random.nextDouble(0,2));
        }

        List<Document> dias = new ArrayList<>();
        List<Document> dayInfo = new ArrayList<>();

        for (int day = 1; day <= DummyDataGenerator.getDaysInMonth(collectionName.substring(11)); day++) {
            dayInfo.add(hoursList);

        }

        for (Document document : dayInfo) {
            dias.add(document);
        }

        // añade a consumos los dias
        Document consumos = new Document();
        consumos.append("dias", dias);
        contract.append("consumos", consumos);

        collection.insertOne(contract);

        System.out.println("client Inserted to collection '" + collectionName + "' with: nombre: " + nombre
                + "apellido: " + apellido);

    }

}
