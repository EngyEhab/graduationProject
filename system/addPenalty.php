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
    <form action="" method="">
        <div class="container my-5">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <select name="memberSelected" required class="form-select fs-5 border-0 shadow rounded-pill" id="memberSelection">
                        <option selected value="">اختر العضو</option>
                        <option value="mohamed">محمد عبد السلام</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="w-75 mx-auto m-5">
            <div class="container dataContainer p-3">
                <div class="row my-2 align-items-center">
                    <div class="col-md-2 text-center">
                        <label for="penaltyDescription" class="mainText fw-bold fs-4">  الجــــــــــزاء أو العقوبـــــــــة :</label>
                    </div>
                    <div class="col-md-10">
                        <input type="text" class="form-control" name="penaltyDescription" id="penaltyDescription">
                    </div>
                </div>
                

                <div class="row my-2 align-items-center">
                    <div class="col-md-2 text-center">
                        <label for="penaltyDuration" class="mainText fw-bold fs-4">المــــــــــــــــــــــــــــــــــــــدة  :</label>
                    </div>
                    <div class="col-md-2">
                        <input type="number" min="1" class="form-control" name="penaltyDuration" id="penaltyDuration">
                    </div>
                    <div class="col-md-2">
                        <span class="fs-3 fw-bold">سنين/ سنة</span>
                    </div>
                    <div class="col-md-1 text-center">
                        <label for="startDate" class="mainText fw-bold fs-4">مــن  :</label>
                    </div>
                    <div class="col-md-2">
                        <input type="text" class="form-control" name="startDate" id="startDate">
                    </div>
                    <div class="col-md-1 text-center">
                        <label for="endDate" class="mainText fw-bold fs-4">إلــى  :</label>
                    </div>
                    <div class="col-md-2">
                        <input type="text" class="form-control" name="endDate" id="endDate">
                    </div>
                </div>

                <div class="row my-2">
                    <div class="col-md-2 text-center">
                        <label for="penaltyReason" class="mainText fw-bold fs-4">الســـــــــــــــــــــــــــــــــبب  :</label>
                    </div>
                    <div class="col-md-10">
                        <textarea name="penaltyReason" id="penaltyReason" rows="2" class="form-control fs-4"></textarea>
                    </div>
                </div>
                <div class="row my-2">
                    <div class="col-md-2 text-center">
                        <label for="penaltyFile" class="form-label mainText fw-bold fs-4"> إرفاق ملف الجزاء أو العقوبة :</label>  
                    </div>
                    <div class="col-md-2">
                        <div class="fs-4 w-100 choosePenaltyFileBtn text-center p-1 rounded-2">ارفق المــلــف </div>
                    </div>
                    <div class="col-md-8 align-self-center">
                        <input class="form-control d-none" type="file" id="penaltyFile" name="penaltyFile">
                        <p class="selectedPenaltyFile fs-4"></p>                   
                    </div>
                </div>

                <div class="row my-2">
                    <div class="col-md-2 text-center">
                        <label for="penaltyNotes" class="mainText fw-bold fs-4">ملاحظــــــــــــــــــــــــــــات  :</label>
                    </div>
                    <div class="col-md-10">
                        <textarea name="penaltyNotes" id="penaltyNotes" rows="3" class="form-control fs-4"></textarea>
                    </div>
                </div>
                <div class="row my-2 justify-content-end">
                    <div class="col-md-2">
                        <button type="submit" class="addPenaltyBtn rounded-pill border-0 w-100 my-3"  id="addPenaltyBtn" name="addPenaltyBtn">إضافة</button>
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