// Source code is decompiled from a .class file using FernFlower decompiler.
import java.io.BufferedReader;
import java.io.IOException;
import java.io.InputStreamReader;
import java.io.PrintWriter;
import java.net.Socket;

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
         this.socket.close();
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
      } catch (IOException var2) {
         var2.printStackTrace();
      }

   }

   public boolean connect() {
      try {
         this.socket = new Socket(this.host, this.port);
         System.out.println("CLIENT: Connected");
         return true;
      } catch (IOException var2) {
         var2.printStackTrace();
         return false;
      }
   }

   public boolean send(String message) {
      try {
         PrintWriter pw = new PrintWriter(this.socket.getOutputStream());
         pw.println(message);
         pw.flush();
         System.out.println("CLIENT: Message sent: " + message);
         return true;
      } catch (IOException var3) {
         var3.printStackTrace();
         return false;
      }
   }

   public String receive() {
      try {
         this.isr = new InputStreamReader(this.socket.getInputStream());
         this.bfr = new BufferedReader(this.isr);
         String ans = this.bfr.readLine();
         System.out.println("CLIENT: Message received: " + ans);
         return ans;
      } catch (IOException var2) {
         var2.printStackTrace();
         return "ERROR";
      }
   }
}
