public class StringConcatenate{
	public static void main(String args[]){
		long startTime = System.currentTimeMillis();
		for(int i=0;i<5000;i++){
			String result = "This is"
			+ "testing the"
			+ "defference" + "between"
			+ "Sting" + "and" + "StringBuffer";
		}
		long endTime = System.currentTimeMillis();
		System.out.println("zif" + "- use + fh:"
		+ (endTime - startTime) + "ms");
		long startTime1 = System.currentTimeMillis();
		for(int i=0;i<5000;i++){
			StringBuffer result = new StringBuffer();
			result.append("This is");
			result.append("testing the");
			result.append("difference");
			result.append("between");
			result.append("String");
			result.append("and");
			result.append("StringBuffer");
		}
		long endTime1 = System.currentTimeMillis();
		System.out.println("zfc" + " - user StringBuffer:"
		+ (endTime1 - startTime1) + "ms");
	}
}