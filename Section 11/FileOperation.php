<?php

class FileOperation{

    static $content;
    public 
    static function hasData($fileName) : bool {
        if(!file_exists($fileName)){
            echo "$fileName does not exists" .PHP_EOL;
            return false;
        }
        self::$content = file_get_contents($fileName);
        if(empty(self::$content)){
            return false;
        }else{
            return true;
        }
    }

}

echo FileOperation::hasData("Test.txt"),PHP_EOL;
echo FileOperation::$content,PHP_EOL;