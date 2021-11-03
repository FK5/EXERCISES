<?php

abstract class Phone{
    abstract public function takePhoto();
    abstract public function sendMessage($number, $message);
}

class iOS extends Phone{


    public function takePhoto(){
        echo "A beautiful photo was taken." . PHP_EOL;
    }

    public function sendMessage($number, $message)
    {
        echo "Sending a FaceTime request with message: $message to $number" . PHP_EOL;
    }
}

class Android extends Phone{


    public function takePhoto()
    {
        echo "A fuzzy photo was taken" . PHP_EOL;
    }

    public function sendMessage($number, $message)
    {
        echo "Sending a Skype video request with message: $message to $number" . PHP_EOL;
    }
}

$iPhone7 = new iOS();
$iPhone7->takePhoto();
$iPhone7->sendMessage(12321313, "Learning Interface.");

$samsung = new Android();
$samsung->takePhoto();
$samsung->sendMessage(12321313, "Learning Interface.");