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

    final function depositAmount($amt){
        $this->balance = $this->balance + $amt;
        return $this;
    }

    final function deductAmount($amt){
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

class User extends Bank{
    public $name;

    function __construct($name){
        $this->name = $name;
    }
}

$bank1 = new Bank(101,"Test, test",1000);
$user1 = new User("Joe");

$bank1->depositAmount(100)->checkBalance();
$bank1->deductAmount(200)->checkBalance();
$bank1->deductAmount(2000)->checkBalance();
// $user1->checkBalance();
