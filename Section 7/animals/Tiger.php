<?php

require_once "Animal.php";

class Tiger extends Animal{

    function __construct($name, $isHunting){
        $this->name=$name;
        $this->isHunting=$isHunting;
    }

    function makeSound(){
        echo "rawwr".PHP_EOL;
    }
    
}