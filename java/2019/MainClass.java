import java.util.Arrays;

public class MainClass{
	public static void main(String args[]){
		int array[] = {2,5,-2,6,-3,8,0,-7,-9,4};
		Arrays.sort(array);
		printArray("arr:", array);
		int index = Arrays.binarySearch(array, 2);
		System.out.println("2 in : " + index + "pos");
	}
	private static void printArray(String message, int array[]){
		System.out.println(message
		+ ": [length: " + array.length + "]");
		for(int i=0;i<array.length;i++){
			if(i != 0){
				System.out.print(", ");
			}
			System.out.print(array[i]);
		}
		System.out.println();
	}
}