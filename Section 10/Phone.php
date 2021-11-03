<?php

abstract class Phone{
    abstract public function makeCall($number);
    abstract public function sendMessage($number, $message);
}

class iOS extends Phone{


    public function makeCall($number)
    {
        echo "Making call to $number" . PHP_EOL;
    }

    public function sendMessage($number, $message)
    {
        echo "Sending $message message to $number" . PHP_EOL;
    }
}

$iPhone7 = new iOS();
$iPhone7->makeCall(12321313);
$iPhone7->sendMessage(12321313, "Learning Interface.");
