<?php
// class abc{
// private $data = ["Name"=>"Nazir Ansari <br>", "Age"=>"29<br>","Course"=>"Php Oop"];// there is associative array

// function __get($property){
//     echo "Your Trying to Acccess Private Property($property)";
// }
// }

// $t = new abc();
// // print_r($t->data); // our varible use directly
// echo $t->name;
class abc{
    private $data = ["Name"=>"Nazir Ansari <br>", "Age"=>"29<br>","Course"=>"Php Oop"];// there is associative array
    
    function __get($key){
        if (array_key_exists($key, $this->data)) {
            return  $this->data[$key];
        } 
        else {
            return "this key[$key] is not defined";
        }
        
        
    }
    }

    $t = new abc();
    echo $t->Name;
?>