import java.util.Random;

public class Filosofo implements Runnable {
    int ultimaPosicion = App.listaFiloPalillos.size()-1; // No es el tamaño exactamente. Para abreviar size-1
    int indiceIzq;
    int indiceDer;
    Palillo palilloIzqTemp;
    Palillo palilloDerTemp;
    Random generador = new Random();
    String miNombre;

    @Override
    public void run() {
        miNombre = Thread.currentThread().getName();
        System.out.println("Spawneando Filosofo: " + miNombre);
        
        while (true) {
            /* Comer */
            // Intentar coger palillos
            //USA EL INDICE DEL FILÓSOFO PARA PASARLO A LA FUNCIÓN
            try {
                filoLogicaPalillo(App.listaFiloPalillos.indexOf(this));
            } catch (Exception e) {
               e.printStackTrace();
            }
            
            System.out.println("\n"+miNombre + " pensando...");
            esperarTiempoAzar(miNombre, (1 + generador.nextInt(5)) * 1000);
           

           
          

            //PARA SOLTAR LOS PALILLOS

            /* Pensando... */
            // Recordemos soltar los palillos
            
        }
    }

    private void esperarTiempoAzar(String miNombre, int milisegs) {
        try {
            Thread.sleep(milisegs);
        } catch (InterruptedException e) {
            System.out.println(miNombre + " interrumpido!!. Saliendo...");
            return;
        }
    }



    private synchronized void filoLogicaPalillo(int indiceFilosofo)throws Exception{
        
       
        if (indiceFilosofo > 0 && indiceFilosofo < ultimaPosicion) {
            indiceIzq = App.listaFiloPalillos.indexOf(this) - 1;
            indiceDer = App.listaFiloPalillos.indexOf(this) + 1;


            

            ocuparPalillos();

            System.out.println("\n"+miNombre + " Comiendo...");
            esperarTiempoAzar(miNombre, (1 + generador.nextInt(5)) * 1000);

            filoDesocupaPalillo();
          



        }else if (indiceFilosofo == ultimaPosicion) {
            indiceIzq = App.listaFiloPalillos.indexOf(this) -1;
            indiceDer = 0;

            ocuparPalillos();
            esperarTiempoAzar(miNombre, (1 + generador.nextInt(5)) * 1000);

            filoDesocupaPalillo();

        }else if (indiceFilosofo == 0) {
            throw new Exception("No se puede tener un filósofo en indice 0");
            
        }
        
    
        
    }

    private void ocuparPalillos(){

        if (palilloIzqTemp.ocupado == false && palilloDerTemp.ocupado == false) {
            palilloIzqTemp = (Palillo) App.listaFiloPalillos.get(indiceIzq);
            palilloDerTemp = (Palillo) App.listaFiloPalillos.get(indiceDer);
            palilloIzqTemp.ocuparPalillo();
            palilloDerTemp.ocuparPalillo();
            App.listaFiloPalillos.set(indiceIzq, palilloIzqTemp);
            App.listaFiloPalillos.set(indiceDer, palilloDerTemp);
        }

    }


    private void filoDesocupaPalillo(){

        palilloIzqTemp.soltarPalillo();
        palilloDerTemp.soltarPalillo();
        App.listaFiloPalillos.set(indiceIzq, palilloIzqTemp);
        App.listaFiloPalillos.set(indiceDer, palilloDerTemp);
        

            
    }



}