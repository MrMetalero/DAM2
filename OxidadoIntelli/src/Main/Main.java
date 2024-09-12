package Main;

public class Main {
    public static void main(String[] args) {

       Boolean estaEncendido = true;

       MultiThread instanciaPrimera = new MultiThread();
       MultiThread instanciaSegunda = new MultiThread();
       instanciaPrimera.start();
       instanciaSegunda.start();
       while (estaEncendido){

           try {
               Thread.sleep(1000);
           } catch (InterruptedException e) {
               throw new RuntimeException(e);
           }
           System.out.println("Main");

        }


    }


}