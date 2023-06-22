<?php
include "../Connections/syscon.php";
$bis = mysqli_connect($hostname_bis, $username_bis, $password_bis, $database_bis);
$id = "";
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $Select = mysqli_query($bis, "SELECT * FROM p74_assignments_data INNER JOIN  doctors_account   ON DoctorCode=doctorCodeInput WHERE assignment_id ='$id' ");
    $row = mysqli_fetch_assoc($Select);


    $assignment_id  = $row['assignment_id'];
    $Doctor_ar_Name = $row['Doctor_ar_Name'];
    $assignment_Description = $row['assignment_Description'];


}

if (isset($_POST['updateAssignmentBtn'])) {

    $assignmentDescription = $_POST['assignmentDescription'];

    if (isset($_POST['updateAssignmentBtn']))  {
        $Details = mysqli_query($bis, "UPDATE p74_assignments_data SET assignment_Description='$assignmentDescription' WHERE assignment_id ='$id'");
        if (isset($_POST['updateAssignmentBtn'])) {

            header("location:assignmentDetails.php?id=$id");
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


    <form action="" method="post" id="updateAssignmentForm" class="mb-5">
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
                        <label for="assignmentDescription" class="mainText fw-bold fs-4">الإنتــــــــــــــــــــــــــــــــداب :</label>
                    </div>
                    <div class="col-md-10">
                        <textarea  class="form-control fs-4" value="" name="assignmentDescription" id="assignmentDescription" required><?php if (isset($_GET['id'])) {
                                                                                        echo $assignment_Description;
                                                                                    } ?></textarea>
                    </div>
                </div>
                <div class="row my-2 justify-content-end">
                    <div class="col-md-2">
                        <button type="submit" class="updateAssignmentBtn rounded-pill border-0 w-100 my-3" id="updateAssignmentBtn" name="updateAssignmentBtn">تعديــل</button>
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