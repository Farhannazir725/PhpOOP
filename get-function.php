<?php
                                // get_class funtion 
// class Nazir{
//     function name(){
//         echo "Class Name is :" . get_class($this) . "<br>"; // $this object ke liye use kiya hai 
//     }
// }
// $obj = new Nazir();
// $obj->name();
// echo "Class name is Objecr " . get_class($obj); // class ke baher bhi use kr skte hai hai 

                                // get_parent_class
    // class abc{
        
    // }   
    // class xyz extends abc{
    //     function name(){
    //         echo "Parent Class :" . get_parent_class($this) . "<br>";
    //     }

    // }                         
    // $obj = new xyz();
    // $obj->name();
    // echo "class parent is ". get_parent_class('xyz');

                                // get_class_method
//     class abc{
//         function __construct(){
//             print_r(get_class_methods($this));
//         }
//         private function myfun(){

//         }
//         function myfun2(){

//         }
//     }   
//    $obj = new abc();                     
//    $class_method = get_class_methods('abc'); // array return hoga 
//    print_r($class_method); // ye sare public methods hai agr private honge to ye return nahi honge
        // foreach ($class_method as $methods) {
        //     echo $methods . "<br>";
        //     # code...
        // }

    //                         // get_class_vers
    // class farhan{
    //     public $name;
    //     public $age = 10;
    //     public $course;
    //     public $group = 'A';
    //     private $vari;
    //     function __construct(){
    //         print_r(get_class_vars(__CLASS__));
    //     }
    // }
    // $obj = new farhan();
    // $variables = get_class_vars(get_class($obj));
    // // $variables = get_class_vars('farhan');
    // // print_r($variables);

                     // get_object_vers
    // class farhan{
    //     public $name;
    //     public $age = 10;
    //     public $course;
    //     public $group = 'A';
    //     private $vari;
    //     function __construct(){
    //         $this->name = "Nazir";
    //         $this->age = 29;
    //        print_r(get_object_vars($this));
    //     }
    // }
    // $obj = new farhan();
    // $variables = get_object_vars($obj);
    // // print_r($variables);
   
    //             //get_called_class
    // class abc{
    //     static public function test(){
    //         var_dump(get_called_class());
    //    }
    // }
    // class xyz extends abc{
        

    // }
    // abc::test();
    // xyz::test();

                        // get_declare_class
//     class abc{
        

//     }
//     class xyz extends abc{

//     }
//     echo "<pre>";
//     print_r(get_declared_classes());
//     echo "</pre>";

                        // get_declared_interface
    // interface test{

    // }
    // class abc{

    // }
    // class xyz{

    // }
    // print_r(get_declared_interfaces());


                    // get_declared_traits
    // trait nazir{

    // }
    // trait anil{

    // }
    // class abc{
    //         use nazir;
    // }
    // class xyz{
    //         use anil;
    // }
    // echo "<pre>";
    // print_r(get_declared_traits());
    // echo "</pre>";


                        // class_alias
    class my{
        public $name;
    }
    class_alias('my','Anu');
    $obj = new anu();
    $obj2 = new my();

    echo $obj->test = "Hello <br>";
    echo $obj2->test = "Hello Everyone We Are from Allen Career Institute";

 ?>