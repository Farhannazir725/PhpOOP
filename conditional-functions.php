<?php

                       // Class exists conditional function 
// class myClass{

// }
// if(class_exists("myClass")){
// echo "This class is available or exists";
// $obj = new myClass(); agar class exists karti hai tabh hi is object create hoga 
// }
// else{
//     echo "This class is not available or not exists";
// };


                    // Inteface exists conditional function
//   interface myInter{}  
 
//   if(interface_exists("myInter")){
//     echo "This Interface is Exists ";
//     class Nazir implements myInter{

//     }  
//   }           
//   else{
//     echo "This Interface is Not Exists ";
//   }   


                    // Method exists conditional function
//  class Nazir{
//     public function Farhan(){

//     }

//  } 
//  $obj = new Nazir();
 
//   if(method_exists($obj,"Farhan")){
//     echo "This Method or function is available  ";
     
//   }           
//   else{
//     echo "This Method is not availabe ";
//   } 


                // trait exists conditional function

// trait Mytrai{
//     public function Me(){

//     }
// }
// if (trait_exists("Mytrai")) {
// // echo "This trait is available ";
// class NazirA{
//     use Mytrai;
// }
// }
// else{
//     echo "this trait is not avaiable";
// }

//             // Property Exists conditional function
//  class Farhan{
//     public $name;
//     public $age;
//  }
//  if (property_exists("Farhan" , "course ")) {
//     echo "This property is availabe";
//  }  
//  else {
//     echo "This property is not availabe";
//  }      


            // is a conditional function
            // class Farhan{
            //     public $name;
            //     public $age;
            //  }
            //  $obj = new Farhan();
            //  if (is_a($obj, "Farhan")) {
            //     echo "This object is related Farhan";
            //  }  
            //  else {
            //     echo "This object is not related to our Farhan class ";
            //  }  
            
            // is subclass of conditional function
            class Farhan{
               
             }
            class Nazir extends Farhan{

            }
             $obj = new Nazir();

            if (is_subclass_of($obj,"Farhana")) {
                echo "This \$obj is a object of subclass of ParentClass";
            }  
            else {
                echo "This is not a object of subclass of ParentClass";
            }  
?>