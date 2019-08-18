import java.util.Arrays;

public class ArayTestBd{
	public static void main(String[] args){
		int[] ary = {1,2,3,4,5,6};
		int[] ary1 = {1,2,3,4,5,6};
		int[] ary2 = {1,2,3,4};
		System.out.println("ary = ary1? " 
		+ Arrays.equals(ary,ary1));
		System.out.println("ary = ary2? "
		+ Arrays.equals(ary,ary2));
	}
}