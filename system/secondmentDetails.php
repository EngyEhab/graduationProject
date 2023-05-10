<?php
include "../Connections/syscon.php"; 
if (isset($_GET['id'])){

    $id=$_GET['id'];

    $myquery="SELECT * FROM doctors_account WHERE DoctorCode= '$id'";
    $results=mysqli_query($bis,$myquery);
    while ($row=mysqli_fetch_array($results)){$Doctor_image=$row['Doctor_image'];}

    mysqli_select_db($bis,$database_bis);
    $myquery="SELECT * FROM addsecondment_data WHERE doctorCodeInput= '$id'";
    $result = $bis->query($myquery);
    if ($result->num_rows === 1) {
        $row = $result->fetch_assoc();

        $doctorCodeInput=$row['doctorCodeInput'];
        $doctorNameInput =$row['doctorNameInput'];
        $secondmentDescription =$row['secondmentDescription']; 
        $secondmentDestination=$row["secondmentDestination"]; 
        $secondmentType=$row['secondmentType'];
        $secondmentDuration =$row['secondmentDuration'];
        $startDate =$row['startDate']; 
        $endDate=$row["endDate"]; 
        $secondmentFile =$row['secondmentFile']; 
        $secondmentNotes=$row["secondmentNotes"]; 
    }
}
// if (isset($_POST['deleteBtn'])){ 
//     $id=$_GET['id']; 
//     $Details = mysqli_query($bis , " DELETE FROM addsecondment_data WHERE doctorCodeInput='$id'");   

// }
?>
<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>النظام الإلكترونى لإدارة شئون أعضاء هيئة التدريس</title>
    <link rel="stylesheet" href="../css/all.min.css">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/style.css">
</head>
<body class="body">
    <div class="bodyCover"></div>
    <?php
        include('header.php');
    ?>
    <div class="sidebarContainer position-fixed z-3">
    <?php
        include('sidebar.php');
    ?>
    </div>
    <!-- start button to up -->
    <button class="btnToUp border-0" id="btnUp">
        <i class="fa-solid fa-circle-arrow-up fa-xl" style="color: #ffffff;"></i>
    </button>
    <!-- end button to up -->

    <div class="container bg-white p-5 shadow mt-5">
        <div class="row align-items-center">
            <div class="col-md-6">
                <div class="vacationData p-2">
                    <div class="row">
                        <div class="col-md-3">
                            <h4 class="mainText fw-bold">اســم العضـــــــــــو  :</h4>
                        </div>
                        <div class="col-md-9">
                            <p class="fs-4"><?php echo $doctorNameInput;?></p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            <h4 class="mainText fw-bold"> الإعــــــــــــــــــــارة  :</h4>
                        </div>
                        <div class="col-md-9">
                            <p class="fs-4"><?php echo $secondmentDescription;?></p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            <h4 class="mainText fw-bold"> جهــــة الإعــــــــــارة  :</h4>
                        </div>
                        <div class="col-md-9">
                            <p class="fs-4"><?php echo $secondmentDestination;?></p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            <h4 class="mainText fw-bold"> نـــوع الإعــــــــــارة  :</h4>
                        </div>
                        <div class="col-md-9">
                            <p class="fs-4"><?php echo $secondmentType;?></p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            <h4 class="mainText fw-bold">المـــــــــــــــــــــــدة  :</h4>
                        </div>
                        <div class="col-md-2">
                            <p class="fs-4"><?php echo $secondmentDuration;?></p>
                        </div>
                        <div class="col-md-1">
                            <h4 class="mainText fw-bold">من  :</h4>
                        </div>
                        <div class="col-md-2">
                            <p class="fs-4"><?php echo $startDate;?></p>
                        </div>
                        <div class="col-md-1">
                            <h4 class="mainText fw-bold">إلى  :</h4>
                        </div>
                        <div class="col-md-2">
                            <p class="fs-4"><?php echo $endDate;?></p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            <h4 class="mainText fw-bold">الملاحظــــــــــــات  :</h4>
                        </div>
                        <div class="col-md-9">
                            <p class="fs-4"><?php echo $secondmentFile;?></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="memberPhoto d-flex justify-content-center align-items-center p-5">
                    <img src="../images/users/<?php echo $Doctor_image;?>" class="w-50 rounded-circle shadow" alt="">
                </div>
                <h1 class="text-center mainTitle"><?php echo $doctorNameInput;?></h1>
            </div>
        </div>
    </div>
    <div class="container mt-3 mb-5">
        <div class="row justify-content-end">
            <div class="col-md-2">
                <a href="updateSecondmentData.php?id=<?php echo $doctorCodeInput;?>">
                    <button id="updateBtn" name="updateBtn" class="btn btn-warning w-100 rounded-pill fw-bold fs-4 border-2 shadow">تعديــل</button>
                </a>
            </div>
            <div class="col-md-2">
                <a href="deleteSecondmentData.php?id=<?php echo $doctorCodeInput;?>">
                    <button id="deleteBtn" name="deleteBtn" class="btn btn-danger w-100 rounded-pill fw-bold fs-4 border-2 shadow">حـــذف</button>
                </a>
            </div>
        </div>
    </div>

    <?php
        include('footer.php');
    ?>

    <script src="../js/all.min.js"></script>
    <script src="../js/bootstrap.bundle.min.js"></script>
    <script src="../js/jquery-3.6.4.js"></script>
    <script src="../js/main.js"></script>
</body>
</html>