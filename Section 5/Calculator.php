<?php 

class Calculator{
    public $a;
    public $b;
    public $result=0;

    //constructor
    function __construct($a ,$b){
        $this->a = $a;
        $this->b = $b;
    }

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
        return $this;
    }
    function multiply($a, $b){
        $this->result = $this->result + $this->a * $this->b;
    }

    //destructor
    function __destruct(){
        echo $this->getResults();
    }
}
// going to add a + b and then multiply result and a 
$calculator1 = new Calculator(4,8);
$calculator1->add($calculator1->a,$calculator1->b)->multiply($calculator1->result,$calculator1->a);