import java.io.*;

public class FileTestA{
	public static void main(String[] args){
		try{
			BufferedWriter out = new BufferedWriter(new FileWriter("runoob.txt"));
			out.write("菜鸟教程");
			out.close();
			System.out.println("ok");
		}catch(IOException e){
			
		}
	}
}