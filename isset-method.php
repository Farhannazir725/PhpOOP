<?php
class student{
    public $course ;
    private $first_name ;
    private $last_name ;
    private $detail = ['name'=>'nazir', 'age'=>'28'];

    public function setName($fname, $lname)
    {
        $this->first_name = $fname;
        $this->last_name = $lname;
    }

    public function __isset($name)
    {
        echo isset($this->detail[$name]);
    }

}
$t = new student();
// $t->course = "React and Php Oop";
$t->setName("Nazir", "Ansari");
echo isset($t->city);



?>