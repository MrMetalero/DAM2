import java.io.BufferedReader;
import java.io.IOException;
import java.io.InputStream;
import java.io.InputStreamReader;
import java.io.OutputStream;
import java.io.Reader;

public class App {
    

    public static void main(String[] args) throws Exception {
        Boolean encendido = true;
      
        try {
            ProcessBuilder pb = new ProcessBuilder("/bin/bash");
            Process proceso1 = pb.start();
            HiloComprobante hiloNuevo = new HiloComprobante();

            hiloNuevo.start();

            do {
                hiloNuevo.lecturaProceso(proceso1);
            } while (encendido);
            
          
    
    


            
        } catch (Exception e) {
            e.printStackTrace();
        }
       
        






    }
}
