<?php
class student{
    private static function hello($name){
        echo "Call static $name";
    }
    public static function __callStatic($method, $arg){
        // echo "This is Private or Static Method : $method";
        if(method_exists(__class__ , $method)){
            call_user_func_array([__CLASS__ , $method] , $arg);    // this is call back function 
        }
        else{
            echo "This Method is does not Exixts : $method";
        }

    }
}
student::hello("Farhan nazir");

?>