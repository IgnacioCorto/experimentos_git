public class potpie5 extends food {
	public  void eat(){
		System.out.println("This potpie is great.");
	}
	
	public int eat(int n) {  //override 1
		return 1;
	}

	public double eat(int n, int p) {  //override 2
		return 1.1;
	}	
}
