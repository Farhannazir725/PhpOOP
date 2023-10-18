<?php
class abc{
    private  $conn;
    public function __construct(){
        $this->conn = mysqli_connect();
    }
    public function Insert(){
        echo "Insert Data Succefully <br>" ;
    }
    public function Farhan(){
        echo "Hello Farhan <br>" ;
    }
    public function Ansari(){
        echo "Hello Ansari <br>" ;
    }
    public function Chotu(){
        echo "Hello Chotu <br>" ;
    }
    public function __destruct(){
        mysqli_close($this->conn); 
    }
}
$t = new abc();
$t->Nazir();
$t->Farhan();
$t->Ansari();
$t->Chotu();
 





?>