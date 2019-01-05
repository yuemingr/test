public class SearchStringEmp{
	public static void main(String args[]){
		String strOrig = "Google Runoob Taobao";
		int intIndex = strOrig.indexOf("Runoob");
		if(intIndex == -1){
			System.out.println("not search Runoob");
		}else{
			System.out.println("Runoob pos is:" + intIndex);
		}
	}
}