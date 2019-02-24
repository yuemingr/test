<?php
class SystemA
{
    public function operationA()
    {
        echo "operationA <br>";
    }
}

class SystemB
{
    public function operationB()
    {
        echo "operationB <br>";
    }
}

class SystemC
{
    public function operationC()
    {
        echo "operationC <br>";
    }
}

Class Facade
{
    protected $systemA;
    protected $systemB;
    protected $systemC;

    function __construct()
    {
        $this->SystemA = new SystemA();
	$this->SystemB = new SystemB();
	$this->SystemC = new SystemC();
    }

    public function myOperation()
    {
        $this->SystemA->operationA();
	$this->SystemB->operationB();
	$this->SystemC->operationC();
    }
}

$facade = new Facade();
$facade->myOperation();
