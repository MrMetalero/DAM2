public class App {
    public static void main(String[] args) throws Exception {

    for (int i = 0; i < 10; i++) {
        HilosArea hiloCrear = new HilosArea();
        Thread hiloN = new Thread(hiloCrear);
        hiloN.start();
        
    }





 

    }
}
