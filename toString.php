<?php
class abc{

    public function __toString(){
        return "You Can't Print object as a String :" . get_class($this); // get class yaha class a name return karta hai 
    }
}

$t = new abc();
echo $t;



?>