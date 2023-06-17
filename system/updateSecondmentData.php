<?php
include "../Connections/syscon.php";
$bis = mysqli_connect($hostname_bis, $username_bis, $password_bis, $database_bis);
$id = "";
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $Select = mysqli_query($bis, " SELECT * FROM p74_secondment_data INNER JOIN  doctors_account   ON DoctorCode=doctorCodeInput WHERE Secondment_id='$id' ");
    $row = mysqli_fetch_assoc($Select);


    $doctorCodeInput = $row['doctorCodeInput'];
    $Doctor_ar_Name = $row['Doctor_ar_Name'];
    $secondmentDescription = $row['secondmentDescription'];
    $secondmentDestination = $row["secondmentDestination"];
    $secondmentType = $row['secondmentType'];
    $secondmentDuration = $row['secondmentDuration'];
    $startDate = $row['startDate'];
    $endDate = $row["endDate"];
    $secondmentFile = $row['secondmentFile'];
    $secondmentNotes = $row["secondmentNotes"];
}

if (isset($_POST['updateSecondmentBtn'])) {



    $secondmentDescription = $_POST['secondmentDescription'];
    $secondmentDestination = $_POST["secondmentDestination"];
    $secondmentType = $_POST['secondmentType'];
    $secondmentDuration = $_POST['secondmentDuration'];
    $startDate = $_POST['startDate'];
    $endDate = $_POST["endDate"];
    $secondmentFile = $_POST['secondmentFile'];
    $secondmentNotes = $_POST["secondmentNotes"];

    if ((!empty($secondmentFile))) {
        $Details = mysqli_query($bis, "UPDATE p74_secondment_data SET 
        secondmentDescription='$secondmentDescription',secondmentDestination='$secondmentDestination',secondmentType='$secondmentType',
        secondmentDuration='$secondmentDuration',startDate='$startDate',endDate='$endDate',secondmentFile='$secondmentFile',secondmentNotes='$secondmentNotes'
        WHERE Secondment_id='$id'");
        if (isset($_POST['updateSecondmentBtn'])) {

            header("location:secondmentDetails.php?id=$id");
        }
    } else {
        $Details = mysqli_query($bis, "UPDATE p74_secondment_data SET 
            secondmentDescription='$secondmentDescription',secondmentDestination='$secondmentDestination',secondmentType='$secondmentType',
            secondmentDuration='$secondmentDuration',startDate='$startDate',endDate='$endDate',secondmentNotes='$secondmentNotes'
            WHERE Secondment_id='$id'");
        if (isset($_POST['updateSecondmentBtn'])) {

            header("location:secondmentDetails.php?id=$id");
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
                        <label for="doctorNameInput" class="mainText fw-bold fs-4">اســـــــم العضـــــــو :</label>
                    </div>
                    <div class="col-md-10">
                        <input name="doctorNameInput" id="doctorNameInput" value="<?php if (isset($_GET['id'])) {
                                                                                        echo $Doctor_ar_Name;
                                                                                    } ?>" readonly class="form-control fs-4"></input>
                    </div>
                </div>
                <div class="row my-2 align-items-center">
                    <div class="col-md-2 text-center">
                        <label for="secondmentDescription" class="mainText fw-bold fs-4"> الإعــــــــــــــــــــارة :</label>
                    </div>
                    <div class="col-md-10">
                        <input type="text" class="form-control" value="<?php if (isset($_GET['id'])) {
                                                                            echo $secondmentDescription;
                                                                        } ?>" name="secondmentDescription" id="secondmentDescription" required>
                    </div>
                </div>
                <div class="row my-2 align-items-center">
                    <div class="col-md-2 text-center">
                        <label for="secondmentDestination" class="mainText fw-bold fs-4">جهــــة الإعــــــــــارة :</label>
                    </div>
                    <div class="col-md-10">
                        <input type="text" class="form-control" value="<?php if (isset($_GET['id'])) {
                                                                            echo $secondmentDestination;
                                                                        } ?>" name="secondmentDestination" id="secondmentDestination" required>
                    </div>
                </div>
                <div class="row my-2 align-items-center">
                    <div class="col-md-2 text-center">
                        <label class="mainText fw-bold fs-4">نــــوع الإعـــــــــارة :</label>
                    </div>

                    <div class="col-md-1">
                        <input type="radio" id="inside" name="secondmentType" value="inside" class="form-check-input" <?php if ($secondmentType == "inside") {
                                                                                                                            echo "checked";
                                                                                                                        } ?> required>
                        <label for="inside" class="fw-bold fs-4 px-1">داخلى </label>
                    </div>

                    <div class="col-md-1">
                        <input type="radio" id="outside" name="secondmentType" value="outside" class="form-check-input" <?php if ($secondmentType == "outside") {
                                                                                                                            echo "checked";
                                                                                                                        } ?> required>
                        <label for="outside" class="fw-bold fs-4 px-1">خارجى </label>
                    </div>
                </div>
                <div class="row my-2 align-items-center">
                    <div class="col-md-2 text-center">
                        <label for="secondmentDuration" class="mainText fw-bold fs-4">المـــــــــــــــــــــــدة :</label>
                    </div>
                    <div class="col-md-4">
                        <input type="text" class="form-control" value="<?php if (isset($_GET['id'])) {
                                                                            echo $secondmentDuration;
                                                                        } ?>" name="secondmentDuration" id="secondmentDuration" required>
                    </div>
                    <div class="col-md-1 text-center">
                        <label for="startDate" class="mainText fw-bold fs-4">مــن :</label>
                    </div>
                    <div class="col-md-2">
                        <input type="text" class="form-control" value="<?php if (isset($_GET['id'])) {
                                                                            echo $startDate;
                                                                        } ?>" name="startDate" id="startDate" required>
                    </div>
                    <div class="col-md-1 text-center">
                        <label for="endDate" class="mainText fw-bold fs-4">إلــى :</label>
                    </div>
                    <div class="col-md-2">
                        <input type="text" class="form-control" value="<?php if (isset($_GET['id'])) {
                                                                            echo $endDate;
                                                                        } ?>" name="endDate" id="endDate" required>
                    </div>
                </div>
                <div class="row my-2">
                    <div class="col-md-2 text-center">
                        <label for="secondmentFile" class="form-label mainText fw-bold fs-4"> إرفاق ملف الإعارة :</label>
                    </div>
                    <div class="col-md-2">
                        <div class="fs-4 w-100 chooseSecondmentFileBtn text-center p-1 rounded-2">ارفق المــلــف </div>
                    </div>
                    <div class="col-md-8 align-self-center">
                        <input class="form-control d-none" type="file" id="secondmentFile" name="secondmentFile" required>
                        <p class="selectedSecondmentFile fs-4"><?php if (isset($_GET['id'])) {
                                                                    echo $secondmentFile;
                                                                } ?></p>
                    </div>
                </div>
                <div class="row my-2">
                    <div class="col-md-2 text-center">
                        <label for="secondmentNotes" class="mainText fw-bold fs-4">ملاحظـــــــــــــات :</label>
                    </div>
                    <div class="col-md-10">
                        <textarea name="secondmentNotes" id="secondmentNotes" rows="5" class="form-control fs-4" required><?php if (isset($_GET['id'])) {
                                                                                                                        echo $secondmentNotes;
                                                                                                                    } ?></textarea>
                    </div>
                </div>
                <div class="row my-2 justify-content-end">
                    <div class="col-md-2">
                        <button type="submit" class="updateSecondmentBtn rounded-pill border-0 w-100 my-3" id="updateSecondmentBtn" name="updateSecondmentBtn">تعديــل</button>
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