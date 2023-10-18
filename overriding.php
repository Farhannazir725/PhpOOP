<?php 
class base{
    public $name = "Parent Class";

    public function cal($a,$b){
        return $a * $b ;

    }
}

class derived extends base{

    public $name = "Child Class";
    public function cal($a,$b){
        return $a + $b ;

    }

}

// $b = new base();
// echo $b->name;

// $d = new base();
// echo $d->cal(5, 12); 

$d = new derived();
echo $d->cal(5, 12); 

?>