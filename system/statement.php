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
<body class="body statementPage">
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

    <!-- start search -->
    <div class="container-fluid mt-5">
        <div class="row align-items-center justify-content-center">
            <div class="col-md-6">
                <div class="search">
                    <form action="">
                        <input type="text" class="searchField form-control w-100 rounded-pill border-0 px-4" name="search" placeholder="بحث...">
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- end search -->

    <div class="container statement p-5 mt-5" id="statement">
        <div class="row align-items-end">
            <div class="col-md-4">
                <div class="universityData text-center" >
                    <img src="../images/Facultylogo.jpg" class="w-25" alt="facultyLogo">
                    <h3 class="pt-1 mb-0">Helwan University</h3>
                    <p>*******************</p>
                </div>
            </div>
            <div class="col-md-4 align-self-center">
                <div class="text-center">
                    <h1>بيـان حالـة</h1>
                </div>
            </div>
            <div class="col-md-4">
                <div class="text-center">
                    <h3>الإدارة العامة لشئون الأفراد</h3>
                    <h3>و أعضاء هيئة التدريس</h3>
                    <h3>إدارة وثائق الخدمة</h3>
                    <p>*******************</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <p class="fs-3 text-center">نفيد انه بالاطلاع على ملف خدمة سيادته بالجامعة وجد الآتى:</p>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-2">
                <h4 class="text-start"> الإســــــــــــــــــــم :</h4>
            </div>
            <div class="col-md-6">
                <p></p>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-2">
                <h4 class="text-start"> تاريخ الميـــــــــلاد :</h4>
            </div>
            <div class="col-md-6">
                <p></p>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-2">
                <h4 class="text-start"> تاريخ التعييــــــــن :</h4>
            </div>
            <div class="col-md-6">
                <p></p>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-2">
                <h4 class="text-start"> المؤهلات العلميــــة :</h4>
            </div>
            <div class="col-md-6">
                <p></p>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-2">
                <h4 class="text-start">التدرج الوظيفــــى :</h4>
            </div>
            <div class="col-md-6">
                <p></p>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-2">
                <h4 class="text-start">الجـــــــــــــــزاءات :</h4>
            </div>
            <div class="col-md-6">
                <p></p>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-2">
                <h4 class="text-start">الإعـــــــــــــــارات :</h4>
            </div>
            <div class="col-md-6">
                <p></p>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-2">
                <h4 class="text-start"> الأجـازات الخاصــــة :</h4>
            </div>
            <div class="col-md-6">
                <p></p>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-2">
                <h4 class="text-start">البعثــــــــــــــــــات :</h4>
            </div>
            <div class="col-md-6">
                <p></p>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-2">
                <h4 class="text-start">الأجازات الدراسية :</h4>
            </div>
            <div class="col-md-6">
                <p></p>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-2">
                <h4 class="text-start">الإنتدابـــــــــــــــات :</h4>
            </div>
            <div class="col-md-6">
                <p></p>
            </div>
        </div>
            
        <div class="row">
            <div class="col-md-12 text-center fs-3">
                <p class="mb-0">****************************************************************************</p>
            </div>
            <div class="col-md-12 text-center fs-3">
                <p>و قد أعطيت لسيادته هذا البيان بناء على طلبه و ذلك لتقديمه إلى (&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;) ...</p>
            </div>
        </div>
    </div>
    



    <div class="container">
        <div class="row justify-content-end">
            <div class="col-md-2">
                <button id="statementBtn" class="rounded-pill border-0 w-100 my-3">
                    <span>حـفـظ</span>
                    <i class="fa-solid fa-download fa-sm px-1" style="color: #ffffff;"></i>
                </button>
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