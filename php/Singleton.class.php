<?php
class Singleton
{
    private static $instance;
    private function __contruct(){}
    public static function getInstance(){
        if(!isset(self::$instance)) {
	    self::$instance = new self;
	}
	return self::$instance;
    }
    private function __clone() {}
    public function say()
    {
        echo "zhe shi danglimoshi <br>";
    }
    public function operation()
    {
        echo "这里可以添加其他方法操作<br>";
    }
}

$shiyanlou = Singleton::getInstance();
$shiyanlou->say();
$shiyanlou->operation();

$newShiyanlou = Singleton::getInstance();
var_dump($shiyanlou === $newShiyanlou);

