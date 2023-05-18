
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


    <form action="" method="" id="displayReportForm" >
        <div class="w-75 mx-auto m-5">
            <div class="container dataContainer p-3 px-5" >
                <div class="row my-3 mt-5 align-items-center justify-content-center">
                    <div class="col-md-2 text-center">
                        <label for="reportAbout" class="mainText fw-bold fs-4 text-nowrap">تقريـــــر عــن   :</label>
                    </div>
                    <div class="col-md-8">
                        <select name="reportAbout" id="reportAbout"  class="form-select fs-4">
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
                        <label for="startDate" class="mainText fw-bold fs-4 text-nowrap">مــن  :</label>
                    </div>
                    <div class="col-md-3">
                        <input type="text" class="form-control" name="startDate" id="startDate">
                    </div>
                    <div class="col-md-1 text-center">
                        <label for="endDate" class="mainText fw-bold fs-4 text-nowrap">إلــى  :</label>
                    </div>
                    <div class="col-md-3">
                        <input type="text" class="form-control" name="endDate" id="endDate">
                    </div>
                </div> 
                <div class="row justify-content-end">
                    <div class="col-md-2 offset-1">
                        <button type="submit" class="displayReport rounded-pill border-0 w-100 my-3"  id="displayReport" name="displayReport">عرض التقرير</button>
                    </div> 
                </div>              
            </div>
        </div>
    </form>

    <div class="container mt-3 d-none" id="displayReportSearch">
        <div class="row align-items-center justify-content-center">
            <div class="col-md-2">
                <div>
                    <button class="anotherReport rounded-pill w-100 border-0" id="anotherReport">عرض تقرير آخر</button>
                </div>
            </div>
            <div class="col-md-6">
                <div class="search position-relative">
                    <form action="" method="post" id="searchForm">
                        <input type="text" class="searchField form-control w-100 rounded-pill border-0" name="search" placeholder="بحث...">
                        <button type="submit" class="searchBtn rounded-start-pill">
                            <i class="fa-solid fa-magnifying-glass fa-rotate-90 fa-lg" style="color: #fff;"></i>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="container my-5 d-none" id="displayReportTable">
        <div class="row justify-content-center">
            <div class="col-md-9">
                <table class="table text-center fs-4 bg-white shadow rounded-2">
                    <thead class="mainText table-light">
                        <tr>
                            <th>كود العضو</th>
                            <th>اسم العضو</th>
                            <th> القسم العلمى</th>
                            <th>الدرجة الوظيفية الحالية</th>
                            <th>عرض التفاصيل</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td>
                                <a href="#">
                                    <button class="border-0 rounded-pill w-50 fs-4 tableDisplayBtn">عـرض</button>
                                </a>
                            </td>
                        </tr>      
                    </tbody>
                </table>
            </div>
        </div>
    </div>
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