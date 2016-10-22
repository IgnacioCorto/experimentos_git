import java.awt.*;
import java.awt.event.*;
import javax.swing.*;
import javax.swing.event.*;

public class GUI04JList extends JFrame {
	private JList list;
	private static String[] colornames = {"black","blue", "red", "white"};
	private static Color[] colors = {Color.BLACK, Color.BLUE, Color.RED, Color.WHITE};
	
	public GUI04JList(){
		super("add the title");
		setLayout(new FlowLayout());
		
		list = new JList(colornames);
		list.setVisibleRowCount(4);
		list.setSelectionMode(ListSelectionModel.SINGLE_SELECTION);
		add(new JScrollPane(list));
		
		list.addListSelectionListener(
				new ListSelectionListener(){
					//in people's language, select that color 
					//and change the background color
					//3 layers: background, contentPane, glass
					public void valueChanged(ListSelectionEvent event){
						getContentPane().setBackground(
								colors[list.getSelectedIndex()]);
					}
				}
		);
	}
}
