<?php

class employee{
        //Properties & Methods
        public $name,
                $age, 
                $salary;

    function __construct($n,$a,$s){
        $this->name = $n;
        $this->age = $a;
        $this->salary = $s;
     }
    // function __construct(){
    //     echo "Employee Constructor";
    // }

    function info(){
        echo "<h3>Employee Profile</h3>";
        echo "Employee Name : ".$this->name. "<br>";
        echo "Employee Age  : ".$this->age. "<br>";
        echo "Employee Salary : ".$this->salary. "<br>";
    }
}

class Manager extends employee{
        //Properties & Methods
        // function __construct(){
        //     echo "Manager Constructor";
        // }
        public $ta = 1000,
                $phone =300, 
                $totalSalary ;
        function info(){
            $this->totalSalary = $this->salary + $this->ta + $this->phone ;
            echo "<h3>Manager Profile</h3>";
            echo "Employee Name : ".$this->name. "<br>";
            echo "Employee Age  : ".$this->age. "<br>";
            echo "Employee Salary : ".$this->totalSalary. "<br>";
        }

}

// $f = new fruits();
// $v = new vegetable();

$e1 = new employee("Mohit Pokhar", 35, 15000);
$m1 = new Manager("Nazir Ansari",29, 25000);
$e1->info();
$m1->info();







?>