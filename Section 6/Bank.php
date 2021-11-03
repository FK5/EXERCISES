<?php

class Bank {
    private $accno;
    private $name;
    private $balance = 0;

    function __construct($accno, $name, $balance){
        $this->accno = $accno;
        $this->name = $name;
        $this->balance = $balance;

    }

    function depositAmount($amt){
        $this->balance = $this->balance + $amt;
        return $this;
    }

    function deductAmount($amt){
        if($this->balance >= $amt){
            $this->balance = $this->balance - $amt;
            return $this;
        }
        else{
            echo "Not enough balance ...". PHP_EOL;
            return $this;
        }
    }

    function checkBalance(){
        echo $this->balance, PHP_EOL;
    }
}

$bank1 = new Bank(101,"Test, test",1000);


$bank1->depositAmount(100)->checkBalance();
$bank1->deductAmount(200)->checkBalance();
$bank1->deductAmount(2000)->checkBalance();
