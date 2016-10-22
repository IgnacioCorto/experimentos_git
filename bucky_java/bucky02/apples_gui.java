import javax.swing.JOptionPane;
import javax.swing.JFrame;

public class apples_gui {
	
	//3 texts 1 pass
	public static void main(String[] args) {
		tuna_gui1 bucky = new tuna_gui1(); 
		bucky.setDefaultCloseOperation(JFrame.EXIT_ON_CLOSE);
		bucky.setSize(350,100);
		bucky.setVisible(true);
	}
	
	//'JOptionPane' doesn't need 'extends JFrame'
	public static void main_01(String[] args) {
		String fn = JOptionPane.showInputDialog("Enter first number");
		String sn = JOptionPane.showInputDialog("Enter second number");
		int num1 = Integer.parseInt(fn);
		int num2 = Integer.parseInt(sn);
		int sum = num1 + num2;
		JOptionPane.showMessageDialog(null, "The answer is " + sum, "The Title", JOptionPane.PLAIN_MESSAGE);
	}

}
