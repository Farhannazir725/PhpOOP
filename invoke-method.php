<?php
class calculation{
    public $a, $b;
    public function __construct($a,$b){
        $this->a = $a;
        $this->b = $b;
    }
    public function sum(){
        echo $this->a + $this->b ;
    }
    public function __invoke(){
        echo $this->a + $this->b . " There are sum of numbers";
    }
}
$obj  = new calculation(13, 17);
// $obj->sum();
$obj();


?>