public class StringReverseExample{
	public static void main(String[] srgs){
		String string = "runoob";
		String reverse = new StringBuffer(string).reverse().toString();
		System.out.println("qian:" + string);
		System.out.println("hou:" + reverse);
		//System.out.println("---" + string.reverse().toString());
	}
}