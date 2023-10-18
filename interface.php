<?php
interface A{
    function cal($a, $b);
}
interface C{
    function sub($a, $b);
    
}

interface D{
    function no($a, $b);
}

class B implements A, C,D{
    public function cal($a, $b ){
        echo  $a + $b;
    }
    public function sub($a, $b){
        echo  $a - $b;
    }
    
   
    public function no($a, $b){
        echo  $a * $b;
    }

}

$main = new b();
$main->cal(56, 89);
echo "<br>";
$main->no(56, 110);
echo "<br>";
$main->sub(50, 45);








?>