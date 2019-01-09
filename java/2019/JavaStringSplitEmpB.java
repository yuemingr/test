import java.util.StringTokenizer;

public class JavaStringSplitEmpB{
	public static void main(String args[]){
		String str = "This is String, split by StringTokenizer, cread by runoob";
		StringTokenizer  st = new StringTokenizer(str);
		
		System.out.println("----kong ge----");
		while(st.hasMoreElements()){
			System.out.println(st.nextElement());
		}
		
		System.out.println("-----dou hou----");
		StringTokenizer st1 = new StringTokenizer(str,",");
		while(st1.hasMoreElements()){
			System.out.println(st1.nextElement());
		}
	}
}