package main;

import java.io.BufferedReader;
import java.io.IOException;
import java.io.InputStreamReader;
import java.io.PrintWriter;
import java.net.Socket;
import java.time.LocalDateTime;
import java.time.format.DateTimeFormatter;
import java.util.Random;

public class Funciones {
    
    public static void sendMessage(PrintWriter pw, String text){
        pw.println(text);
        

    }

    public static String recieveMessage(Socket conexion){
        try {
        InputStreamReader isr = new InputStreamReader(conexion.getInputStream());
	    BufferedReader bfr = new BufferedReader(isr);
	        String answer = bfr.readLine();
			System.out.println("SERVER: Message received: " + answer);
	        return answer;
		} catch (IOException e) {
			e.printStackTrace();
            return "error recieving message";
		}

     

    }

    public static void sendCurrentDate(PrintWriter pw){
        DateTimeFormatter dtf = DateTimeFormatter.ofPattern("yyyy/MM/dd HH:mm:ss");
        pw.println(LocalDateTime.now().format(dtf));
    }

    public static String randomWait(){
        Random random = new Random();
        Integer numeroEspera = random.nextInt(1000, 3000);
        random.nextInt(1000, 3000);
       
        
        
        try {
            Thread.sleep(numeroEspera);
            
            
            return numeroEspera.toString();
        } catch (InterruptedException e) {
            e.printStackTrace();
            return"ERROR";
        }
    }

    public static void exitProgram(PrintWriter pw, Socket conection){
        sendMessage(pw, "/bye");
        try {
            conection.close();
        } catch (IOException e) {
            System.out.println("Error cerrando la conexion");
            e.printStackTrace();
        }
    }


}
