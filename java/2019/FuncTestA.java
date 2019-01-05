public class FuncTestA{
	public static void main(String[] args){		
		int[] a = fbq(20);
		for(int i=0;i<a.length;i++){
			System.out.println(a[i]);
		}
	}
	
	public static int[] fbq(int indexMax){
		int[] arr = new int[indexMax];
		for(int i=0;i<indexMax;i++){
			if(i == 0){
				arr[0] = 0; 
			}
			if(i == 1){
				arr[1] = 1;
			}
			if(i > 1){
				arr[i] = arr[i-1] + arr[i-2];
			}
		}
		return arr;
	}
}