import java.util.ArrayList;

public class ArrayTestAd{
	public static void main(String[] args){
		ArrayList<String> objArray = new ArrayList<String>();
		objArray.clear();
		objArray.add(0,"this 0");
		objArray.add(1,"this 1");
		objArray.add(2,"this 2");
		objArray.add(3,"this 3");
		System.out.println("q:" + objArray);
		objArray.remove(1);
		objArray.remove("this 0");
		System.out.println("h:" + objArray);
	}
}