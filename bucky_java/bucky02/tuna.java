
class tuna {
	public int anydata;
	
	private int hour;
	private int minute;
	private int second;
	
	public void setTime(int h, int m, int s){
		hour = h>=0 && h<=24 ? h : 0 ; 
		minute = m>=0 && m<=60 ? m : 0 ;  
		second = s>=0 && s<=60 ? s : 0 ;  
	}/**/
	
	/*//giving default values
	private int hour = 1;
	private int minute = 2;
	private int second = 3;	
	
	//using 'this' to refer to instance variable
	public void setTime(int hour, int minute, int second){
		this.hour = 4 ; 
		this.minute = 5 ;  
		this.second = 6 ;  
	}/**/	
	
	
	//olverloading constructors
	public tuna(){
		this(0,0,0);
	}
	public tuna(int h){
		this(h,0,0);
	}
	public tuna(int h, int m){
		this(h,m,0);
	}
	
	public tuna(int h, int m, int s){
		setHour(h);
		setMinute(m);
		setSecond(s);
	}
	
	public void setHour(int h){
		hour = h>=0&&h<24?h:0;
	}
	public void setMinute(int m){
		minute = m>=0&&m<60?m:0;
	}
	public void setSecond(int s){
		second = s>=0&&s<60?s:0;
	}
	
	public int getHour(){
		return hour;
	}
	public int getMinute(){
		return minute;
	}
	public int getSecond(){
		return second;
	}

	public String toMilitary(){
		return String.format("%02d:%02d:%02d", getHour(), getMinute(), getSecond());
	}
	
	/*
	//previous time format
	public String toMilitary(){
		return String.format("%02d:%02d:%02d", hour, minute, second);
	}
	*/
	
	public String toString(){
		return String.format("%d:%02d:%02d%s", hour==0 || hour==12 ? 12 : hour%12, minute, second, hour<12?"AM":"PM");
	}
}
