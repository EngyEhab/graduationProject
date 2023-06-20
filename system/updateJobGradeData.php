<?php
include "../Connections/syscon.php";
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
                        <input name="doctorNameInput" id="doctorNameInput" value="" readonly class="form-control fs-4"></input>
                    </div>
                </div>
                <div class="row my-2 align-items-center">
                    <div class="col-md-2 text-center">
                        <label for="doctorJobNameInput" class="mainText fw-bold fs-4 text-nowrap"> الدرجــة الوظيفيــة الحاليـــــة :</label>
                    </div>
                    <div class="col-md-10">
                        <input name="doctorJobNameInput" id="doctorJobNameInput" value="" readonly class="form-control fs-4"></input>
                    </div>
                </div>
                <div class="row my-2 align-items-center">
                    <div class="col-md-2 text-center">
                        <label for="jobGrade" class="mainText fw-bold fs-4">التدرج الوظيفـــــــــــــــــــى :</label>
                    </div>
                    <div class="col-md-10">
                        <textarea  class="form-control" value="" name="jobGrade" id="jobGrade" required></textarea>
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