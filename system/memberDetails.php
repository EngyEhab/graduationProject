<?php
include "../Connections/syscon.php"; 
if (isset($_GET['id'])){

    // $_SESSION['id']=$_GET['id'];
    $id=$_GET['id'];

    mysqli_select_db($bis,$database_bis);
    $myquery="SELECT * FROM doctors_account WHERE DoctorCode= $id";
    $result = $bis->query($myquery);
    if ($result->num_rows === 1) {
        $row = $result->fetch_assoc();

        $qualifications=$row['qualifications'];
        $date_of_birth =$row['date_of_birth'];
        $hiring_date =$row['hiring_date'];
        $Doctor_ar_Name = $row['Doctor_ar_Name'];              
        $Doctor_eng_Name=$row["Doctor_eng_Name"];                   
        $National_id=$row["National_id"];                   
        $Mobile=$row["Mobile"];                   
        $Academic_Mail=$row["Academic_Mail"]; 
        $Personal_Mail=$row["Personal_Mail"]; 
        $Notes=$row["Notes"]; 
        $Doctor_image=$row["Doctor_image"]; 
        $departments=$row["departments"]; 
        $university=$row["university"];
        $faculty=$row["faculty"];
        $doctor_jobs=$row["doctor_jobs"];
    
    }
}
if (isset($_POST['deleteBtn'])){ 
    $id=$_GET['id']; 
     $Details = mysqli_query($bis , " DELETE FROM doctors_account WHERE DoctorCode='$id'");   

}
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
    <div class="sidebarContainer position-fixed">
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
        <div class="row">
            <div class="col-md-6">
                <div class="memberData p-2">
                    <div class="row">
                        <div class="col-md-3">
                            <h4 class="mainText fw-bold">الإسـم باللغـة العربيـــــة :</h4>
                        </div>
                        <div class="col-md-9">
                            <p class="fs-4"><?php echo $Doctor_ar_Name;?></p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            <h4 class="mainText fw-bold">الإسـم باللغـة الإنجليزيـة :</h4>
                        </div>
                        <div class="col-md-9">
                            <p class="fs-4"><?php echo $Doctor_eng_Name?></p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            <h4 class="mainText fw-bold">الرقـــــــــــم القومـــــــى :</h4>
                        </div>
                        <div class="col-md-9">
                            <p class="fs-4"><?php echo $National_id?></p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            <h4 class="mainText fw-bold"> تاريــــــخ الميــــــــــــلاد :</h4>
                        </div>
                        <div class="col-md-9">
                            <p class="fs-4"><?php echo $date_of_birth?> </p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            <h4 class="mainText fw-bold">الإيميـــــــل الشخصـــى :</h4>
                        </div>
                        <div class="col-md-9">
                            <p class="fs-4"><?php echo $Personal_Mail?></p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            <h4 class="mainText fw-bold">رقــــــــــــم الهـــــــاتـف :</h4>
                        </div>
                        <div class="col-md-9">
                            <p class="fs-4"><?php echo $Mobile?></p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            <h4 class="mainText fw-bold">الجامعــــــــــــــــــــــــــة :</h4>
                        </div>
                        <div class="col-md-9">
                            <p class="fs-4"><?php echo $university?></p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            <h4 class="mainText fw-bold">الكليــــــــــــــــــــــــــــة :</h4>
                        </div>
                        <div class="col-md-9">
                            <p class="fs-4">  <?php echo $faculty?>  </p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            <h4 class="mainText fw-bold">القســــــــــــــــــــــــــــم :</h4>
                        </div>
                        <div class="col-md-9">
                            <p class="fs-4"><?php echo $departments?></p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            <h4 class="mainText fw-bold">الدرجة الوظيفية الحالية :</h4>
                        </div>
                        <div class="col-md-9">
                            <p class="fs-4"><?php echo $doctor_jobs?></p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            <h4 class="mainText fw-bold">تاريــــــخ التعييــــــــــن   :</h4>
                        </div>
                        <div class="col-md-9">
                            <p class="fs-4"><?php echo $hiring_date?></p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            <h4 class="mainText fw-bold">الإيميـــــــل الأكاديمـــــى :</h4>
                        </div>
                        <div class="col-md-9">
                            <p class="fs-4"><?php echo $Academic_Mail?></p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            <h4 class="mainText fw-bold">المـؤهــلات العلميـــــــة :</h4>
                        </div>
                        <div class="col-md-9">
                            <p class="fs-4"><?php echo $qualifications?> </p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            <h4 class="mainText fw-bold">الملاحظـــــــــــــــــــات :</h4>
                        </div>
                        <div class="col-md-9">
                            <p class="fs-4"><?php echo $Notes?> </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="memberPhoto d-flex justify-content-center align-items-center p-5">
                    <img src="../images/<?php echo $Doctor_image?>" class="w-50 rounded-circle shadow" alt="">
                </div>
                <h1 class="text-center mainTitle"><?php echo $Doctor_ar_Name;?>  </h1>
            </div>
        </div>
    </div>
    <div class="container mt-3 mb-5">
        <div class="row justify-content-end">
            <div class="col-md-2">
                <a href="updateMemberData.php?id=<?php echo $row ['DoctorCode']?>">
                    
                <button id="updateBtn" class="btn btn-warning w-100 rounded-pill fw-bold fs-4 border-2 shadow">تعديــل</button>
                </a>
            </div>
            <div class="col-md-2">
            <a href="members.php">
                <button id="deleteBtn" nmae="deleteBtn" class="btn btn-danger w-100 rounded-pill fw-bold fs-4 border-2 shadow">حـــذف</button>
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