<?php
include "../Connections/syscon.php";
$bis = mysqli_connect($hostname_bis, $username_bis, $password_bis, $database_bis);
$id = "";
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    mysqli_select_db($bis, $database_bis);

    $Select =("SELECT * FROM doctors_account 
    INNER JOIN  doctor_jobs  
    ON doctors_account.Doctor_job_id=doctor_jobs.Doctor_job_id
    INNER JOIN  p74_completedata  
    ON doctors_account.DoctorCode=p74_completedata.doctorCodeInput
    WHERE id_completeData= '$id'");
    $result = $bis->query($Select);
    if ($result->num_rows === 1 ) {
        $row = $result->fetch_assoc();

    $Doctor_ar_Name = $row['Doctor_ar_Name'];
    $Doctor_job_ar_name = $row['Doctor_job_ar_name'];
    $CompleteData = $row['CompleteData'];
    $doctorCodeInput = $row['doctorCodeInput'];


}


}

if (isset($_POST['updateJobGradeBtn'])) {

    $jobGrade = $_POST['jobGrade'];

    if (isset($_POST['updateJobGradeBtn']))  {
        $Details = mysqli_query($bis, "UPDATE p74_completedata SET CompleteData='$jobGrade' WHERE id_completeData='$id'");
        if (isset($_POST['updateJobGradeBtn'])) {

            header("location:jobGradeDetails.php?id=$doctorCodeInput");
        }
    } 
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
    <div class="sidebarContainer">
        <?php
        include('sidebar.php');
        ?>
    </div>

    <!-- start button to up -->
    <button class="btnToUp border-0" id="btnUp">
        <i class="fa-solid fa-circle-arrow-up fa-xl" style="color: #ffffff;"></i>
    </button>
    <!-- end button to up -->


    <form action="" method="post" id="updateJobGradeForm" class="mb-5">
        <div class="w-75 mx-auto m-5">
            <div class="container dataContainer p-3">
                <div class="row my-2 align-items-center">
                    <div class="col-md-2 text-center">
                        <label for="doctorNameInput" class="mainText fw-bold fs-4">اســـــــــــــم العضــــــــــــــو :</label>
                    </div>
                    <div class="col-md-10">
                        <input name="doctorNameInput" id="doctorNameInput" value="<?php if (isset($_GET['id'])) {
                                                                                        echo $Doctor_ar_Name;
                                                                                    } ?>" readonly class="form-control fs-4"></input>
                    </div>
                </div>
                <div class="row my-2 align-items-center">
                    <div class="col-md-2 text-center">
                        <label for="doctorJobNameInput" class="mainText fw-bold fs-4 text-nowrap"> الدرجــة الوظيفيــة الحاليـــــة :</label>
                    </div>
                    <div class="col-md-10">
                        <input name="doctorJobNameInput" id="doctorJobNameInput" value="<?php if (isset($_GET['id'])) {
                                                                                        echo $Doctor_job_ar_name;
                                                                                    } ?>" readonly class="form-control fs-4"></input>
                    </div>
                </div>
                <div class="row my-2 align-items-center">
                    <div class="col-md-2 text-center">
                        <label for="jobGrade" class="mainText fw-bold fs-4">التدرج الوظيفـــــــــــــــــــى :</label>
                    </div>
                    <div class="col-md-10">
                        <textarea  class="form-control fs-4" value="" name="jobGrade" id="jobGrade" required><?php if (isset($_GET['id'])) {
                                                                                        echo $CompleteData;}
                                                                                    ?></textarea>
                    </div>
                </div>
                <div class="row my-2 justify-content-end">
                    <div class="col-md-2">
                        <a href="jobGradeDetails.php">
                            <button type="submit" class="updateJobGradeBtn rounded-pill border-0 w-100 my-3" id="updateJobGradeBtn" name="updateJobGradeBtn">تعديــل</button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </form>

    <div class="fixedFooter position-fixed bottom-0 start-0 end-0 z-3">
        <?php
        include('footer.php');
        ?>
    </div>

    <script src="../js/all.min.js"></script>
    <script src="../js/bootstrap.bundle.min.js"></script>
    <script src="../js/jquery-3.6.4.js"></script>
    <script src="../js/main.js"></script>
</body>

</html>