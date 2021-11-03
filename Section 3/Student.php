<?php

class Student{
    public $name;
    public $class;

    //getters
    function getName(): string{
        return $this->name;
    }
    function getClass(): string{
        return $this->class;
    }
    //setters
    function setName($name){
        $this->name=$name;
    }
    function setClass($class){
        $this->class=$class;
    }
    //methods
    function printDetails(){
        echo "Student Name: ".$this->getName().PHP_EOL."Student Class: ".$this->getClass().PHP_EOL;
    }

}

$student1 = new Student();
$student1->setName("John");
$student1->setClass("CS");
$student1->printDetails();