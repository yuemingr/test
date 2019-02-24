<?php
interface TV{
    public function open();
    public function watch();
}

class HaierTv implements TV
{
    public function open()
    {
        echo "Open Haier TV <br>";
    }

    public function watch()
    {
        echo "I'm wathing TV <br>";
    }
}
interface PC{
    public function work();
    public function play();
}

class lenovoPc implements PC
{
    public function work()
    {
        echo "I'm working on a lenovo computer <br>";
    }
    public function play(){
        echo "Lenovo computers can be used to play games <br>";
    }
}

abstract class Factory{
    abstract public static function createPc();
    abstract public static function createTv();
}

class ProductFactory extends Factory
{
    public static function createTV()
    {
        return new HaierTv();
    }
    public static function createPc()
    {
        return new LenovoPc();
    }
}

$newTv = ProductFactory::createTV();
$newTv->open();
$newTv->watch();

$newPc = ProductFactory::createPc();
$newPc->work();
$newPc->play();

