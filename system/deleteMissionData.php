<?php
include "../Connections/syscon.php";

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $Details = mysqli_query($bis, "DELETE FROM p74_missions_data WHERE mission_id='$id'");
    header("location: missions.php");
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