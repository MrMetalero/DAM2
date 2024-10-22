import java.util.Random;

public class Filosofo implements Runnable {
    public void run() {
        String miNombre = Thread.currentThread().getName();

        System.out.println("Spawneando Filosofo: " + miNombre);
        Random generador = new Random();
        while (true) {
            /* Comer */
            // Intentar coger palillos
            //Accedo a los palillos , cambio su valor ocupado
            synchronized(this){
                //System.out.println(App.listaFiloPalillos.toString().toUpperCase() + "\n\n");
            }
            
            try {
                Object objetoComprobar = App.listaFiloPalillos.get(App.listaFiloPalillos.indexOf(this));
               
                //SI ES EL ÚLTIMO ELEMENTO DEL ARRAY
                if (App.listaFiloPalillos.indexOf(this) == App.listaFiloPalillos.size()-1 && objetoComprobar.getClass().getSimpleName().contains("Filosofo") && App.listaFiloPalillos.indexOf(this) != 0 ) {
                    Palillo izqPalillo = (Palillo) App.listaFiloPalillos.get(App.listaFiloPalillos.indexOf(this)-1);
                    izqPalillo.ocuparPalillo(); //Ocupando 1
                    Palillo derPalillo = (Palillo) App.listaFiloPalillos.get(App.listaFiloPalillos.indexOf(0));
                    derPalillo.ocuparPalillo(); //Ocupando 2
        

                    //Los reemplazo por los objetos modificados 
                    App.listaFiloPalillos.set(App.listaFiloPalillos.indexOf(this)-1,izqPalillo);
                    App.listaFiloPalillos.set(App.listaFiloPalillos.indexOf(0),derPalillo);
                   
                    System.out.println(miNombre + " comiendo...");
                    esperarTiempoAzar(miNombre, (1 + generador.nextInt(5)) * 1000);
        

                }else if(objetoComprobar.getClass().getSimpleName().contains("Filosofo") && App.listaFiloPalillos.indexOf(this) != 0 ){
                    Palillo izqPalillo = (Palillo) App.listaFiloPalillos.get(App.listaFiloPalillos.indexOf(this)-1);
                    izqPalillo.ocuparPalillo();
                    Palillo derPalillo = (Palillo) App.listaFiloPalillos.get(App.listaFiloPalillos.indexOf(this)+1);
                    derPalillo.ocuparPalillo();
        

                    //Los reemplazo por los objetos modificados 
                    App.listaFiloPalillos.set(App.listaFiloPalillos.indexOf(this)-1,izqPalillo);
                    App.listaFiloPalillos.set(App.listaFiloPalillos.indexOf(this)+1,izqPalillo);
                    
                    System.out.println(miNombre + " comiendo...");
                    esperarTiempoAzar(miNombre, (1 + generador.nextInt(5)) * 1000);
        
                }
            } catch (Exception e) {
            e.printStackTrace();
                
            }


          

            //PARA SOLTAR LOS PALILLOS

            try {
                Object objetoComprobar = App.listaFiloPalillos.get(App.listaFiloPalillos.indexOf(this));
                
                //SI ES EL ÚLTIMO ELEMENTO DEL ARRAY
                if (App.listaFiloPalillos.indexOf(this) == App.listaFiloPalillos.size()-1 && objetoComprobar.getClass().getSimpleName().contains("Filosofo") && App.listaFiloPalillos.indexOf(this) != 0 ) {
                    Palillo izqPalillo = (Palillo) App.listaFiloPalillos.get(App.listaFiloPalillos.indexOf(this)-1);
                    izqPalillo.soltarPalillo(); //Ocupando 1
                    Palillo derPalillo = (Palillo) App.listaFiloPalillos.get(App.listaFiloPalillos.indexOf(0));
                    derPalillo.soltarPalillo(); //Ocupando 2
        

                    //Los reemplazo por los objetos modificados 
                    App.listaFiloPalillos.set(App.listaFiloPalillos.indexOf(this)-1,izqPalillo);
                    App.listaFiloPalillos.set(App.listaFiloPalillos.indexOf(0),derPalillo);
                   

                }else if(objetoComprobar.getClass().getSimpleName().contains("Filosofo") && App.listaFiloPalillos.indexOf(this) != 0 ){
                    Palillo izqPalillo = (Palillo) App.listaFiloPalillos.get(App.listaFiloPalillos.indexOf(this)-1);
                    izqPalillo.soltarPalillo();
                    Palillo derPalillo = (Palillo) App.listaFiloPalillos.get(App.listaFiloPalillos.indexOf(this)+1);
                    derPalillo.soltarPalillo();
        

                    //Los reemplazo por los objetos modificados 
                    App.listaFiloPalillos.set(App.listaFiloPalillos.indexOf(this)-1,izqPalillo);
                    App.listaFiloPalillos.set(App.listaFiloPalillos.indexOf(this)+1,izqPalillo);
                    
                }
            } catch (Exception e) {
                e.printStackTrace();
            }

            /* Pensando... */
            // Recordemos soltar los palillos
            System.out.println(miNombre + " pensando...");
            esperarTiempoAzar(miNombre, (1 + generador.nextInt(5)) * 1000);
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
}