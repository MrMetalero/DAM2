package Main;

public class MultiThread extends Thread {

    @Override
    public void run(){
        for (int i = 0; i < 30; i++) {
            System.out.println(i);
            try {
                sleep(1000);
            } catch (InterruptedException e) {
                throw new RuntimeException(e);
            }


        }

    }




}
