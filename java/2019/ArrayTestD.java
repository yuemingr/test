import java.util.ArrayList;
import java.util.Collections;

public class ArrayTestD{
	public static void main(String[] args){
		ArrayList<String> arrayList = new ArrayList<String>();
		arrayList.add("A");
		arrayList.add("B");
		arrayList.add("C");
		arrayList.add("D");
		arrayList.add("E");
		System.out.println("a:" + arrayList);
		Collections.reverse(arrayList);
		System.out.println("b:" + arrayList);
	}
}