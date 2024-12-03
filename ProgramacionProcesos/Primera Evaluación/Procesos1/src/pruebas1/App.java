package pruebas1;
import java.io.IOException;
import java.util.Scanner;


public class App {
    public static Scanner sc = new Scanner(System.in);
    static Boolean encendidoPrograma = true;
    public static void main(String[] args) throws Exception {
        String respuesta ;
      try {
        Process proceso1 = new ProcessBuilder("kcalc").start();

        
        
        while(encendidoPrograma == true){
            System.out.println("Deseas salir del programa?");
            respuesta = sc.nextLine();
            if(respuesta.matches("N") || respuesta.matches("n")){
                Thread.sleep(10000);
            }else{
                if(respuesta.matches("S") || respuesta.matches("s")){
                    encendidoPrograma = false;

                }else{
                    System.out.println("Missinput cagaste");
                    Thread.sleep(2000);
                }
            }

        }
        System.out.println("Destruyendo proceso...");
        sc.close();
        System.out.println(proceso1.pid());
        System.out.println("info: \n "+ proceso1.info());
        proceso1.destroy();
        
        

      } catch (IOException e) {
        // TODO: handle exception
        e.printStackTrace();
      }
        



        
    }
}
