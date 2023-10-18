<?php
class Calculation{
    public $a, $b,$c;

    function sum(){
        $this->c = $this->a + $this->b;
        return $this->c;
    }
    function sub(){
        $this->c = $this->a - $this->b;
        return $this->c;
    }
}
$c1 = new Calculation();
$c1-> a = 10;
$c1-> b = 20;
echo "Sum Value of object ".$c1->sum();
$c2 = new Calculation();
$c2-> a = 45;
$c2-> b = 99;
echo "<br>";
echo "Subtraction Value of object".$c2->sub();




?>