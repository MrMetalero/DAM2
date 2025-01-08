package Main;
import java.io.BufferedReader;
import java.io.IOException;
import java.io.PrintWriter;

public class Funciones {
    

    public static void enviarMensaje(PrintWriter pw, String mensaje) {
        pw.println(mensaje+"\0");
    }

    public static String recibirMensaje(BufferedReader bf) {
        String linea;
        StringBuilder mensajeCompleto = new StringBuilder();
        String mensajeLimpio = "";

        try {
            while ((linea = bf.readLine()) != null) {
                mensajeCompleto.append(linea);
                // Verificar si el mensaje contiene un delimitador especial indicando el final
                if (linea.endsWith("\0")) { 
                    break;
                }
            }

            mensajeLimpio = mensajeCompleto.toString().replace("\0", "");
           
            
           
        } catch (IOException e) {
            e.printStackTrace();
        }
        return mensajeLimpio;
    }

}
