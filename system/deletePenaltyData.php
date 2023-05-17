<?php
include "../Connections/syscon.php"; 

if (isset($_GET['id'])){ 
    $id=$_GET['id'];
    $Details = mysqli_query($bis , " DELETE FROM p74_penalities WHERE doctorCodeInput='$id'");   
    header("location: penalties.php");
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
