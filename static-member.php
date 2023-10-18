<?php
class base{
    public static $name = "Nazir";

    
    // public function __construct($n){
    //     self::$name = $n;
    //     // self::show();
    // }
    // public function show(){
    //     echo self::$name;
    // }
}

class derived extends base{
    public static function show(){
        echo parent::$name;
    }
}
 $t= new derived();
 $t->show();
  
// echo base::$name;
// echo "<br>";
//  base::show();  









?>