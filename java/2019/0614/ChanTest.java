package com.immoc.test;

public class ChanTest{

	public static void main(String[] args){
		ChanTest ct = new ChanTest();
		try{
			ct.test2();
		}catch(Exception e){
			e.printStackTrace();
		}
		System.out.println("dd");
		
	}
	
	public void test1(int id) throws DrunkException{
		if(id % 2 == 0){
		    throw new DrunkException("w222");
		}else{
			System.out.println("ook");
		}
	}
	
	public void test2() throws RuntimeException{
		try{
			test1(3);
		}catch(DrunkException e){
			RuntimeException newExc = 
			  new RuntimeException(e);
			//newExc.initCause(e);
			throw newExc;
		}
		throw new RuntimeException("aaaa");
	}
}