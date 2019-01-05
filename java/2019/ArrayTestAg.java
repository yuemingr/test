import java.util.ArrayList;

public class ArrayTestAg{
	public static void main(String[] args){
		ArrayList<String> objArray = new ArrayList<String>();
		ArrayList<String> objArray2 = new ArrayList<String>();
		objArray2.add(0,"common1");
		objArray2.add(1,"common2");
		objArray2.add(2,"notcommon");
		objArray2.add(3,"notcommon");
		objArray.add(0,"common1");
		objArray.add(1,"common2");
		System.out.println("objArray items:" + objArray);
		System.out.println("objArray2 items:" + objArray2);
		System.out.println("objArray if -common2?-:" 
		+ objArray.contains("common2"));
		System.out.println("objArray2 if -objArray?-:"
		+ objArray2.contains(objArray));
	}
}