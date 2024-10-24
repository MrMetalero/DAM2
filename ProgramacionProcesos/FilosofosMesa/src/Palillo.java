public class Palillo {
  private static Integer contadorPalilloTotal = 0; 
  boolean ocupado = false;
  int numeroPalillo;

  public Palillo(){
      numeroPalillo = contadorPalilloTotal++;
      
      System.out.println(numeroPalillo);
  }

  public synchronized void ocuparPalillo(){
    ocupado = true;


  }

  public synchronized void soltarPalillo(){
    ocupado = false;


  }

   

}
