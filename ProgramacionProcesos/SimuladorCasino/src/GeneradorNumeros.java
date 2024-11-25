import java.util.Random;

public class GeneradorNumeros {

    public static int generadorPares() {
        Random random = new Random();
        int cantidad = 10; // Cantidad de números pares aleatorios a generar
        int limiteInferior = 1; // Límite inferior del rango
        int limiteSuperior = 32; // Límite superior del rango
        int numero = 0;

        for (int i = 0; i < cantidad; i++) {
            // Genera un número aleatorio par dentro del rango
             numero = random.nextInt((limiteSuperior - limiteInferior) / 2 + 1) * 2 + limiteInferior;
        }
        return numero;
    }

    public static int generadorSingular() {
        Random random = new Random();
        int limiteInferior = 1; // Límite inferior del rango
        int limiteSuperior = 32; // Límite superior del rango

        // Genera un único número aleatorio dentro del rango
        int numero = random.nextInt(limiteSuperior - limiteInferior + 1) + limiteInferior;

        return numero;
    }





}