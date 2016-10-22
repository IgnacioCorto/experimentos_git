
public class tuna2 {
	public String name;
	private potpie birthday;
	
	public tuna2(String  theName, potpie theDate){
		name = theName;
		birthday = theDate;
	}
	
	public String toString(){
		return String.format("My name is %s, my birthday is %s\n", name, birthday);
	}
}
