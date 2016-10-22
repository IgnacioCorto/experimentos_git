import java.util.Scanner;
import java.util.Random;

class apples{
	
	//multi dimensional array
	public static void main(String args[]){
		int firstarray[][] = {{8,9,10,11},{12,13,14,15}};
		int secondarray[][] = {{30,31,32,33},{43},{4,5,6}};
		
		System.out.println("This is the first array");
		display(firstarray);
		System.out.println("This is the second array");
		display(secondarray);		
	}
	public static void display(int x[][]){
		for(int row=0;row<x.length;row++){
			for(int column=0;column<x[row].length;column++){
				System.out.print(x[row][column]+"\t");
			}
			System.out.println();
		}
	}
		
	//enhanced for, pass an array to a method
	public static void main_22(String args[]){
		int bucky[]={3,4,5,6,7};
		change(bucky);
		int total=0;
		
		for(int x: bucky){
			System.out.println(x);
			total+=x;
		}
		System.out.println(total);
	}
	//add 5 to each element in the array
	public static void change(int x[]){
		for( int counter=0;counter<x.length;counter++){
			x[counter]+=5;
		}
	}
	

	//rolling a dice 1000 times
	public static void main_21(String args[]){
		Random rand = new Random();
		int freq[] = new int[7];  //to use 1 to 6 and ditch 0
		for(int roll=1;roll<1000;roll++){
			++freq[1+rand.nextInt(6)];
		}
		System.out.println("Face\tFrequency");
		for(int face=1;face<freq.length;face++){  //len 7, from 1 to 6
			System.out.println(face+"\t"+freq[face]);
		}
	}
	
	//index table
	public static void main_20(String args[]){
		System.out.println("Index\tValue");
		//int bucky[] = {32,12,18,54,2};
		int bucky[] = {21,16,86,21,3};
		int sum=0;
		
		for (int counter=0;counter<bucky.length;counter++){
			System.out.printf("%d\t%2d\n", counter, bucky[counter]);
			sum+=bucky[counter];
		}
		System.out.println("TOTAL: " + sum);
	}

	//random, array
	public static void main_19(String args[]){
		int bucky[] = new int[10];
		bucky[0] = 87;
		bucky[1] = 543;
		bucky[9] = 65;
		
		int bucky2[] = {2,4,5,7,9};

		System.out.printf("%d , %d \n",
				bucky[9], bucky2[2]);
		
		Random dice = new Random();
		int number;
		for (int counter=0;counter<=10;counter++){
			number = 1+dice.nextInt(6);
			System.out.print(number + " ");
		}
	}

	//do while loop, Math methods
	public static void main_18(String args[]){
		int a = -1;
		System.out.print(Math.abs(-26.7) + " , ");
		System.out.print(Math.ceil(7.4) + " , ");
		System.out.print(Math.floor(7.4) + " , ");
		System.out.print(Math.max(1.1, 9.9) + " , ");
		System.out.print(Math.min(1.1, 9.9) + " , ");
		System.out.print(Math.pow(2,3) + " , ");
		System.out.print(Math.sqrt(36) + " , ");
		System.out.println();
		
		int counter = 0;
		do {
			System.out.printf("%d ", counter);
			counter++;
		} while (counter<=10);
	}
	
	
	//for loop, compound interest
	public static void main_17(String args[]){
		double amount;
		double principal = 10000;
		double rate = 0.01;
		
		for (int day=1;day<=20;day++){
			amount=principal*Math.pow(1 + rate, day);
			System.out.println(day + " " + amount);
		}

		for (int counter=6;counter<=21;counter+=3){
			System.out.printf("%d ", counter);
		}
		
		System.out.println();
	}
	
	//simple average calculator
	public static void main_16(String args[]){
		Scanner input = new Scanner(System.in);
		int total = 0;
		int grade;
		int average;
		int counter=0;
		
		while (counter<10){
			grade = input.nextInt();
			total = total + grade;
			counter++;
		}
		
		average = total / 10;
		System.out.println("Your average is " + average);
	}
	
	//else if  &  conditional operator (ternary)
	public static void main_15(String args[]){
		int age = 45;
		
		if(age > 60)
			System.out.println("You are a senior citizen.");
		else if(age >= 50)
			System.out.println("You are in your 50s.");
		else if(age >= 40)
			System.out.println("You are in your 40s.");
		else 
			System.out.println("You are a young buck.");

		System.out.println(age > 50 ? "Your are old" : "You are young");
		
	}

	// nested if/else
	public static void main_14(String args[]){
		int age = 60;
		if(age < 50){
			System.out.println("You are young.");
		} else {
			System.out.println("You are old.");
			if (age > 75){
				System.out.println("You are really old.");
			} else {
				System.out.println("Don't worry, you aren't really that old.");
			}
		}
	}

	//using constructors
	public static void main_13(String args[]){
		tuna tunaObject = new tuna("afro");
		tuna tunaObject2 = new tuna("green");
		tunaObject.saying();
		tunaObject2.saying();
	}
	
	//getter, setter, and void methods
	public static void main_12(String args[]){
		Scanner input = new Scanner(System.in);
		tuna tunaObject = new tuna();
		System.out.println("Enter name of first gf here: ");
		String temp = input.nextLine();
		tunaObject.setName(temp);
		tunaObject.saying();
	}
	
	//calling methods with parameters
	public static void main_11(String args[]){
		Scanner input = new Scanner(System.in);
		tuna tunaObject = new tuna();
		System.out.println("Enter your name here: ");
		String name = input.nextLine();
		tunaObject.simpleMessage(name);
	}
	
	//Using classes
	public static void main_10(String args[]){
		tuna tunaObject = new tuna();
		tunaObject.simpleMessage();
	}
	
	//while loop
	public static void main_09(String args[]){
		int counter = 0;
		while (counter < 10){
			System.out.println(counter);
			counter++;
		}
	}
	
	//switch statement
	public static void main_08(String args[]){
		int age;
		age = 7;
		
		switch (age){
		case 1:
			System.out.println("You can crawl");
			break;
		case 2:
			System.out.println("You can talk");
			break;
		case 3:
			System.out.println("You can get in toruble");
			break;
		default:
			System.out.println("I dont know how old you are");
		}
	}
	
	//boolean operators
	public static void main_07(String args[]){
		int boy, girl;
		boy = 8;
		girl = 99;
		
		if(boy > 10 || girl < 60){
			System.out.println("You can enter");
		} else {
			System.out.println("You can not enter");
		}
	}
	
	//If conditions
	public static void main_06(String args[]){
		int test = 6;
		if (test < 9) {
			System.out.println("yes");
		} else {
			System.out.println("this is else");
		}
	}
	
	//Increments and Decrements
	public static void main_05(String args[]){
		int tuna = 5;
		int bass = 18;
		tuna += 3;
		tuna *= 2;
		System.out.println(++tuna);
		System.out.println(tuna++);
		System.out.println(tuna);
		System.out.println(--tuna);
	}
	
	//Int vaariables
	public static void main_04(String args[]){
		int girls, boys, people;
		girls = 11;
		boys = 3;
		people = girls % boys;
		System.out.println(people);
	}
	
	//Basic Calculator
	public static void main_03(String args[]){
		Scanner bucky = new Scanner(System.in);
		double fnum, snum, answer;
		System.out.println("Enter first num: ");
		fnum = bucky.nextDouble();
		System.out.println("Enter second num: ");
		snum = bucky.nextDouble();
		answer = fnum + snum;
		System.out.println(answer);
	}

	//Read input line from the user
	public static void main_02(String args[]){
		Scanner bucky = new Scanner(System.in);
		System.out.println(bucky.nextLine());
	}	
	
	//Define and print variables and strings
	public static void main_01(String args[]){
		double tuna;
		tuna = 5.28;

		System.out.print("I want ");
		System.out.print(tuna);
		System.out.println(" movies");
	}
}