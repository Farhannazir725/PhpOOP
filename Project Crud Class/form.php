<?php
include 'database.php';
$obj = new Database();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="save-data.php" method="post">

        <!-- Stunent Name -->
        <label>Name</label>
        <input type="text" name="name"><br><br>
        
        <!-- Age -->
        <label>Age</label>
        <input type="text" name="age"><br><br>

         <!-- City -->
        <label>City</label>
        <select name="city" id="city">
            <?php
            $obj->select('citytb');
            $result = $obj->getResult();
            echo "<option>Selech City</option>";
            foreach ($result as $key) {
                ?>
          <option value=<?php echo $key['cid'];?>><?php echo $key['cname'];?></option>
          <?php  } ?>     
        </select>
        <br>
        <br>
        <input type="Submit" value="Submit">
    </form>
    
</body>
</html>