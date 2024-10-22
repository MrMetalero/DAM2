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
            Thread crearHiloFilo = new Thread(nuevoFilo);
            listaFiloPalillos.add(nuevoFilo);
            crearHiloFilo.start();
        }

    }

}
