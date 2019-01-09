public class SearchlastString{
	public static void main(String args[]){
		String strOrig = "Hello world, Hello Runoob";
		int lastIndex = strOrig.lastIndexOf("Runoob");
		if(lastIndex == -1){
			System.out.println("not ");
		}else{
			System.out.println("yes");
		}
	}
}