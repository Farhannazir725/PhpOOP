<?php
// namespace MySon; 

trait  MyTrain{
    public function myT(){
        return __TRAIT__ ;
    }
}
class myClass{
    // public function Nazir(){
    //     echo "My name is Khel Bahadur Manandhar : " . __CLASS__;
    // }
    // public function Nazir(){
    //     return  __METHOD__;
    // }
    // public function Farhan(){
    //     return  __NAMESPACE__ ;
    // }
    use MyTrain;
}


$ob = new myClass();
echo $ob->myT();












// echo "Line number : " . __LINE__ . "<br>" ;
// echo "Line number : " . __LINE__ . "<br>" ;
// echo "Line number : " . __LINE__ ;


// echo "The Full path of this line : ". __FILE__ ;


// echo "The Full path of Directory : ". __DIR__ ;

// function myName(){
//     echo "The Function Name is  : ". __FUNCTION__ ;
// }
// myName();

?>