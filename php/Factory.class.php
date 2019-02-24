<?php
//简单的工厂模式
class Cat
{
    function __construct()
    {
        echo "I am Cat class <br>";
    }
}
class Dog
{
    function __construct()
    {
        echo "I am Dog class <br>";
    }
}
class Factory
{
    public static function createAnimal($name)
    {
        if($name == 'cat') {
	    return new Cat();
	} elseif ($name == 'dog') {
            return new Dog();	
	}
    }
}

$cat = Factory::createAnimal('cat');
$dog = Factory::createAnimal('dog');
