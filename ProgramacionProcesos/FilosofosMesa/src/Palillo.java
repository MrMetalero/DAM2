public class Palillo {
    boolean ocupado = false;

    public Palillo(){
        

    }

    public synchronized void ocuparPalillo(){
      ocupado = true;


    }

    public synchronized void soltarPalillo(){
        ocupado = false;
  
  
    }

   

}
