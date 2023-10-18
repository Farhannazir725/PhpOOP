<?php
class student{
    private $name;
    public function Nazir(){
       echo $this->name;
    }
    public function __get($property){
        echo "You Are Trying to Access Non existing or Private Property($property)<br>";
    }
    public function __set($property, $value){
        // echo "This is Private Property Or Non Exixting Property: $property<br>";
        if (property_exists($this, $property)) {
            $this->$property = $value;
        }
        else{
            echo "this Propery is not found : $property";
        }
    }
}

$t = new student();
$t->name="Devloper";
// $t->course="Developer";
$t->Nazir(); 

?>