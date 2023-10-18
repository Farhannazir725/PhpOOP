<?php
 abstract class ParentClass{
    public $name;
    abstract protected function cal($a,$b);
 }
 class childClass extends ParentClass{

    // public function cal($a,$b){
    public function cal($c,$d){
        // echo $c + $d ;
        echo "Hello Nazir";
    }
 }
 $p = new childClass();
 $p->cal(23, 56);


?>