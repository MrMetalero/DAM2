import java.lang.reflect.Array;
import java.util.ArrayList;

public class App {
    static ArrayList<Object> listaFiloPalillos = new ArrayList<>();

    public static void main(String[] args) throws Exception {

        intercalarFiloPalillos(5);

    }

    private static void intercalarFiloPalillos(int numeroX) {
        for (int index = 0; index < numeroX; index++) {
            Filosofo nuevoFilo = new Filosofo();
            System.out.println("Creando pares...");
            listaFiloPalillos.add(new Palillo());
            listaFiloPalillos.add(nuevoFilo);
            Thread crearHiloFilo = new Thread(nuevoFilo);
            crearHiloFilo.start();
           
           
        }


        System.out.println(listaFiloPalillos.toString()); 

    }

}
