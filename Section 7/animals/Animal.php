<?php

class Animal{
    protected $name;
    protected $isHunting=false;

    function doesHunting(){
        if($this->isHunting){
            echo "IT HUNTS".PHP_EOL;
        }else{
            echo "IT DOESNT HUNT".PHP_EOL;
        }
    }
}