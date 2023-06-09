<?php
include "../Connections/syscon.php";
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $myquery = "SELECT * FROM doctors_account 
    INNER JOIN  p74_vacation_data  
    ON doctors_account.DoctorCode=p74_vacation_data.doctorCodeInput WHERE Vacation_id= '$id'";
    $results = mysqli_query($bis, $myquery);
    while ($row = mysqli_fetch_array($results)) {
        $Doctor_image = $row['Doctor_image'];
        $Doctor_ar_Name = $row["Doctor_ar_Name"];
    }

    mysqli_select_db($bis, $database_bis);
    $myquery = "SELECT * FROM  p74_vacation_data 
                INNER JOIN  users  
                ON p74_vacation_data.added_by=users.user_id
                WHERE Vacation_id= '$id'";
    $result = $bis->query($myquery);
    if ($result->num_rows === 1) {
        $row = $result->fetch_assoc();

        $Vacation_id = $row['Vacation_id'];
        $doctorCodeInput = $row['doctorCodeInput'];
        $vacationDescription = $row["vacationDescription"];
        $startDate = $row["startDate"];
        $endDate = $row["endDate"];
        $vacationReason = $row["vacationReason"];
        $vacationFile = $row["vacationFile"];
        $vacationNotes = $row["vacationNotes"];
        $vacationDuration = $row["vacationDuration"];
        $user_ar_name = $row["user_ar_name"];
        $added_date = $row["added_date"];
    }
}

?>
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

    <!-- start delete Modal -->
    <div class="modal fade" id="deleteVacationModal" data-bs-backdrop="static" data-bs-keyboard="false">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
                    <p class="fs-3 mainTitle fw-bold">هل بالفعل تريد حذف الأجازة الخاصة بالعضو:</p>
                    <span class="fs-3 mainText"><?php echo $Doctor_ar_Name ?></span>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary fs-4" data-bs-dismiss="modal">الغاء</button>
                    <a href="deleteVacationData.php?id=<?php echo $Vacation_id; ?>">
                        <button id="deleteBtn" name="deleteBtn" class="btn btn-danger fs-4">حـــذف</button>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- end delete Modal -->

    <div class="container bg-white p-5 shadow mt-5">
        <div class="row align-items-center">
            <div class="col-md-6">
                <div class="vacationData p-2">
                    <div class="row">
                        <div class="col-md-3">
                            <h4 class="mainText fw-bold">اســــــــــم العضــــــــــو :</h4>
                        </div>
                        <div class="col-md-9">
                            <p class="fs-4"><?php echo $Doctor_ar_Name; ?></p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            <h4 class="mainText fw-bold"> الأجـــــــــــــــــــــــــــازة :</h4>
                        </div>
                        <div class="col-md-9">
                            <p class="fs-4"><?php echo $vacationDescription; ?></p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            <h4 class="mainText fw-bold">المـــــــــــــــــــــــــــــــدة :</h4>
                        </div>
                        <div class="col-md-2">
                            <p class="fs-4"><?php echo $vacationDuration; ?></p>
                        </div>
                        <div class="col-md-1">
                            <h4 class="mainText fw-bold">من :</h4>
                        </div>
                        <div class="col-md-2">
                            <p class="fs-4"><?php echo $startDate; ?></p>
                        </div>
                        <div class="col-md-1">
                            <h4 class="mainText fw-bold">إلى :</h4>
                        </div>
                        <div class="col-md-2">
                            <p class="fs-4"><?php echo $endDate; ?></p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            <h4 class="mainText fw-bold"> الســــــــــــــــــــــــــبب :</h4>
                        </div>
                        <div class="col-md-9">
                            <p class="fs-4"><?php echo $vacationReason; ?></p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            <h4 class="mainText fw-bold"> تاريــــــــــخ الإضافــــــة :</h4>
                        </div>
                        <div class="col-md-9">
                            <p class="fs-4"><?php echo $added_date;?></p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            <h4 class="mainText fw-bold">إضافـــــــة بواسطـــــــة :</h4>
                        </div>
                        <div class="col-md-9">
                            <p class="fs-4"><?php echo $user_ar_name;?></p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            <h4 class="mainText fw-bold">الملاحظــــــــــــــــــــات :</h4>
                        </div>
                        <div class="col-md-9">
                            <p class="fs-4"><?php echo $vacationNotes; ?></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 d-flex justify-content-center align-items-center pb-5">
                <div class="memberPhoto">
                    <img src="../images/members/<?php echo $Doctor_image; ?>" class="w-100 h-100 ratio-1x1 rounded-circle shadow" alt="">
                    <h1 class="text-center mainTitle pt-3"><?php echo $Doctor_ar_Name; ?></h1>
                </div>
            </div>
        </div>
    </div>
    <div class="container mt-3 mb-5">
        <div class="row justify-content-end">
            <div class="col-md-2">
                <a href="updateVacationData.php?id=<?php echo $Vacation_id; ?>">
                    <button id="updateBtn" name="updateBtn" class="btn btn-warning w-100 rounded-pill fw-bold fs-4 border-2 shadow">تعديــل</button>
                </a>
            </div>
            <div class="col-md-2">
                <button id="deleteBtn" data-bs-toggle="modal" data-bs-target="#deleteVacationModal" name="deleteBtn" class="btn btn-danger w-100 rounded-pill fw-bold fs-4 border-2 shadow">حـــذف</button>
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