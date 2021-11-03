<?php

class Father{
    protected $familyName;
    protected $isLong = true;

    function inheritedLength(){
        if($this->isLong){
            echo "Inherited body length".PHP_EOL;
        }else{
            echo "Didn't inherited body length".PHP_EOL;
        }
    }
}