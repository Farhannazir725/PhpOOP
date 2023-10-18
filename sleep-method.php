<?php
class student{
    public $course = "Php Oop";
    public $age = 24; 
    private $first_name;
    private $last_name;

    public function setName($fname, $lname){
        $this->first_name  = $fname;
        $this->last_name  = $lname;
    }   
    public function __sleep(){
        return array('course', 'age');

    }
}
 $obj = new student();

 $obj->setName("Farhan","Nazir");
 $t = serialize($obj);
 echo $t;




?>