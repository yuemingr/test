package main

//import "fmt"

func main(){
	var a uint = 60
	var b uint32 = 60
	var c uint64 = 60
	a = a << 2
	b = b << 2
	c = c << 2
	println(a,b,c)
	a = a << 10
	b = b << 10
	c = c << 10
	println(a,b,c)
	a = a << 17
	b = b << 17
	c = c << 17
	println(a,b,c)
	a = a << 20
	b = b << 20
	c = c << 20
	println(a,b,c)

}
