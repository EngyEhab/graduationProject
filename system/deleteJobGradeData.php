<?php
include "../Connections/syscon.php";

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $DoctorCode = $_GET['DoctorCode'];

    $Details = mysqli_query($bis, "DELETE FROM p74_completedata WHERE id_completeData='$id'");
    header("location: ../system/jobGradeDetails.php?id=$DoctorCode");

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