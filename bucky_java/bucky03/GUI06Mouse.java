import java.awt.*;
import java.awt.event.*;
import javax.swing.*;

public class GUI06Mouse extends JFrame {
	private JPanel mousepanel;
	private JLabel statusbar;
	
	public GUI06Mouse(){
		super("mouse events");
		
		mousepanel = new JPanel();
		mousepanel.setBackground(Color.WHITE);
		add(mousepanel, BorderLayout.CENTER);
		
		statusbar = new JLabel("default");
		add(statusbar, BorderLayout.SOUTH);
		
		HandlerClass handler = new HandlerClass();
		mousepanel.addMouseListener(handler);
		mousepanel.addMouseMotionListener(handler);
	}
	
	private class HandlerClass implements MouseListener, MouseMotionListener {

		//MouseListener events
		public void mouseClicked(MouseEvent event){
			statusbar.setText(String.format("Clicked at %d,%d",
					event.getX(), event.getY()));
		}
		public void mousePressed(MouseEvent event){
			statusbar.setText("You pressed down the mouse");
		}
		public void mouseReleased(MouseEvent event){
			statusbar.setText("You released the button");
		}
		public void mouseEntered(MouseEvent event){
			statusbar.setText("You entered the area");
			mousepanel.setBackground(Color.RED);
		}
		public void mouseExited(MouseEvent event){
			statusbar.setText("The mouse has left the window");
			mousepanel.setBackground(Color.WHITE);
		}
		
		//MouseMotionListener events
		public void mouseDragged(MouseEvent event){
			statusbar.setText("You are dragging the mouse");
		}
		public void mouseMoved(MouseEvent event){
			statusbar.setText("You moved the mouse");
		}
	}
}
