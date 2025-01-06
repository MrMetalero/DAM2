package app;

import org.json.JSONObject;
import org.json.JSONArray;
import java.io.BufferedReader;
import java.io.File;
import java.io.IOException;
import java.io.InputStream;
import java.io.InputStreamReader;
import java.io.OutputStream;
import java.io.PrintWriter;
import java.net.Socket;
import java.nio.file.Files;
import java.util.HashMap;
import java.util.Map;

public class ClienteHandler implements Runnable{

  InputStream is = null;
  InputStreamReader isr = null;
  BufferedReader reader = null;
  PrintWriter pw = null;
  OutputStream os = null;
  private final Socket clientSocket;

  public ClienteHandler(Socket clientSocket) {
    this.clientSocket = clientSocket;
    try {
      is = clientSocket.getInputStream();
      isr = new InputStreamReader(is);
      reader = new BufferedReader(isr);



    } catch (IOException e) {
      System.out.println("SERVER: No se ha podido establecer el InputStream del socket Cliente en hilo: " + Thread.currentThread().getName());
      e.printStackTrace();
    }
    try {
      pw = new PrintWriter(clientSocket.getOutputStream());
    } catch (Exception e) {
      System.out.println("SERVER: ERROR CREANDO EL PRINTWRITER ");
    }

    try {
      os = clientSocket.getOutputStream();
    } catch (Exception e) {
      System.out.println("SERVER: ERROR CREANDO EL OUTPUTSTREAM ");
    }

  }

  @Override
  public void run(){

    try {
      System.out.println("SERVER: Bienvenido al server, introduce tu nombre de usuario...");
      String username = reader.readLine();
      System.out.println("SERVER: Bienvenido al server, introduce tu contraseña...");
      String password = reader.readLine();

      if (Main.users.containsKey(username) && Main.users.get(username).equals(password)) {
        System.out.println("SERVER: Login completado. ACCESO PERMITIDO");

      }else{
        System.out.println("SERVER: Login fallido. ACCESO DENEGADO");
        return; //Para que deje de ejecutarse el hilo si no se hace login
      }


      // Request cards
      pw.println("SERVER: Por favor, introduzca los nombres de las cartas separadas por comas:");
      String cartasSolicitadas = reader.readLine();
      String[] nombresCartas = cartasSolicitadas.split(",");

      // Search for cards
      Map<String, JSONObject> foundCards = searchCards(nombresCartas, "path/a/archivos");

      // Send results to the client
      if (foundCards.isEmpty()) {
        pw.println("SERVER: No se encontraron cartas con esos nombres.");
      } else {
        pw.println("SERVER: Cartas encontradas:");
        for (JSONObject carta : foundCards.values()) {
          pw.println(carta.toString(2)); // Pretty-print JSON object
        }
      }



    } catch (Exception e) {
      System.out.println("SERVER: Error con el cliente " + e.getMessage());
    } finally {
      try {
        clientSocket.close();
      } catch (IOException e) {
        System.err.println("Error al cerrar la conexión con el cliente: " + e.getMessage());
      }
    }


  }

  private Map<String, JSONObject> searchCards(String[] cardNames, String folderPath) throws IOException {
        Map<String, JSONObject> foundCards = new HashMap<>();
        File folder = new File(folderPath);

        // List all JSON files in the folder
        File[] files = folder.listFiles((dir, name) -> name.toLowerCase().endsWith(".json"));

        if (files == null) {
            throw new IOException("No se encontraron archivos en la carpeta: " + folderPath);
        }

        // Itera sobre todos los archivos json que tengo
        for (File file : files) {
            String jsonData = new String(Files.readAllBytes(file.toPath()));
            JSONArray cards = new JSONArray(jsonData);

            // Comprueba cada una de las cartas del archivo (Además de ir guardándose el nombre de las cartas para mostrarlo y ordenarlas luego al devolverlas)
            for (int i = 0; i < cards.length(); i++) {
                JSONObject card = cards.getJSONObject(i);
                String cardName = card.getString("name");

                // Comprueba si el nombre de a carta está en la lista de cartas buscadas y si lo está, la añade a foundCards y cuando acaba devuelve
                for (String requestedName : cardNames) {
                    if (cardName.equalsIgnoreCase(requestedName.trim())) {
                        foundCards.put(cardName, card);
                    }
                }
            }
        }

        return foundCards;
    }


}
