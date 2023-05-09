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
                            <h4 class="mainText fw-bold">اســــــــــم العضــــــــــو  :</h4>
                        </div>
                        <div class="col-md-9">
                            <p class="fs-4"></p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            <h4 class="mainText fw-bold"> الأجـــــــــــــــــــــــــــازة  :</h4>
                        </div>
                        <div class="col-md-9">
                            <p class="fs-4"></p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            <h4 class="mainText fw-bold">المـــــــــــــــــــــــــــــــدة  :</h4>
                        </div>
                        <div class="col-md-2">
                            <h4 class="mainText fw-bold">من  :</h4>
                        </div>
                        <div class="col-md-2">
                            <p class="fs-4"></p>
                        </div>
                        <div class="col-md-2">
                            <h4 class="mainText fw-bold">إلى  :</h4>
                        </div>
                        <div class="col-md-2">
                            <p class="fs-4"></p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            <h4 class="mainText fw-bold"> الســــــــــــــــــــــــــبب  :</h4>
                        </div>
                        <div class="col-md-9">
                            <p class="fs-4"></p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            <h4 class="mainText fw-bold">الملاحظــــــــــــــــــــات  :</h4>
                        </div>
                        <div class="col-md-9">
                            <p class="fs-4"> </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="memberPhoto d-flex justify-content-center align-items-center p-5">
                    <img src="../images/1.jpg" class="w-50 rounded-circle shadow" alt="">
                </div>
                <h1 class="text-center mainTitle">محمد عبد السلام</h1>
            </div>
        </div>
    </div>
    <div class="container mt-3 mb-5">
        <div class="row justify-content-end">
            <div class="col-md-2">
                <a href="updateVacationData.php?id=">
                    <button id="updateBtn" name="updateBtn" class="btn btn-warning w-100 rounded-pill fw-bold fs-4 border-2 shadow">تعديــل</button>
                </a>
            </div>
            <div class="col-md-2">
                <a href="deleteVacationData.php?id=">
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