public class HilosArea implements Runnable {



    @Override
    public void run() {
        Double alturaTriangulo = (Math.random()*20)+1;
        Double baseTriangulo = (Math.random()*20)+1;

        Double areaTriangulo = (alturaTriangulo * baseTriangulo)/2;

        System.out.println("Triangulo [ID: " + this.hashCode() + "] Base: "+ baseTriangulo +" Altura: " + alturaTriangulo + " ÁREA: " + areaTriangulo );
        
    }
    
}
