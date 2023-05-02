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
                            <p class="fs-4">محمد عبدالسلام</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            <h4 class="mainText fw-bold">الإسـم باللغـة الإنجليزيـة :</h4>
                        </div>
                        <div class="col-md-9">
                            <p class="fs-4">mohamed abdelsalam</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            <h4 class="mainText fw-bold">الرقـــــــــــم القومـــــــى :</h4>
                        </div>
                        <div class="col-md-9">
                            <p class="fs-4">22222222222222</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            <h4 class="mainText fw-bold">الإيميـــــــل الشخصـــى :</h4>
                        </div>
                        <div class="col-md-9">
                            <p class="fs-4">mohamed@gmail.com</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            <h4 class="mainText fw-bold">الإيميـــــــل الأكاديمـــــى :</h4>
                        </div>
                        <div class="col-md-9">
                            <p class="fs-4">mohamed@gmail.com</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            <h4 class="mainText fw-bold">رقــــــــــــم الهـــــــاتـف :</h4>
                        </div>
                        <div class="col-md-9">
                            <p class="fs-4">01234567898</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            <h4 class="mainText fw-bold">الجامعــــــــــــــــــــــــــة :</h4>
                        </div>
                        <div class="col-md-9">
                            <p class="fs-4">جامعة حلوان</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            <h4 class="mainText fw-bold">الكليــــــــــــــــــــــــــــة :</h4>
                        </div>
                        <div class="col-md-9">
                            <p class="fs-4">كلية التجارة و إدارة الأعمال</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            <h4 class="mainText fw-bold">القســــــــــــــــــــــــــــم :</h4>
                        </div>
                        <div class="col-md-9">
                            <p class="fs-4">قسم نظم المعلومات</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            <h4 class="mainText fw-bold">الدرجة الوظيفية الحالية :</h4>
                        </div>
                        <div class="col-md-9">
                            <p class="fs-4">استاذ</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            <h4 class="mainText fw-bold">الملاحظـــــــــــــــــــات :</h4>
                        </div>
                        <div class="col-md-9">
                            <p class="fs-4">لا يوجد</p>
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
                <button id="updateBtn" class="btn btn-warning w-100 rounded-pill fw-bold fs-4 border-2 shadow">تعديــل</button>
            </div>
            <div class="col-md-2">
                <button id="deleteBtn" class="btn btn-danger w-100 rounded-pill fw-bold fs-4 border-2 shadow">حـــذف</button>
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