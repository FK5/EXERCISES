<?php

require_once "Animal.php";

class Dog extends Animal{

    function __construct($name, $isHunting){
        $this->name=$name;
        $this->isHunting=$isHunting;
    }

    function makeSound(){
        echo "woof woof".PHP_EOL;
    }

}