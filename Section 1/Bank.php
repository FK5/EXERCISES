<?php

class Bank {
    public $accno;
    public $name;
    public $balance = 0;

    function depositAmount($amt): bool{
        $res = false;
        $this->balance = $this->balance + $amt;
        $res = true;
        return $res;
    }

    function deductAmount($amt): bool{
        $res = false;
        if($this->balance >= $amt){
            $this->balance = $this->balance - $amt;
        }
        return $res;
    }

    function checkBalance(){
        return $this->balance;
    }
}

$bank1 = new Bank();
$bank1->accno = 101;
$bank1->name = "Test, test";
$bank1->balance = 1000;

$a = $bank1->checkBalance();
echo $a . PHP_EOL;
$a = $bank1->depositAmount(100);
echo $a . PHP_EOL;
$a = $bank1->checkBalance();
echo $a . PHP_EOL;
$a = $bank1->deductAmount(200);
echo $a . PHP_EOL;
$a = $bank1->checkBalance();
echo $a . PHP_EOL;
$a = $bank1->deductAmount(2000);
echo $a . PHP_EOL;
$a = $bank1->checkBalance();
echo $a . PHP_EOL;