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
    

    <form action="" method="">
        <div class="w-75 mx-auto m-5">
            <h3 class="mainTitle text-end p-2">تحديث بيانات النظام</h3>
            <div class="container dataContainer mb-5 p-3">
                <div class="row my-2 align-items-center">
                    <div class="col-md-2 text-center">
                        <label for="universityName" class="mainText fw-bold fs-4 text-nowrap"> الجــامعـــــــــــــــــــــــــــــــة  :</label>
                    </div>
                    <div class="col-md-10">
                        <input type="text" name="universityName" id="universityName" class="form-control fs-4"></input>
                    </div>
                </div> 
                <div class="row my-2 align-items-center">
                    <div class="col-md-2 text-center">
                        <label for="facultyName" class="mainText fw-bold fs-4 text-nowrap"> الكليــــــــــــــــــــــــــــــــــة  :</label>
                    </div>
                    <div class="col-md-10">
                        <input type="text" name="facultyName" id="facultyName" class="form-control fs-4"></input>
                    </div>
                </div> 

                <div class="row my-2 align-items-center">
                    <div class="col-md-2 text-center">
                        <label for="facultyLogo" class="mainText fw-bold fs-4 text-nowrap"> لوجــــــــــــو الكليـــــــــــــة  :</label>
                    </div>
                    <div class="col-md-10">
                        <input type="file" name="facultyLogo" accept="image/*" id="facultyLogo" class="form-control fs-4"></input>
                    </div>
                </div>

                <div class="row my-2 align-items-center">
                    <div class="col-md-2 text-center">
                        <label for="programName" class="mainText fw-bold fs-4 text-nowrap"> البرنامــــــــــــــــــــــــــــــــج :</label>
                    </div>
                    <div class="col-md-10">
                        <input type="text" class="form-control" name="programName" id="programName">
                    </div>
                </div>

                <div class="row my-2 align-items-center">
                    <div class="col-md-2 text-center">
                        <label for="programLogo" class="mainText fw-bold fs-4 text-nowrap"> لوجــــــــــــو البرنامـــــــــــج  :</label>
                    </div>
                    <div class="col-md-10">
                        <input type="file" name="programLogo" accept="image/*" id="programLogo" class="form-control fs-4"></input>
                    </div>
                </div>

                <div class="row my-2 align-items-center">
                    <div class="col-md-2 text-center">
                        <label for="facultyDean" class="mainText fw-bold fs-4 text-nowrap"> عميــــــد الكليـــــــــــــــــــــة :</label>
                    </div>
                    <div class="col-md-10">
                        <input type="text" class="form-control" name="facultyDean" id="facultyDean">
                    </div>
                </div>

                <div class="row my-2 align-items-center">
                    <div class="col-md-2 text-center">
                        <label for="postGradViceDean" class="mainText fw-bold fs-4">وكيل الكلية لشئون الدراسات العليا والبحوث :</label>
                    </div>
                    <div class="col-md-10">
                        <input type="text" class="form-control" name="postGradViceDean" id="postGradViceDean">
                    </div>
                </div>

                <div class="row my-2 align-items-center">
                    <div class="col-md-2 text-center">
                        <label for="studentAffairsViceDean" class="mainText fw-bold fs-4">وكيل الكلية لشئون التعليم والطلاب :</label>
                    </div>
                    <div class="col-md-10">
                        <input type="text" class="form-control" name="studentAffairsViceDean" id="studentAffairsViceDean">
                    </div>
                </div>

                <div class="row my-2 align-items-center">
                    <div class="col-md-2 text-center">
                        <label for="programCoordinator" class="mainText fw-bold fs-4 text-nowrap"> منســــــق البرنامـــــــــــج :</label>
                    </div>
                    <div class="col-md-10">
                        <input type="text" class="form-control" name="programCoordinator" id="programCoordinator">
                    </div>
                </div>


                <div class="row my-2 justify-content-end">
                    <div class="col-md-2">
                        <button type="submit" class="updateSystemDataBtn rounded-pill border-0 w-100 my-3"  id="submit" name="submit">تحديث</button>
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