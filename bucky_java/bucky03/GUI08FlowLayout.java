import java.awt.*;
import java.awt.event.*;
import javax.swing.*;

public class GUI08FlowLayout extends JFrame {
	private JButton lb;
	private JButton cb;
	private JButton rb;
	private FlowLayout layout;
	private Container container;
	
	public GUI08FlowLayout(){
		super("testing flow layout");
		layout = new FlowLayout();
		container = getContentPane();
		setLayout(layout);
		
		//left stuff in here
		lb = new JButton("left");
		add(lb);
		lb.addActionListener(new ActionListener(){
			public void actionPerformed(ActionEvent event){
				layout.setAlignment(FlowLayout.LEFT);
				layout.layoutContainer(container); //apply layout changes
			}
		});

		//center stuff in here
		cb = new JButton("center");
		add(cb);
		cb.addActionListener(new ActionListener(){
			public void actionPerformed(ActionEvent event){
				layout.setAlignment(FlowLayout.CENTER);
				layout.layoutContainer(container); //apply layout changes
			}
		});
		
		//right stuff in here
		rb = new JButton("right");
		add(rb);
		rb.addActionListener(new ActionListener(){
			public void actionPerformed(ActionEvent event){
				layout.setAlignment(FlowLayout.RIGHT);
				layout.layoutContainer(container); //apply layout changes
			}
		});		

	}
	
}
