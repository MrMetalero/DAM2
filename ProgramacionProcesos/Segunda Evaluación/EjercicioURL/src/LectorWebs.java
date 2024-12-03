import java.net.MalformedURLException;
import java.io.BufferedReader;
import java.io.File;
import java.io.FileWriter;
import java.io.IOException;
import java.io.InputStream;
import java.io.InputStreamReader;
import java.net.URL;

public class LectorWebs {
    private URL urlWeb;
    private InputStream webInputStream;
    private InputStreamReader webInputStreamReader;
    private BufferedReader bufferLecturaWeb;
    private String pathDestino = "src/output/index.php";
    
    public LectorWebs(){
          

    }


    public URL getUrlWeb() {
        return urlWeb;
    }


    public void setUrlWeb(URL urlWeb) {
        this.urlWeb = urlWeb;
    }


    public String getPathDestino() {
        return pathDestino;
    }


    public void setPathDestino(String pathDestino) {
        this.pathDestino = pathDestino;
    }


    public void leerWeb(String inputUrl){

        try {
            File archivoPhp = new File(pathDestino);
            urlWeb = new URL(inputUrl);
            webInputStream = urlWeb.openStream();
            webInputStreamReader = new InputStreamReader(webInputStream);
            
            bufferLecturaWeb = new BufferedReader(webInputStreamReader);
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
        } catch(NullPointerException nullpex){
            System.out.println("No se ha establecido una URL ");
        }
     

        
    }

}
