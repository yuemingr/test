public class StringOpimizztion{
	public static void main(String[] args){
		String variables[] = new String[500000];
		for(int i=0;i<500000;i++){
			variables[i] = "s" + i;
		}
		long startTime0 = System.currentTimeMillis();
		for(int i=0;i<500000;i++){
			variables[i] = "hello";
			variables[i] = variables[i].intern();
		}
		long endTime0 = System.currentTimeMillis();
		System.out.println("zhj:" + (endTime0 - startTime0) + "ms");
		long startTime1 = System.currentTimeMillis();
		for(int i=0;i<500000;i++){
			variables[i]= new String("Hello");
		}
		long endTime1 = System.currentTimeMillis();
		System.out.println("use new:" + (endTime1 - startTime1) + "ms");
		long startTime2 = System.currentTimeMillis();
		for(int i=0;i<500000;i++){
			variables[i] = new String("hello");
			variables[i] = variables[i].intern();
		}
		long endTime2 = System.currentTimeMillis();
		System.out.println("use intern:" + (endTime2 - startTime2) + "ms");
		System.out.println("v[100]:" + variables[100]);
		
	}
}