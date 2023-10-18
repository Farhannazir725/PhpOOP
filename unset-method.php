<?php
class abc{
    public $name = "Nazir ";
    private $course = "PHP OOP";
    private $rcourse = "React";

   
    public function setName($fc, $lc){
     $this->course = $fc;
     $this->rcourse = $lc;
    }
     public function __unset($property){
        unset($this->$property);
    }
}
$t = new abc();
$t->setName("Srv", "Code With Harry");

// print_r($t); // print basically array ki full value dekhne ke liye kaam aata hai or is hum object case me bhi use kar sakte hai 

unset($t->name);
echo "<pre>";
print_r($t);
echo "</pre>";


// unset($t->name);
// echo $t->name;   



?>