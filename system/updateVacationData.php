<?php
include "../Connections/syscon.php";
$bis = mysqli_connect($hostname_bis, $username_bis, $password_bis, $database_bis);
$id = "";
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $Select = mysqli_query($bis, " SELECT * FROM p74_vacation_data INNER JOIN  doctors_account   ON DoctorCode=doctorCodeInput WHERE Vacation_id='$id' ");
    $row = mysqli_fetch_assoc($Select);

    $doctorCodeInput = $row['doctorCodeInput'];
    $Doctor_ar_Name = $row["Doctor_ar_Name"];
    $vacationDescription = $row["vacationDescription"];
    $startDate = $row["startDate"];
    $endDate = $row["endDate"];
    $vacationReason = $row["vacationReason"];
    $vacationFile = $row["vacationFile"];
    $vacationNotes = $row["vacationNotes"];
    $vacationDuration = $row["vacationDuration"];

}

if (isset($_POST['update'])) {



    $vacationDescription = $_POST['vacationDescription'];
    $startDate = $_POST["startDate"];
    $endDate = $_POST['endDate'];
    $vacationReason = $_POST['vacationReason'];
    $vacationFile = $_POST['vacationFile'];
    $vacationNotes = $_POST["vacationNotes"];
    $vacationDuration = $_POST["vacationDuration"];


    if ((!empty($vacationFile))) {
        $Details = mysqli_query($bis, "UPDATE p74_vacation_data SET 
        startDate='$startDate',endDate='$endDate',vacationReason='$vacationReason',
        vacationFile='$vacationFile',vacationNotes='$vacationNotes',vacationDescription='$vacationDescription',vacationDuration='$vacationDuration'
        WHERE Vacation_id='$id'");
        if (isset($_POST['update'])) {

            header("location:vacationDetails.php?id=$id");
        }
    } else {
        $Details = mysqli_query($bis, "UPDATE p74_vacation_data SET
            startDate='$startDate',endDate='$endDate',vacationReason='$vacationReason',
            vacationNotes='$vacationNotes',vacationDescription='$vacationDescription',vacationDuration='$vacationDuration'
            WHERE Vacation_id='$id'");
        if (isset($_POST['update'])) {

            header("location:vacationDetails.php?id=$id");
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


    <form action="" method="post" id="updateVacationForm" class="mb-5">
        <div class="w-75 mx-auto m-5">
            <div class="container dataContainer p-3">
                <div class="row my-2 align-items-center">
                    <div class="col-md-2 text-center">
                        <label for="doctorNameInput" class="mainText fw-bold fs-4">اســـــــم العضــــــو :</label>
                    </div>
                    <div class="col-md-10">
                        <input name="doctorNameInput" id="doctorNameInput" value="<?php if (isset($_GET['id'])) {
                                                                                        echo $Doctor_ar_Name;
                                                                                    } ?>" readonly class="form-control fs-4"></input>
                    </div>
                </div>
                <div class="row my-2 align-items-center">
                    <div class="col-md-2 text-center">
                        <label for="vacationDescription" class="mainText fw-bold fs-4"> الأجـــــــــــــــــــازة :</label>
                    </div>
                    <div class="col-md-10">
                        <input type="text" class="form-control" name="vacationDescription" id="vacationDescription" value="<?php if (isset($_GET['id'])) {
                                                                                                                                echo $vacationDescription;
                                                                                                                            } ?>" required>
                    </div>
                </div>

                <div class="row my-2 align-items-center">
                    <div class="col-md-2 text-center">
                        <label for="vacationDuration" class="mainText fw-bold fs-4">المـــــــــــــــــــــــدة :</label>
                    </div>
                    <div class="col-md-4">
                        <input type="text" class="form-control" name="vacationDuration" id="vacationDuration" value="<?php if (isset($_GET['id'])) {
                                                                                                            echo $vacationDuration;
                                                                                                        } ?>">
                    </div>
                    <div class="col-md-1 text-center">
                        <label for="startDate" class="mainText fw-bold fs-4">مــن :</label>
                    </div>
                    <div class="col-md-2">
                        <input type="text" class="form-control" name="startDate" id="startDate" value="<?php if (isset($_GET['id'])) {
                                                                                                            echo $startDate;
                                                                                                        } ?>" required>
                    </div>
                    <div class="col-md-1 text-center">
                        <label for="endDate" class="mainText fw-bold fs-4">إلــى :</label>
                    </div>
                    <div class="col-md-2">
                        <input type="text" class="form-control" name="endDate" id="endDate" value="<?php if (isset($_GET['id'])) {
                                                                                                        echo $endDate;
                                                                                                    } ?>" required>
                    </div>
                </div>

                <div class="row my-2">
                    <div class="col-md-2 text-center">
                        <label for="vacationReason" class="mainText fw-bold fs-4">الســــــــــــــــــبب :</label>
                    </div>
                    <div class="col-md-10">
                        <textarea name="vacationReason" id="vacationReason" rows="2" class="form-control fs-4" required><?php if (isset($_GET['id'])) {
                                                                                                                    echo $vacationReason;
                                                                                                                } ?></textarea>
                    </div>
                </div>

                <div class="row my-2">
                    <div class="col-md-2 text-center">
                        <label for="vacationFile" class="form-label mainText fw-bold fs-4"> إرفاق ملف الأجازة :</label>
                    </div>
                    <div class="col-md-2">
                        <div class="fs-4 w-100 chooseVacationFileBtn text-center p-1 rounded-2" type="button">ارفق الملــف </div>
                    </div>
                    <div class="col-md-8 align-self-center">
                        <input class="form-control d-none" type="file" id="vacationFile" name="vacationFile">
                        <p class="selectedVacationFile fs-4"><?php if (isset($_GET['id'])) {
                                                                    echo $vacationFile;
                                                                } ?></p>
                    </div>
                </div>

                <div class="row my-2">
                    <div class="col-md-2 text-center">
                        <label for="vacationNotes" class="mainText fw-bold fs-4">ملاحظـــــــــــــات :</label>
                    </div>
                    <div class="col-md-10">
                        <textarea name="vacationNotes" id="vacationNotes" rows="3" class="form-control fs-4" required><?php if (isset($_GET['id'])) {
                                                                                                                    echo $vacationNotes;
                                                                                                                } ?></textarea>
                    </div>
                </div>
                <div class="row my-2 justify-content-end">
                    <div class="col-md-2">
                        <button type="submit" class="updateVacationBtn rounded-pill border-0 w-100 my-3" id="updateVacationBtn" name="update">تعديــل</button>
                    </div>
                </div>
            </div>
        </div>
    </form>

    <?php
    include('footer.php');
    ?>

    <script src="../js/all.min.js"></script>
    <script src="../js/bootstrap.bundle.min.js"></script>
    <script src="../js/jquery-3.6.4.js"></script>
    <script src="../js/main.js"></script>
</body>

</html>