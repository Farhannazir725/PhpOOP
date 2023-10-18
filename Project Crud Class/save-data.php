<?php
include 'database.php';
$obj = new Database();

// print_r($_POST);
$name = $_POST['name'];
$age = $_POST['age'];
$city = $_POST['city'];

$value = ['student_name'=>$name, 'age'=>$age, 'city'=>$city];
if($obj->insert('students',$value)){
    echo "<script>alert('Data Insert Successfully');</script>";
    echo "<script>window.location.href='form.php'</script>";
}else{
    echo "alert(Something is Wrong)";
}

?>