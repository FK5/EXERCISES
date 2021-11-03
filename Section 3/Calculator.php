<?php 

class Calculator{
    public $a;
    public $b;
    public $result;

    //getters
    function getA(): string{
        return $this->a;
    }
    function getB(): string{
        return $this->b;
    }
    function getResults(): string{
        return $this->result;
    }
    //setters
    function setA($a){
        $this->a=$a;
    }
    function setB($b){
        $this->b=$b;
    }
    function setResult($result){
        $this->result=$result;
    }
    //methods
    function add($a, $b){
        $this->result = $this->a + $this->b;
    }
}

$calculator1 = new Calculator();
$calculator1->setA(4);
$calculator1->setB(8);
$calculator1->add($calculator1->a,$calculator1->b);
echo $calculator1->getResults();//PHP_EOL;