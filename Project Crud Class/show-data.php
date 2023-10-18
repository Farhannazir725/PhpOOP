<?php
include "database.php";

$obj = new Database();

$colName = "students.id,students.student_name, students.age, citytb.cname";
$join = "citytb ON students.city = citytb.cid";
$limit =  3;

$obj->select('students', '*', $join, null , null, $limit); // Result or data show krne ke liye use kr rahe hai 
$result = $obj->getResult(); // ye bn gya hamara array. array ko use karen ke liye hum foreach loop use krenge
// echo "<pre>";
// print_r($result);
// echo "</pre>";
echo "<table border='1px' width='500px' align='center'>
<tr>
    <th>Id</th>
    <th>Student Name</th>
    <th>Age</th>
    <th>City</th>
</tr>
";
foreach ($result as $key) {
    
    ?>
    <br>
    <tr align='center'>
    <td><?php echo $key['id']." ";?></td>
   <td> <?php echo $key['student_name']." ";?></td>
   <td><?php echo $key['age']." ";?></td>
   <td><?php echo $key['cname']." ";?></td>
   </tr>
   <?php 
}
echo "</table>";

echo  $obj->pagination('students',  $join , null, $limit); 

?>