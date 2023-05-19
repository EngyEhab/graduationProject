
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


    <!-- start button to up -->
    <button class="btnToUp border-0" id="btnUp">
        <i class="fa-solid fa-circle-arrow-up fa-xl" style="color: #ffffff;"></i>
    </button>
    <!-- end button to up -->

    
    <div class="container">
        <div class="row my-5">
            <div class="col">
                <a href="dashboard.php" class="text-decoration-none text-white function-link">
                    <div class="function text-center">
                        <i class="fa-solid fa-desktop fa-2xl mb-3"></i>
                        <h3>لوحة التحكم</h3>
                    </div>
                </a>
            </div>
            <div class="col">
                <a href="users.php" class="text-decoration-none text-white">
                    <div class="function text-center">
                        <i class="fa-solid fa-users fa-2xl mb-3"></i>
                        <h3>المستخدمون</h3>
                    </div>
                </a>
            </div>
            <div class="col">
                <a href="addMember.php" class="text-decoration-none text-white">
                    <div class="function text-center">
                        <i class="fa-solid fa-user-plus fa-2xl mb-3"></i> 
                        <h3>إضافة عضو جديد</h3>
                    </div>
                </a>
            </div>
            <div class="col">
                <a href="completeData.php" class="text-decoration-none text-white">
                    <div class="function text-center">
                        <i class="fa-solid fa-pen-to-square fa-2xl mb-3"></i> 
                        <h3>استكمال بيانات</h3>
                    </div>
                </a>
            </div>
            <div class="col">
                <a href="updateJobGrade.php" class="text-decoration-none text-white">
                    <div class="function text-center">
                        <i class="fa-solid fa-user-tie fa-2xl mb-3"></i>
                        <h3>تحديث الدرجة الوظيفية</h3>
                    </div>
                </a>
            </div>
        </div>
        <div class="row my-5">
            <div class="col">
                <a href="addPenalty.php" class="text-decoration-none text-white">
                    <div class="function text-center">
                        <i class="fa-solid fa-scale-balanced fa-2xl mb-3"></i>
                        <h3>إضافة العقوبات أو الجزاءات</h3>
                    </div>
                </a>
            </div>
            <div class="col">
                <a href="addVacation.php" class="text-decoration-none text-white">
                    <div class="function text-center">
                        <i class="fa-solid fa-house-user fa-2xl mb-3"></i>
                        <h3>إضافة الأجازات</h3>
                    </div>
                </a>
            </div>
            <div class="col">
                <a href="addSecondment.php" class="text-decoration-none text-white">
                    <div class="function text-center">
                        <i class="fa-solid fa-plane-up fa-2xl mb-3"></i>
                        <h3>إضافة الإعارات</h3>
                    </div>
                </a>
            </div>
            <div class="col">
                <a href="statement.php" class="text-decoration-none text-white">
                    <div class="function text-center">
                        <i class="fa-solid fa-clipboard-user fa-2xl mb-3"></i>
                        <h3>عرض بيان حالة شامل</h3>
                    </div>
                </a>
            </div>
            <div class="col">
                <a href="reports.php" class="text-decoration-none text-white">
                    <div class="function text-center">
                        <i class="fa-solid fa-file-lines fa-2xl mb-3"></i>
                        <h3>تقارير</h3>
                    </div>
                </a>
            </div>
        </div>
    </div>

    <div class="fixedFooter position-fixed bottom-0 start-0 end-0">
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