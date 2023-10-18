<?php

// function fruits(array $names){
// foreach ($names as $name) {
//     echo $name ."<br>";
// }
// }
// $t = ["Apple ", "Mango", "Banana"];
// fruits($t);

// Example Of Classes 
// class hello{
//     public function sayhello(){
//         echo "hello eveyone";
//     }
// }
// class bye{
//     public function saybye(){
//         echo "Bye EvryOne";
//     }
// }

// function work(hello $c){
//     $c->sayhello(); 
// };

// $b = new hello();

// work($b);


// advance example of clases and object are
class school{
    public function getNames(student $names){
        foreach ($names->names() as $name) {
            echo $name . "<br>";
        }
    }

}

class student{
   public function names(){
    return["nazir", "mohit", "Adil", "Nilesh"];

    }
}

class library{

}
$lib = new library();
$stu = new student();
$sch = new school();
$sch->getNames($stu);
?>

