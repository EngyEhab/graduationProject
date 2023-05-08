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
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="search">
                    <form action="" method="" id="searchForm">
                        <input type="text" class="searchField form-control w-100 rounded-pill border-0 px-4" name="updateJobGradeSearch" placeholder="بحث...">
                    </form>
                </div>
            </div>
        </div>
    </div>
    
    
    <div class="container mb-5">
        <div class="row justify-content-center">
            <div class="col-md-9">
                <table class="table text-center fs-4 bg-white shadow rounded-2">
                    <thead class="mainText table-light">
                        <tr>
                            <th>كود العضو</th>
                            <th>اسم العضو</th>
                            <th>الدرجة الوظيفية الحالية</th>
                            <th>تحديث الدرجة الوظيفية</th>
                        </tr>
                    </thead>   
                    <tbody>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td><button doctorCode="" doctorName="" class="border-0 rounded-pill w-50 fs-4 tableUpdateJobGradeBtn">تحديث</button></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td><button doctorCode="" doctorName="" class="border-0 rounded-pill w-50 fs-4 tableUpdateJobGradeBtn">تحديث</button></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <form action="" method="" id="updateJobGradeForm" class="d-none">
        <div class="w-75 mx-auto m-5">
            <div class="container dataContainer p-3">
                <div class="row my-2 align-items-center">
                    <div class="col-md-2 text-center">
                        <label for="doctorCodeInput" class="mainText fw-bold fs-4">كــــــود العضـــــــو  :</label>
                    </div>
                    <div class="col-md-10">
                        <input name="doctorCodeInput" id="doctorCodeInput" readonly class="form-control fs-4"></input>
                    </div>
                </div> 
                <div class="row my-2 align-items-center">
                    <div class="col-md-2 text-center">
                        <label for="doctorNameInput" class="mainText fw-bold fs-4">اســـــــم العضـــــــو  :</label>
                    </div>
                    <div class="col-md-10">
                        <input name="doctorNameInput" id="doctorNameInput" readonly class="form-control fs-4"></input>
                    </div>
                </div> 
                <div class="row my-2 align-items-center">
                    <div class="col-md-2 text-center">
                        <label for="jobGrade" class="mainText fw-bold fs-4">تحديــث الدرجــة الوظيفيــــة   :</label>
                    </div>
                    <div class="col-md-10">
                        <select name="doctor_jobs" class="form-select" id="job">
                            <option selected value=""></option>
                            <option value="Professor">استاذ</option>
                            <option value="Associate Professor">استاذ مساعد</option>
                            <option value="Lecturer">مدرس</option>
                            <option value="lecturer Assistant">مدرس مساعد</option>
                            <option value="Teaching Assistant">معيد</option>
                            <option value="-">استاذ متفرغ</option>
                            <option value="-">استاذ مساعد متفرغ</option>
                            <option value="-">مدرس متفرغ</option>
                        </select>
                    </div>
                </div>
                <div class="row my-2 justify-content-end">
                    <div class="col-md-2">
                        <button type="submit" class="updateJobGradeBtn rounded-pill border-0 w-100 my-3"  id="updateJobGradeBtn" name="updateJobGradeBtn">تحديــث</button>
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