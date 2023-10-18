<?php
include "database.php";

$obj = new Database();
$colName = "students.id,students.student_name, students.age, citytb.cname";
$join = "citytb ON students.city = citytb.cid";
$limit =  null;
// $obj->insert('name',['studentname'=>'Farhan Nazir Ansari ','age'=>'28', 'city'=>'Ajmer']);
// echo "Resultid is ";
// print_r($obj->getResult());

// $obj->update('name',['age'=>'30'], 'age="22"');
// echo "Data is update is succefull ";
// print_r($obj->getResult());


// $obj->delete('name', 'age="30"');
//  echo "Delete Result is  ";
//  print_r($obj->getResult());


//  $obj->sql('SELECT * FROM name WHERE city= "Bundi"'); // Result or data show krne ke liye use kr rahe hai s
// echo "sql Result is  ";
// echo "<pre>";
//  print_r($obj->getResult());
//  echo "</pre>";

 $obj->select('students', $colName, $join, null , null, $limit); // Result or data show krne ke liye use kr rahe hai s
echo " <br> Select Result is  ";
echo "<pre>";
 print_r($obj->getResult());
 echo "</pre>";

echo  $obj->pagination('students',  $join , null, $limit); 







 ?>


