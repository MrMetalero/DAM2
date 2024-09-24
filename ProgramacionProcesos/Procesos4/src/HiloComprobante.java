import java.io.BufferedReader;
import java.io.IOException;
import java.io.InputStream;
import java.io.InputStreamReader;

public class HiloComprobante extends Thread{
    
    @Override 
    public  void run(){
        
        try {
            Boolean hiloEncendido = true;

            do {
                System.out.println("Hilo encendido");
            } while (hiloEncendido);
            
        } catch (Exception e) {
            e.printStackTrace();
        }
    
    }

    public void lecturaProceso(Process procesoRecibido) throws IOException{
        InputStream is = procesoRecibido.getInputStream();
        InputStreamReader isr = new InputStreamReader(is,"UTF-8");
        BufferedReader bf = new BufferedReader(isr);  
        String txtRead = bf.readLine(); 
        System.out.println("LEYENDO...");

        if ( txtRead != null) {
            System.out.println(txtRead);
        }
        
    }




}
