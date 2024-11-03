public class LanzaHilos {
    final static int NUMERO_JUGADORES = 4;
        
        public static void crearJugadoresUnNumero(){
            for (int i = 0; i < NUMERO_JUGADORES; i++) {
            Jugador nuevoJugador = new Jugador("Singular");
            Thread nuevoHiloJugador = new Thread(nuevoJugador);
            nuevoHiloJugador.setName("Jugador" + i);
            nuevoHiloJugador.start();
        }
        
    }
    
}
