
public class tuna4 {
	private int sum;
	private final int NUMBER;
	
	public tuna4(int x){
		NUMBER = x;
	}
	
	public void add(){
		sum+=NUMBER;
	}
	
	public String toString(){
		return String.format("sum=%d\n", sum);
	}
}
