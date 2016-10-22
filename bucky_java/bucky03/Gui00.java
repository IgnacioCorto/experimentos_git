import java.awt.FlowLayout;
import java.awt.event.ActionListener;
import java.awt.event.ActionEvent;
import javax.swing.JFrame;
import javax.swing.JButton;
import javax.swing.Icon;
import javax.swing.ImageIcon;
import javax.swing.JOptionPane;

public class Gui00 extends JFrame {
	
	private JButton reg;
	private JButton custom;
	
	public Gui00(){
		super("The title");
		setLayout(new FlowLayout());
		
		reg = new JButton("reg Button");
		add(reg);
		
		//save files inside 'src' folder
		Icon chunli = new ImageIcon(getClass().getResource(
				"img/chunli.png"));
		Icon ryu = new ImageIcon(getClass().getResource(
				"img/ryu.png"));

		custom = new JButton("Custom Button", chunli);
		custom.setRolloverIcon(ryu);
		
		add(custom);
		
		HandlerClass handler = new HandlerClass();
		reg.addActionListener(handler);
		custom.addActionListener(handler);
	}
	
	private class HandlerClass implements ActionListener {
		public void actionPerformed(ActionEvent event){
			JOptionPane.showMessageDialog(null,
					String.format("%s", event.getActionCommand()));
		}
	}
	
}
