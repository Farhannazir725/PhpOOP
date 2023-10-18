<?php
$host = "localhost";
$username = "root";
$password = "";
$dbname = "phpoop";

$conn = new mysqli($host, $username, $password, $dbname);
if($conn->connect_error){
    die("Connection Failed: " .$conn->connect_error);
}

$sql = "SELECT * FROM `name` ";
$result = $conn->query($sql);
if($result->num_rows >0){
    while($row = $result->fetch_array()){
        ?>
        <table border="2px solid black" cellspacing="2px" cellpadding="4px" align="center">
        <tr>
            <td>Id :<?php echo $row['id'];?></td> 
            <td>Name :<?php echo $row['studentname'];?></td>
            <td>Age :<?php echo $row['age'];?></td>
            <td>City :<?php echo $row['city'];?></td>
        </tr>
        </table>
   <?php
    }
}
else{
echo "No Result Found.";
}
$conn->close();



    



?>