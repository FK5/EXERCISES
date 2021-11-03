<?php 

class Student {
    public $id;
    public $name;
    public $mark1 = 0;
    public $mark2 = 0;
    public $mark3 = 0;

    function examResults($sub1, $sub2, $sub3){
        if($sub1>100) echo "Error, grade can't be higher than 100".PHP_EOL;
        if($sub1<35) echo "Failing grade for Subject 1".PHP_EOL; 
        if($sub1>35) echo "Passing grade for Subject 1".PHP_EOL;

        if($sub2>100) echo "Error, grade can't be higher than 100".PHP_EOL;
        if($sub2<35) echo "Failing grade for Subject 2".PHP_EOL; 
        if($sub2>35) echo "Passing grade for Subject 2".PHP_EOL;

        if($sub3>100) echo "Error, grade can't be higher than 100".PHP_EOL;
        if($sub3<35) echo "Failing grade for Subject 3".PHP_EOL; 
        if($sub3>35) echo "Passing grade for Subject 3".PHP_EOL;
    }
}

    $student1 = new Student();
    $student1->mark1 = 15;
    $student1->mark2 = 150;
    $student1->mark3 = 75;
    $student1->examResults($student1->mark1,$student1->mark2,$student1->mark3);

