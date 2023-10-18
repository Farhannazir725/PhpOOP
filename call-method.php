<?php
class student{
    private $first_name;
    private $second_name;
    private function setName($first , $last){
        $this->first_name = $first;
        $this->last_name = $last;
    }

    public function __call($method, $arg){
        // echo "This is Non Exitsting Property or Private Property: $method <br>";
        // print_r($arg);
        if(method_exists($this, $method)){
           call_user_func_array([$this, $method], $arg);
        }
        else{
          return "Method does Not Exist :  $method";   
        }
    }
}
$t = new student();
 $t->setName("Nazir", "Ansari");
// $t->Nazir();
print_r($t);


?>
<html>
    <style>
        body{
            alig
        }
    </style>
</html>