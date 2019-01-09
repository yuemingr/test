public class ArrayTestAc{
	public static void main(String[] args){
		int[] my_array = {1,2,5,5,6,1,1,7,2,9,2};
		findDupicateInArray(my_array);
	}
	
	public static void findDupicateInArray(int[] a){
		int count = 0;
		for(int j=0;j<a.length;j++){
			for(int k = j+1;k<a.length;k++){
				if(a[j] == a[k]){
					count++;
				}
			}
			if(count == 1)
				System.out.println("cf:" + a[j]);
			count = 0;
		}
	}
}