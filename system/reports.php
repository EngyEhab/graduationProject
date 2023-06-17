<?php
include "../Connections/syscon.php";

if (isset($_POST['displayReport'])) {
    $reportAbout = $_POST['reportAbout'];
    $startDate = $_POST['startDate'];
    $endDate = $_POST['endDate'];
    // header("location:../system/reportTable.php");
    header("location:../system/reportTable.php?reportAbout=$_POST[reportAbout]&startDate=$_POST[startDate]&endDate=$_POST[endDate]");
}
?>
<!DOCTYPE html>
<html lang="en">

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


    <form action="" method="post" id="displayReportForm">
        <div class="w-75 mx-auto m-5">
            <div class="container dataContainer p-3 px-5">
                <div class="row my-3 mt-5 align-items-center justify-content-center">
                    <div class="col-md-2 text-center">
                        <label for="reportAbout" class="mainText fw-bold fs-4 text-nowrap">تقريـــــر عــن :</label>
                    </div>
                    <div class="col-md-8">
                        <select name="reportAbout" id="reportAbout" class="form-select fs-4" required>
                            <option value="">اختر نوع التقرير</option>
                            <option value="penalties">العقوبات أو الجزاءات</option>
                            <option value="vacations">الأجازات</option>
                            <option value="secondments">الإعارات</option>
                        </select>
                    </div>
                </div>
                <div class="row my-3 align-items-center justify-content-center">
                    <div class="col-md-2 text-center">
                        <label for="reportDuration" class="mainText fw-bold fs-4 text-nowrap">الفتــرة الزمنيــة :</label>
                    </div>
                    <div class="col-md-1 text-center">
                        <label for="startDate" class="mainText fw-bold fs-4 text-nowrap">مــن :</label>
                    </div>
                    <div class="col-md-3">
                        <input type="text" class="form-control" name="startDate" id="startDate" required>
                    </div>
                    <div class="col-md-1 text-center">
                        <label for="endDate" class="mainText fw-bold fs-4 text-nowrap">إلــى :</label>
                    </div>
                    <div class="col-md-3">
                        <input type="text" class="form-control" name="endDate" id="endDate" required>
                    </div>
                </div>
                <div class="row justify-content-end">
                    <div class="col-md-2 offset-1">
                        <button type="submit" class="displayReport rounded-pill border-0 w-100 my-3" id="displayReport" name="displayReport">عرض التقرير</button>
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