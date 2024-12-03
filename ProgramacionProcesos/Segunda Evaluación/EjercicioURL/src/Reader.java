import java.net.MalformedURLException;
import java.io.BufferedReader;
import java.io.File;
import java.io.FileWriter;
import java.io.IOException;
import java.io.InputStream;
import java.io.InputStreamReader;
import java.net.URL;

public class Reader {
    URL urlWeb;
    InputStream webInputStream;
    InputStreamReader inputWebStreamReader;
    BufferedReader bufferLecturaWeb;
    String pathDestino = "src/output/index.php";

    public Reader(){
          

    }


    public BufferedReader leerWeb(){

        try {
            urlWeb = new URL("https://www.geeksforgeeks.org/node-js-npm-node-package-manager/#installing-npm");
            webInputStream = urlWeb.openStream();
            inputWebStreamReader = new InputStreamReader(webInputStream);
            File archivoPhp = new File(pathDestino);
            bufferLecturaWeb = new BufferedReader(inputWebStreamReader);
            FileWriter writerArchivo = new FileWriter(archivoPhp);
            

            String linea;
            while ((linea = bufferLecturaWeb.readLine()) != null) {
                System.out.println(linea);
                writerArchivo.write(linea +"\n");
            }

            bufferLecturaWeb.close();
            writerArchivo.close();

        } catch (IOException e) {
           System.out.println("LA URL ES ERRÓNEA");
        }
     
            return null;

        
    }

}
