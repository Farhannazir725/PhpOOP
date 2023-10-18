<?php
// access modifier
    // there are theree types of access modifier
    // 1. public
    // 2. protected
    // 3. private

    // public modifier in php
//     class base{
//         public $name;
//         public function __construct($n){
//         $this->name = $n ;
//         }
//     public function show(){
//         echo "Your Name: ".$this->name . "<br>";
//     }
//     }

//  $b = new base("Farhan Nazir");
//  $b->name = "Nazir Ansari";
//  $b->show();

// protected modifier in php
// class base{
//     protected $name;
//     public function __construct($n){
//     $this->name = $n ;
//     }
//     protected function show(){
//     echo "Your Name: ".$this->name . "<br>";
// }
// }

// class derived extends base{
//     public function get(){
//         echo "Your Name: ".$this->name . "<br>";
//     }
// }

// $b = new derived("Farhan Nazir");
// // $b->name = "Nazir Ansari";
// $b->get();


// private modifier in php
    class base{
    private $name;
    public function __construct($n){
    $this->name = $n ;
    }
    public function show(){
    echo "Your Name: ".$this->name . "<br>";
}
}

class derived extends base{
    public function get(){
    echo "Your Name: ".$this->name . "<br>";
    }
}

$b = new base("Farhan Nazir");
//  $b->name = "Nazir Ansari";
 $b->show();
?>
