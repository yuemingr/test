package com.immoc.test;

class DrunkException extends Exception{

    public DrunkException(){
	
	}
	
	public DrunkException(String message){
	    System.out.println(message);
	}
}
