//Object that is called to play sudoku
//
//
import java.util.*;
import java.awt.*;
public class SudokuGUI {

   //Calls all methods.
                     //    keep           keep       change to board.getSize()
   public static void main(Graphics2D g, int pSize, int sqrSize, int currX, int currY) {
  
      int tempSize = Math.round(Math.round(Math.sqrt(sqrSize))); 
      int font = (((pSize / tempSize) / tempSize) / 3);
      int startX = (pSize / tempSize); 
      
      drawSquare(g, pSize, tempSize, startX);
      highlight(g, currX, currY, (startX / tempSize));
      g.setFont(new Font("Helvetica", Font.BOLD, font + 10));
      drawNum(g, pSize, sqrSize, tempSize, font);
      System.out.println(get());
      System.out.println(font);
      System.out.println(tempSize);
      System.out.println(startX);
      
   }
   
   //Draws the blocks, then calls the method that draws the squares.
   private static void drawSquare(Graphics2D g, int pSize, int numOfSqr, int startX) {
 
      for(int i = 0; i < numOfSqr; i++) {
         g.setColor(Color.BLACK);
         g.fillRect(startX * i - numOfSqr, 0, numOfSqr, pSize);
         g.fillRect(0, startX * i - numOfSqr, pSize, numOfSqr);
         drawSquare(g, startX, numOfSqr, startX * i, pSize);
         
      }
   }
   
   //Draws the squares inside the blocks.
   private static void drawSquare(Graphics2D g, int startX, int numSquare, int endLine, int pSize) {
   
      g.setColor(Color.BLACK);
      int width = (startX / numSquare);
      
      for(int i = 0; i < numSquare; i++) {
         g.drawLine(width * i + endLine, 0, width * i + endLine, pSize);
         g.drawLine(0, width * i + endLine, pSize, width * i + endLine);
      }
      
   }
   
   //Draws the numbers within each box. Goes from (0,0) to (pixels, 0) and then down.
   private static void drawNum(Graphics2D g, int pSize, int sqrSize, int numOfSqr, int font) {
      g.setColor(Color.BLACK);
      int line = ((pSize / numOfSqr) / numOfSqr);
      
      for(int i = 0; i <= sqrSize; i++) {
         for(int j = 0; j <= sqrSize; j++){
            String data = ("" + get());
            g.drawString(data, j * line + font, i * line + font * 2);
         }
      }
   }
   
   //Just a temp get.
   private static int get() {  
      Random r = new Random();
      return (r.nextInt(9));
   }
   
   //Highlights a square given the x and y coordinates.
   private static void highlight(Graphics2D g, int x, int y, int startX){
      g.setColor(Color.RED);
      g.fillRect(startX * x + 1, startX * y + 1, startX - 1, startX - 1);
   }

}