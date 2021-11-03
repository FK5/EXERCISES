<?php

class Car {
    private $speed=0;


    function __construct($speed){
        $this->speed = $speed;
    }

    //getter
    function getSpeed(): int{
        return $this->speed;
    }
    //setter
    function setSpeed($speed){
        $this->speed=$speed;
    }

    function increaseSpeed($amt){
        $this->speed = $this->speed + $amt;
        return $this;
    }

    function decreaseSpeed($amt){
        if($this->speed >= $amt){
            $this->speed = $this->speed - $amt;
            return $this;
        }
        else{
            echo "Not enough speed ...". PHP_EOL;
            return $this;
        }
    }

}

$car1 = new Car(0);
$car1->increaseSpeed(50)->increaseSpeed(20)->decreaseSpeed(30);
echo $car1->getSpeed(),PHP_EOL;
$car1->setSpeed(20);
echo $car1->getSpeed(),PHP_EOL;