public class App {
    public static final int NUM_SILLAS = 5; 
    public static final int NUM_BARBEROS = 2; 
    public static final int NUM_CLIENTES = 5; 

    public static void main(String[] args) {
        LanzadorHilos lanzador = new LanzadorHilos();
        lanzador.iniciarPrograma();
    }
}
