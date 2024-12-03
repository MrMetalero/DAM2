import java.io.BufferedReader;
import java.io.IOException;
import java.io.InputStream;
import java.io.InputStreamReader;
import java.util.Scanner;

public class App {
    public static Scanner sc = new Scanner(System.in);
    public static void main(String[] args) throws Exception {
     String nombreDirectorioInput = "" ;
    
        /*   NO ME DA TIEMPO, PERO SERÍA IDEAD COMPROBAR A TRAVÉS DE
        REGEX QUE NO SE INTRODUCEN CARACTERES NO VÁLIDOS PARA LS
        DE POR SI SI SE INTRODUCE ALGO QUE NO LLEVA A UN DIRECTORIO
        VAMOS A TENER UNA NULL POINTER EXCEPTION DE FORMA QUE SE TIENE DELIMITADOS
        LOS DIRECTORIOS QUE QUEREMOS PONER.
    */ 
            
        System.out.println("Introduce un directorio");
        nombreDirectorioInput = sc.nextLine();

        try {

            if (nombreDirectorioInput != "") {
                ProcessBuilder pb = new ProcessBuilder("bash","-c","ls " + nombreDirectorioInput);
                Process procesoNombreDir = pb.start();

                InputStream is = procesoNombreDir.getInputStream();
                InputStreamReader isr = new InputStreamReader(is,"UTF-8");
                BufferedReader bf = new BufferedReader(isr);



            
                String txtRead;
                do {
                   txtRead = bf.readLine(); 

                 
        
                    //Por si la primera vez es null por lo que sea
                    if ( txtRead != null) {
                        System.out.println("\n el directorio contiene:");
                        System.out.println("\n" +txtRead + "\n");
                    }
            
                } while (txtRead != null);

            }
            







        } catch (Exception e) {
           e.printStackTrace();

        }



    }
}
