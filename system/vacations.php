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

    <!-- start search and add member button -->
    <div class="container-fluid mt-3">
        <div class="row align-items-center justify-content-center">
            <div class="col-md-2">
                <div class="addVacation">
                    <a href="addVacation.php" class="text-decoration-none text-white">
                        <button class="addVacationBtn rounded-pill w-100 border-0" id="addVacationBtn">إضافة أجـــازة </button>
                    </a>   
                </div>
            </div>
            <div class="col-md-6">
                <div class="search">
                    <form action="" method="" id="searchForm">
                        <input type="text" class="searchField form-control w-100 rounded-pill border-0 px-4" name="search" placeholder="بحث...">
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- end search and add member button -->

    <div class="container my-5">
        <div class="row gy-5 gx-0 justify-content-center " id="members">
            <div class="col-md-3">
                <a href="vacationDetails.php?id=" class="text-decoration-none">
                <div class="member rounded-3 bg-white w-75 p-3 text-center mx-auto border-0">
                    <div class="memberImage w-50 rounded-circle mx-auto">
                        <img src="../images/1.jpg" class="rounded-circle w-100" alt="">
                    </div>
                    <h3 class="mainTitle pt-2">محمد عبد السلام</h3>
                </div>
                </a>
            </div>

            <div class="col-md-3">
                <a href="vacationDetails.php?id=" class="text-decoration-none">
                <div class="member rounded-3 bg-white w-75 p-3 text-center mx-auto border-0">
                    <div class="memberImage w-50 rounded-circle mx-auto">
                        <img src="../images/1.jpg" class="rounded-circle w-100" alt="">
                    </div>
                    <h3 class="mainTitle pt-2">محمد عبد السلام</h3>
                </div>
                </a>
            </div>
        </div>
    </div>


    <div class="fixedFooter position-fixed bottom-0 start-0 end-0 z-1">
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