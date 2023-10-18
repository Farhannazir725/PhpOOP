<?php
class Person{
    public $name, 
     $age ;

    function __construct($name ="No name",$age = 0){
        $this->name = $name;
        $this->age = $age;
    }
    function show(){
        echo $this->name ." - " .$this->age ."<br>"; 
    }

}
$p1 = new Person();
$p2=  new Person("Mohit Pokhar",35);
// $p1->name = "Nazir Ansari";
// $p1->age = 28;
$p1->show();
$p2->show();







?>