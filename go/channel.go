package main

import "fmt"

func sum(s []int, c chan int){
	sum1 := 0
	for _, v := range s {
		sum1 += v
	}
	c <- sum1
}

func main(){
	s := []int{7, 2, 8, -9, 4, 0}
	
	c := make(chan int)
	go sum(s[:len(s)/2], c)
	go sum(s[len(s)/2:], c)
	go sum(s,c)
	go  sum(s,c)
	x := <-c
	y := <-c
	z := <-c
	zz := <-c
	fmt.Println(x,y,z,zz,c)
}