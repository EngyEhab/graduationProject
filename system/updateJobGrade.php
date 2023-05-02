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

    <form action="" method="">
        <div class="container my-5">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <select name="memberSelected" class="form-select fs-5 border-0 shadow rounded-pill" id="memberSelection">
                        <option selected value="">اختر العضو</option>
                        <option value="mohamed">محمد عبد السلام</option>
                    </select>
                    <!-- <input list="memberSelection" class="form-control rounded-pill border-0 shadow px-3 fs-5" placeholder="اسم العضو" />
                    <datalist id="memberSelection">
                        <option value="محمد عبد السلام" class="fs-5 text-center"> -->
                </div>
            </div>
        </div>
        <div class="w-75 mx-auto m-5">
            <div class="container dataContainer p-3">
                <div class="row my-2">
                    <div class="col-md-2 text-center">
                        <label for="jobGrade" class="mainText fw-bold fs-4">الدرجــــة الوظيفيــــة الحاليــة  :</label>
                    </div>
                    <div class="col-md-10">
                        <textarea name="jobGrade" id="jobGrade" rows="5" class="form-control fs-4"></textarea>
                    </div>
                </div>
                <div class="row my-2 justify-content-end">
                    <div class="col-md-2">
                        <button type="submit" class="updateJobGrade rounded-pill border-0 w-100 my-3"  id="updateJobGrade" name="updateJobGrade">تحديث</button>
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