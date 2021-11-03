<?php

interface Stock{
    function buyStock();
    function sellStock();
}

class Mystock implements Stock{
    function buyStock(){
        echo "Buying Tesla stock....".PHP_EOL;
    }
    function sellStock(){
        echo "Selling Tesla stock....".PHP_EOL;
    }
}

$mystock = new Mystock();
$mystock->buyStock();
$mystock->sellStock();