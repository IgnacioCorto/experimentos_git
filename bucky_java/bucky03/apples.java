import javax.swing.JFrame;
import java.io.File;
import java.util.*;

public class apples {

	//aligning FlowLayout to left,center,right
	public static void main(String[] args) {
		GUI08FlowLayout gui08 = new GUI08FlowLayout();
		gui08.setDefaultCloseOperation(JFrame.EXIT_ON_CLOSE);
		gui08.setSize(313,123);
		gui08.setVisible(true);
	}		
	
	
	//reading information from file
	public static void main_cmd04(String[] args) {
		readfile r = new readfile();
		r.openFile();
		r.readFile();
		r.closeFile();
		
		//main_cmd02(new String[0]);
	}		
	
	
	//adding information to a file
	public static void main_cmd03(String[] args) {
		createfile g = new createfile();
		g.openFile();
		g.addRecord();
		g.closeFile();
		
		//main_cmd02(new String[0]);
	}	
	
	//creating an empty file
	public static void main_cmd02(String[] args) {
		final Formatter x;
		try {
			x = new Formatter("src\\img\\fred.txt");
			System.out.println("You created a file");
		} catch(Exception e){
			System.out.println("You got an error");
		}
	}		
	
	//check if a file exists + user.dir
	public static void main_cmd01(String[] args) {
		File x = new File("src\\img\\ryu.png");
		if(x.exists()){
			System.out.println(x.getName() + " exists!");
		} else {
			System.out.println("This thing doesn't exist. "
					+ System.getProperty("user.dir") );
		}
	}	
	
	//Mouse Adapter
	public static void main_07(String[] args) {
		GUI07MouseAdapter gui07 = new GUI07MouseAdapter();
		gui07.setDefaultCloseOperation(JFrame.EXIT_ON_CLOSE);
		gui07.setSize(313,123);
		gui07.setVisible(true);
	}	
	
	//Mouse Events
	public static void main_06(String[] args) {
		GUI06Mouse gui06 = new GUI06Mouse();
		gui06.setDefaultCloseOperation(JFrame.EXIT_ON_CLOSE);
		gui06.setSize(313,123);
		gui06.setVisible(true);
	}
	
	//JList (multiple selection) move data to another list
	//DEPRECATED: JList.getSelectedValues()
	//       USE: JList.getSelectedValuesList().toArray()
	public static void main_05(String[] args) {
		GUI05JListMultiple gui05 = new GUI05JListMultiple();
		gui05.setDefaultCloseOperation(JFrame.EXIT_ON_CLOSE);
		gui05.setSize(313,123);
		gui05.setVisible(true);
	}
	
	//JList + Color (single selection)
	public static void main_04(String[] args) {
		GUI04JList gui04 = new GUI04JList();
		gui04.setDefaultCloseOperation(JFrame.EXIT_ON_CLOSE);
		gui04.setSize(313,123);
		gui04.setVisible(true);
	}
	
	//JComboBox + JLabel + IconImage
	public static void main_03(String[] args) {
		GUI03ComboBox gui03 = new GUI03ComboBox();
		gui03.setDefaultCloseOperation(JFrame.EXIT_ON_CLOSE);
		gui03.setSize(313,123);
		gui03.setVisible(true);
	}
	
	//JRadioButton + ButtonGroup
	public static void main_02(String[] args) {
		GUI02Radios gui02 = new GUI02Radios();
		gui02.setDefaultCloseOperation(JFrame.EXIT_ON_CLOSE);
		gui02.setSize(313,123);
		gui02.setVisible(true);
	}
	
	//JCheckBox + Font
	public static void main_01(String[] args) {
		Gui01 gui01 = new Gui01();
		gui01.setDefaultCloseOperation(JFrame.EXIT_ON_CLOSE);
		gui01.setSize(265,125);
		gui01.setVisible(true);
	}
	
	//JButton with Icon and String.format(event getSource())
	public static void main_00(String[] args) {
		Gui00 gui00 = new Gui00();
		gui00.setDefaultCloseOperation(JFrame.EXIT_ON_CLOSE);
		gui00.setSize(300,200);
		gui00.setVisible(true);
	}
}
