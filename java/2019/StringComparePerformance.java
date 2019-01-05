public class StringComparePerformance{
	public static void main(String args[]){
		long startTime = System.currentTimeMillis();
		for(int i=0;i<50000;i++){
			String s1 = "Hello";
			String s2 = "Hello";
		}
		long endTime = System.currentTimeMillis();
		System.out.println("t1:" + (endTime - startTime) + "ms");
		long startTime1 = System.currentTimeMillis();
		for(int i=0;i<50000;i++){
			String s1 = new String("Hello");
			String s2 = new String("Hello");
		}
		long endTime1 = System.currentTimeMillis();
		System.out.println("t2:" + (endTime1 - startTime1) + "ms");
	}
}