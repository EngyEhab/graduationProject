<?php
include "../Connections/syscon.php";

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $Details = mysqli_query($bis, " DELETE FROM p74_special_vacation_data WHERE Special_vacation_id='$id'");
    header("location: privateVacations.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>