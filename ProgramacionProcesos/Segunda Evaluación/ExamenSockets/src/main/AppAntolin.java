package main;
import java.io.BufferedReader;
import java.io.IOException;
import java.io.InputStreamReader;
import java.io.PrintWriter;
import java.net.Socket;
import java.util.Scanner;

public class AppAntolin {
	public static void main(String[] args) {
		Client c = new Client("localhost", 1234);
	    Boolean cont = true;
	    int option = 0;
	    Scanner sc = new Scanner(System.in);
	    if(c.connect()) {
	    	if(c.receive().equals("Bienvenido")) {
	    		while (cont) {
	    			option = showMenu(sc);
	    			switch(option) {
		    			case 1:
		    				c.send("/time");
		    				break;
		    			case 2:
		    				c.send("/wait");
		    				break;
		    			case 0:
		    				c.send("/quit");
		    				cont = false;
		    				break;
		    			default:
		    				c.send(String.valueOf(option));
		    				break;
	    			}
	    			if(c.receive().equals("Bye"))
	    				c.disconnect();
	    		}
	    	}
	    }
	}

	private static int showMenu(Scanner sc) {
		int option = -1;
		while(option == -1) {
			System.out.println("ELIGE UNA OPCIÓN:");
			System.out.println("1. Get current date (/time)");
			System.out.println("2. Server wait (/wait)");
			System.out.println("0. Quit");
			String ans = sc.nextLine();
			try {
				option = Integer.parseInt(ans);
			} catch (NumberFormatException ex) {
				System.out.println("ERROR: Solo se permiten números");
			}
		}
		return option;
	}
}

class Client {
	String host = "";
	int port = 0;
	Socket socket = null;
	InputStreamReader isr = null;
	BufferedReader bfr = null;
	final String errorMSG = "ERROR";
	
    public Client(String host, int port) {
    	this.host = host;
    	this.port = port;
    }

    public void disconnect() {
        try {
            socket.close();
            System.out.println("CLIENT: Disconnected");
            System.out.println("_________________________________");
            System.out.println("|.--------_--_------------_--__--.|");
            System.out.println("||    /\\ |_)|_)|   /\\ | |(_ |_   ||");
            System.out.println(";;`,_/``\\|__|__|__/``\\|_| _)|__ ,:|");
            System.out.println("((_(-,-----------.-.----------.-.)`)");
            System.out.println("\\__ )        ,'     `.        \\ _/");
            System.out.println(":  :        |_________|       :  :");
            System.out.println("|-'|       ,'-.-.--.-.`.      |`-|");
            System.out.println("|_.|      (( (*  )(*  )))     |._|");
            System.out.println("|  |       `.-`-'--`-'.'      |  |");
            System.out.println("|-'|        | ,-.-.-. |       |._|");
            System.out.println("|  |        |(|-|-|-|)|       |  |");
            System.out.println(":,':        |_`-'-'-'_|       ;`.;");
            System.out.println(" \\  \\     ,'           `.    /._/");
            System.out.println("  \\/ `._ /_______________\\_,'  /");
            System.out.println("   \\  / :   ___________   : \\,'");
            System.out.println("    `.| |  |           |  |,'");
            System.out.println("      `.|  |           |  |");
            System.out.println("        |  | Good job! |  |");
        } catch (IOException e) {
            e.printStackTrace();
        }
    }
    
    public boolean connect() {
        try {
			socket = new Socket(host, port);
			System.out.println("CLIENT: Connected");
			return true;
		} catch (IOException e) {
			e.printStackTrace();
			return false;
		}
    }
    
    public boolean send(String message) {
    	try {	        
	        PrintWriter pw = new PrintWriter(socket.getOutputStream());
            pw.println(message);
            pw.flush();  
    		System.out.println("CLIENT: Message sent: " + message);          
            return true;	        
		} catch (IOException e) {
			e.printStackTrace();
			return false;
		}
    }
    
    public String receive() {
		try {
			isr = new InputStreamReader(socket.getInputStream());
	        bfr = new BufferedReader(isr);
	        String ans = bfr.readLine();
			System.out.println("CLIENT: Message received: " + ans);
	        return ans;
		} catch (IOException e) {
			e.printStackTrace();
			return errorMSG;
		}
    }
}