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
    
    
    <form action="" method="" id="updateVacationForm" class="mb-5">
        <div class="w-75 mx-auto m-5">
            <div class="container dataContainer p-3">
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
                        <label for="secondmentDescription" class="mainText fw-bold fs-4"> الإعــــــــــــــــــــارة :</label>
                    </div>
                    <div class="col-md-10">
                        <input type="text" class="form-control" name="secondmentDescription" id="secondmentDescription">
                    </div>
                </div>
                <div class="row my-2 align-items-center">
                    <div class="col-md-2 text-center">
                        <label for="secondmentDestination" class="mainText fw-bold fs-4">جهــــة الإعــــــــــارة :</label>
                    </div>
                    <div class="col-md-10">
                        <input type="text" class="form-control" name="secondmentDestination" id="secondmentDestination">
                    </div>
                </div>
                <div class="row my-2 align-items-center">
                    <div class="col-md-2 text-center">
                        <label class="mainText fw-bold fs-4">نــــوع الإعـــــــــارة  :</label>
                    </div>
                    
                    <div class="col-md-1">
                        <input type="radio" id="inside" name="secondmentType" value="inside" class="form-check-input">
                        <label for="inside" class="fw-bold fs-4 px-1">داخلى </label>
                    </div>
                    
                    <div class="col-md-1">
                        <input type="radio" id="outside" name="secondmentType" value="outside" class="form-check-input">
                        <label for="outside" class="fw-bold fs-4 px-1">خارجى </label>
                    </div>
                </div>
                <div class="row my-2 align-items-center">
                    <div class="col-md-2 text-center">
                        <label for="secondmentDuration" class="mainText fw-bold fs-4">المـــــــــــــــــــــــدة  :</label>
                    </div>
                    <div class="col-md-2">
                        <input type="number" min="1" class="form-control" name="secondmentDuration" id="secondmentDuration">
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
                        <label for="secondmentFile" class="form-label mainText fw-bold fs-4"> إرفاق ملف الإعارة :</label>                   
                    </div>
                    <div class="col-md-2">
                        <div class="fs-4 w-100 chooseSecondmentFileBtn text-center p-1 rounded-2">ارفق المــلــف </div>
                    </div>
                    <div class="col-md-8 align-self-center">
                        <input class="form-control d-none" type="file" id="secondmentFile" name="secondmentFile">  
                        <p class="selectedSecondmentFile fs-4"></p>                  
                    </div>
                </div>
                <div class="row my-2">
                    <div class="col-md-2 text-center">
                        <label for="secondmentNotes" class="mainText fw-bold fs-4">ملاحظـــــــــــــات  :</label>
                    </div>
                    <div class="col-md-10">
                        <textarea name="secondmentNotes" id="secondmentNotes" rows="5" class="form-control fs-4"></textarea>
                    </div>
                </div>
                <div class="row my-2 justify-content-end">
                    <div class="col-md-2">
                        <button type="submit" class="updateSecondmentBtn rounded-pill border-0 w-100 my-3"  id="updateSecondmentBtn" name="update">تعديــل</button>
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