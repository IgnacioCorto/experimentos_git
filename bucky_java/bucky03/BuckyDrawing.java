import java.awt.*;
import javax.swing.*;

public class BuckyDrawing {
	
	public static void main(String[] args) {
		runPanel(new Peach03MoreShapes(), 240, 260);
		//new Peach02JColorChooser();
		//runPanel(new Peach01super_paintComponent());
	}		

	public static void runFrame(JFrame f) {
		f.setDefaultCloseOperation(JFrame.EXIT_ON_CLOSE);
		f.setSize(400,250);
		f.setVisible(true);		
	}
	
	public static void runPanel(JPanel p) {
		runPanel(p, 400,250);
	}

	public static void runPanel(JPanel p, int width, int height) {
		JFrame f = new JFrame("Bucky Drawing: Peach");
		f.setDefaultCloseOperation(JFrame.EXIT_ON_CLOSE);
		
		f.add(p); //instantiate the JPanel, then add it to JFrame
		
		f.setSize(width, height);
		f.setVisible(true);		
	}	
	
	
}
