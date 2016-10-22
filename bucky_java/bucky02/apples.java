import java.util.Scanner;
import java.util.Random;
import java.util.EnumSet;

class apples {
	// 3/3  8:06
	
	//abastract animals
	public static void main(String[] args) {
		DogList DLO = new DogList();
		Dog d1 = new Dog();
		DLO.add(d1);
		
		AnimalList ALO = new AnimalList();
		Dog d2 = new Dog();
		Fish f2 = new Fish();
		ALO.add(d2);
		ALO.add(f2);
		ALO.noises();
	}
		
	//final members, inheritance, polymorphism
	public static void main_05(String[] args) {
		tuna4 tunaObject = new tuna4(10);
		for(int i=0;i<5;i++){
			tunaObject.add();
			System.out.printf("%s", tunaObject);
			//tunaObject.NUMBER=14;  //can't modify 'private final'
		}
		
		tuna5 tuna5object = new tuna5();
		tuna5object.eat();
		//only public methods can be inherited
		
		//potpie5 potpie5object = new potpie5();
		//potpie5object.eat();
		
		food bucky[] = new food[2];
		bucky[0] = new potpie5();
		bucky[1] = new tuna5();

		for(int x=0;x<2;++x){
			bucky[x].eat();
		}
		System.out.println("- - - - - - -");
		
		fatty fatBucky = new fatty();
		
		//food fo = new food();   //food is abstract
		food po = new potpie5();
		tuna5 to = new tuna5();

		//fatBucky.digest (fo);   //food is abstract
		fatBucky.digest (po);
		fatBucky.digest (to);
	}
	
	//static properties/methods/members
	public static void main_04(String[] args) {
		tuna3 member1 = new tuna3("Megan", "Fox");
		tuna3 member2 = new tuna3("Natalie", "Portman");
		tuna3 member3 = new tuna3("Taylor", "Swift");
		System.out.printf(" >> %s %s %d", member2.getFirst(), member2.getLast(), member2.getMembers());
		System.out.printf(" ** %d", tuna3.getMembers());
	}
		
	//enum constants
	public static void main_03(String[] args) {
		for(tuna_enum people: tuna_enum.values())
			System.out.printf("%s,%s,%s  ;  ", people, people.getDesc(), people.getYear());
		
		System.out.println("\nAnd now for the  range of constants:");
		
		for(tuna_enum people: EnumSet.range(tuna_enum.kelsey, tuna_enum.candy))
			System.out.printf("%s,%s,%s  ;  ", people, people.getDesc(), people.getYear());
	}
	
	//date class, toString, composition
	public static void main_02(String[] args) {
		potpie potObject = new potpie(4,5,6);
		tuna2 tunaObject = new tuna2("Greg", potObject);
		System.out.println(tunaObject);
	}

	//time class, overload constructors, getters and setters
	public static void main_01(String[] args) {
		tuna tunaObject = new tuna();
		System.out.print(tunaObject.toMilitary() + " / "); 
		System.out.print(tunaObject.toString() + "  ;  "); 
		tunaObject.setTime(13, 27, 6);
		System.out.print(tunaObject.toMilitary()  + " / "); 
		System.out.print(tunaObject.toString() + "\n"); 

		tuna tunaObject0 = new tuna();
		tuna tunaObject1 = new tuna(5);
		tuna tunaObject2 = new tuna(5, 13);
		tuna tunaObject3 = new tuna(5, 13, 42);

		System.out.print(tunaObject0.toMilitary()  + " ; "); 
		System.out.print(tunaObject1.toMilitary()  + " ; "); 
		System.out.print(tunaObject2.toMilitary()  + " ; "); 
		System.out.print(tunaObject3.toMilitary()  + " ; "); 
		
		
		System.out.println(); 
		tunaObject.anydata = 123456;
	}
		
	//variable length argument functions
	public static void main_00(String[] args) {
		System.out.println(average(43,56,76,8,65,76,2,31));
	}
	public static int average(int... numbers) {
		int total=0;
		for(int x: numbers){
			total+=x;
		}
		return total/numbers.length;
	}
	
	public static void main_test_printf_random(String[] args) {
		System.out.printf("Type an int: ");
		Scanner input = new Scanner(System.in);
		int number = input.nextInt();
		Random random = new Random();
		int randomNumber = 1+random.nextInt(number);
		System.out.printf("Random number between 1 and %s: %s\n", number, randomNumber);		
	}
}
