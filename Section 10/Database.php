<?php

abstract class Databse{
    protected $connection;
    protected $connectionActive;

    abstract function getConnection();
}

class DBConnection extends Databse{

    //constructor
    function __construct($connection,$connectionActive){
        $this->connection=$connection;
        $this->connectionActive=$connectionActive;
    }

    function getConnection(){
        echo "Getting connection".PHP_EOL;
    }
}

$dbconnection = new DBConnection("....DB....",true);
$dbconnection->getConnection();