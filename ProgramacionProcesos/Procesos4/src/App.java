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
            ProcessBuilder pb = new ProcessBuilder("bash","-c","ls","-l");
            Process proceso1 = pb.start();
            InputStream is = proceso1.getInputStream();
            InputStreamReader isr = new InputStreamReader(is,"UTF-8");
            BufferedReader bf = new BufferedReader(isr);  

            // hiloNuevo.start();

            do {
                String txtRead = bf.readLine(); 
    
                if ( txtRead != null) {
                    System.out.println(txtRead);
                }
        
            } while (encendido);
            
          
            
           


            
        } catch (Exception e) {
            e.printStackTrace();
        }
       
        






    }
}
