<?php

require_once "Dog.php";
require_once "Tiger.php";

$dog1 = new Dog('dooog', false);
$dog1->makeSound();
$dog1->doesHunting();
$tiger1 = new Tiger('tigerrrr', true);
$tiger1->makeSound();
$tiger1->doesHunting();