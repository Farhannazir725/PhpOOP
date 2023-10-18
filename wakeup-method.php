<?php
class student{
    public $course = "Php Oop";
    public $age = 24; 
    private $first_name;
    private $last_name;
    private $conn;

    public function setName($fname, $lname)
        {
        $this->first_name  = $fname;
        $this->last_name  = $lname;
         }
    public function __construct()
        {
        $this->conn = mysqli_connect();

        }   
    public function __sleep()
        {
        mysqli_close($this->conn);
        return array('first_name', 'last_name');

        }
    public function __wakeup()
        {
         $this->conn = mysqli_connect();
        echo "this is wakeup method";

        }
}
 $obj = new student();

 $obj->setName("Farhan","Nazir");
 $t = serialize($obj);
 
 $us = unserialize($t);
 echo "<pre>";
 print_r($us);
 echo "</pre>";




?>