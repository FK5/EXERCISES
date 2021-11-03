<?php

require_once "Father.php";

class Son extends Father{

    function __construct($familyName, $isLong){
        $this->familyName=$familyName;
        $this->isLong=$isLong;
    }

    function getFamilyName(){
        return $this->familyName;
    }

    function doAction(){
        echo "playing ...".PHP_EOL;
    }

}

$son1 = new Son("Smith",true);
$son2 = new Son("Michael",false);
$son1->doAction();
echo $son1->getFamilyName()." ".$son1->inheritedLength().PHP_EOL;
echo $son2->getFamilyName()." ".$son2->inheritedLength().PHP_EOL;
