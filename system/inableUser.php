<?php
include "../Connections/syscon.php"; 

if (isset($_GET['id'])){ 
    $id=$_GET['id'];
    $Details = mysqli_query($bis , "UPDATE p74_users SET is_enable = 'yes' WHERE user_id='$id'");   
    header("location: users.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
    
</body>
</html>