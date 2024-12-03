public class TareaCompleja implements Runnable {
    Counter contadorInterno;

    TareaCompleja(Counter count) {
        contadorInterno = count;

    }

    @Override
    public void run() {
        
        for (int i = 0; i < 100; i++) {
            int a = i * 3;
        }
        Thread hiloActual = Thread.currentThread();
        String miNombre = hiloActual.getName();
        contadorInterno.increase();
        System.out.println("Finalizado el hilo " + miNombre + " Contador: " + contadorInterno.getCount());
    }

}
