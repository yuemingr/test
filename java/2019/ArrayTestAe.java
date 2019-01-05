import java.util.ArrayList;

public class ArrayTestAe{
	public static void main(String[] args){
		ArrayList<String> objArray = new ArrayList();
		ArrayList<String> objArray2 = new ArrayList();
		objArray2.add(0,"common1");
		objArray2.add(1,"common2");
		objArray2.add(2,"notcommon");
		objArray2.add(3,"notcommon1");
		objArray.add(0,"common1");
		objArray.add(1,"common2");
		objArray.add(2,"notcommon2");
		System.out.println("array1 item:" + objArray);
		System.out.println("array2 item:" + objArray2);
		objArray.removeAll(objArray2);
		System.out.println("array1 diff array2:" + objArray);
				
	}
}