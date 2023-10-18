<?php
class student{
    public $name;
    public $course;
    public function __construct($n)
    {
        $this->name = $n;
    }
    public function setCourse(course $c) // course ka jo use hai use kahte hai type hinting 
    {
        $this->course = $c;
    }
    public function __clone()
    {
        $this->course = clone $this->course ;
    }
}

class course{
    public $cname;

    public function __construct($cn){
        $this->cname = $cn;

    }
}

$stu = new student("Nazir Ansari <br>");

$cou = new course("React And Php Oop"); 

$stu->setCourse($cou);

$stu2 = clone $stu;


$stu2->name = "Farhan nazir"; // ye yaha  copy by refrence ho raha hai // ye by default copy by refrence krta hai hame yaha & sign krne ki need nahi hoti hai 
$stu2->course->cname = "C++";
// echo $stu->name ;
// echo $stu2->name;
print_r($stu);
print_r($stu2);


?>