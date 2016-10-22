import java.awt.*;
import java.awt.event.*;
import javax.swing.*;

public class GUI07MouseAdapter extends JFrame {
	private String details;
	private JLabel statusbar;
	
	public GUI07MouseAdapter(){
		super("mouse adapter tutle");
		statusbar = new JLabel("this is default");
		add(statusbar,BorderLayout.SOUTH);
		
		MouseClass mouseHandler = new MouseClass();
		addMouseListener(mouseHandler);
		addMouseMotionListener(mouseHandler);
	}
	
	private class MouseClass extends MouseAdapter {
		public void mouseClicked(MouseEvent event){
			details = String.format("You clicked %d ",
					event.getClickCount());
			
			if(event.isMetaDown()){
				details += "with right mouse button";
			} else if(event.isAltDown()){
				details += "with center mouse button";
			}
			
			statusbar.setText(details);
		}
		
		public void mouseMoved(MouseEvent event){
			statusbar.setText(String.format("You moved the mouse to %d,%d",
					event.getX(), event.getY()));
		}
	}
}
