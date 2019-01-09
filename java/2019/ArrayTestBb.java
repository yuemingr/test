import java.util.*;

public class ArrayTestBb{
	public static void main(String args[]){
		ArrayList<String> objArray = new ArrayList<String>();
		ArrayList<String> objArray2 = new ArrayList<String>();
		ArrayList<String> objArray3 = new ArrayList<String>();
		objArray2.add(0,"common1");
		objArray2.add(1,"common2");
		objArray2.add(2,"notcommon");
		objArray2.add(3,"notcommon1");
		objArray.add(0,"common1");
		objArray.add(1,"common2");
		objArray.add(2,"notcommon2");
		//objArray3 = objArray.clone();
		System.out.println("array item:" + objArray);
		System.out.println("array2 item:" + objArray2);
		objArray.removeAll(objArray2);
		System.out.println("array diff array2:" + objArray);
		System.out.println("array item:" + objArray);
		System.out.println("array2 item:" + objArray2);
		System.out.println("array3 item:" + objArray3);
	}
}