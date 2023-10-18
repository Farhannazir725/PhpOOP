<?php
class Nazir{
    public function one(){
        echo "There are From Function One Method .<br>";
        return $this;
    }
    public function two(){
        echo "There are From Function Second Method .<br>";
        return $this;
    }
    public function third(){
        echo "There are From Function Third Method .<br>";
        return $this;
    }
}

$t = new Nazir();

$t->one()->two()->third(); // this is method chaining syntax



?>