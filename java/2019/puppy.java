public class puppy{
	int puppyAge;
	public puppy(String name){
		System.out.println("小狗名字是：" + name);
	}
	
	public void setAge( int age ){
		puppyAge = age;
	}
	
	public int getAge(){
		System.out.println("小狗年龄是：" + puppyAge);
		return puppyAge;
	}
	
	public static void main(String []args){
		puppy myPuppy = new puppy("tommy");
		myPuppy.setAge(2);
		myPuppy.getAge();
		System.out.println("变量值：" + myPuppy.puppyAge);
	}
}