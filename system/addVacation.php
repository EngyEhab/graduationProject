<?php
include "../Connections/syscon.php";
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


    <div class="container my-5">
        <div class="row justify-content-center">
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

    <div class="container mb-5">
        <div class="row justify-content-center">
            <div class="col-md-9">
                <table class="table text-center fs-4 bg-white shadow rounded-2">
                    <thead class="mainText table-light">
                        <tr>
                            <th>كود العضو</th>
                            <th>اسم العضو</th>
                            <th>الدرجة الوظيفية الحالية</th>
                            <th>إضافة الأجازات</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        if (isset($_POST['search'])) {
                            $st = $_POST['search'];
                            $myquery = "SELECT * FROM doctors_account 
                    INNER JOIN  doctor_jobs  
                    ON doctors_account.Doctor_job_id=doctor_jobs.Doctor_job_id WHERE Doctor_ar_Name like '%$st%'";
                            $results = mysqli_query($bis, $myquery);
                            while ($row = mysqli_fetch_array($results)) {
                        ?>
                                <tr>
                                    <td><?php echo $row['DoctorCode']; ?></td>
                                    <td><?php echo $row['Doctor_ar_Name'] ?></td>
                                    <td><?php echo $row['Doctor_job_ar_name'] ?></td>
                                    <td><button doctorCode="<?php echo $row['DoctorCode']; ?>" doctorName="<?php echo $row['Doctor_ar_Name'] ?>" data-bs-toggle="modal" data-bs-target="#addVacationModal" class="border-0 rounded-pill w-50 fs-4 tableAddVacationBtn">إضافة </button></td>
                                </tr>
                            <?php }
                        } else {
                            $myquery = "SELECT * FROM doctors_account 
                        INNER JOIN  doctor_jobs  
                        ON doctors_account.Doctor_job_id=doctor_jobs.Doctor_job_id";
                            $results = mysqli_query($bis, $myquery);
                            while ($row = mysqli_fetch_array($results)) { ?>
                                <tr>
                                    <td><?php echo $row['DoctorCode']; ?></td>
                                    <td><?php echo $row['Doctor_ar_Name'] ?></td>
                                    <td><?php echo $row['Doctor_job_ar_name'] ?></td>
                                    <td><button doctorCode="<?php echo $row['DoctorCode']; ?>" doctorName="<?php echo $row['Doctor_ar_Name'] ?>" data-bs-toggle="modal" data-bs-target="#addVacationModal" class="border-0 rounded-pill w-50 fs-4 tableAddVacationBtn">إضافة </button></td>
                                </tr>
                        <?php }
                        } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>


    <form action="addVacation.php" method="post" id="addVacationForm">
        <?php if (isset($_POST['addVacationBtn'])) {
            if (
                isset($_POST['doctorCodeInput']) &&
                isset($_POST['vacationDescription']) && isset($_POST['startDate']) &&
                isset($_POST['endDate']) && isset($_POST['vacationReason']) &&
                isset($_POST['vacationFile']) && isset($_POST['vacationNotes']) && isset($_POST['vacationDuration'])
            ) {
                $doctorCodeInput = $_POST['doctorCodeInput'];
                $vacationDescription = $_POST['vacationDescription'];
                $startDate = $_POST["startDate"];
                $endDate = $_POST['endDate'];
                $vacationReason = $_POST['vacationReason'];
                $vacationFile = $_POST['vacationFile'];
                $vacationNotes = $_POST["vacationNotes"];
                $vacationDuration = $_POST["vacationDuration"];
                $bis = new mysqli($hostname_bis, $username_bis, $password_bis, $database_bis);
                if ($bis->connect_error) {
                    die('Could not connect to the database.');
                } else {
                    $Select = "SELECT * FROM p74_vacation_data ";
                    $Insert = "INSERT INTO p74_vacation_data(doctorCodeInput, vacationDescription, startDate, endDate, vacationReason, vacationFile, vacationNotes, vacationDuration) values(?, ?, ?, ?, ?, ?, ?, ?)";
                    $stmt = $bis->prepare($Select);
                    $stmt = $bis->prepare($Insert);
                    $stmt->bind_param("ssssssss", $doctorCodeInput, $vacationDescription, $startDate, $endDate, $vacationReason, $vacationFile, $vacationNotes, $vacationDuration);
                    if ($stmt->execute()) {
                    } else {
                        echo $stmt->error;
                    }
                }
            }
        } ?>
        <div class="w-75 mx-auto m-5">
            <div class="modal modal-xl fade" id="addVacationModal">
                <div class="modal-dialog  modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-body">
                            <div class="container dataContainer p-3">
                                <div class="row my-2 align-items-center">
                                    <div class="col-md-2 text-center">
                                        <label for="doctorCodeInput" class="mainText fw-bold fs-4 text-nowrap">كــــــود العضـــــــو :</label>
                                    </div>
                                    <div class="col-md-10">
                                        <input name="doctorCodeInput" id="doctorCodeInput" readonly class="form-control fs-4"></input>
                                    </div>
                                </div>
                                <div class="row my-2 align-items-center">
                                    <div class="col-md-2 text-center">
                                        <label for="doctorNameInput" class="mainText fw-bold fs-4 text-nowrap">اســـــــم العضـــــــو :</label>
                                    </div>
                                    <div class="col-md-10">
                                        <input name="doctorNameInput" id="doctorNameInput" readonly class="form-control fs-4"></input>
                                    </div>
                                </div>
                                <div class="row my-2 align-items-center">
                                    <div class="col-md-2 text-center">
                                        <label for="vacationDescription" class="mainText fw-bold fs-4 text-nowrap"> الأجــــــــــــــــــــازة :</label>
                                    </div>
                                    <div class="col-md-10">
                                        <input type="text" class="form-control" name="vacationDescription" id="vacationDescription">
                                    </div>
                                </div>

                                <div class="row my-2 align-items-center">
                                    <div class="col-md-2 text-center">
                                        <label for="vacationDuration" class="mainText fw-bold fs-4 text-nowrap">المـــــــــــــــــــــــدة :</label>
                                    </div>
                                    <div class="col-md-4">
                                        <input type="text" class="form-control" name="vacationDuration" id="vacationDuration">
                                    </div>
                                    <div class="col-md-1 text-center">
                                        <label for="startDate" class="mainText fw-bold fs-4 text-nowrap">مــن :</label>
                                    </div>
                                    <div class="col-md-2">
                                        <input type="text" class="form-control" name="startDate" id="startDate">
                                    </div>
                                    <div class="col-md-1 text-center">
                                        <label for="endDate" class="mainText fw-bold fs-4 text-nowrap">إلــى :</label>
                                    </div>
                                    <div class="col-md-2">
                                        <input type="text" class="form-control" name="endDate" id="endDate">
                                    </div>
                                </div>

                                <div class="row my-2">
                                    <div class="col-md-2 text-center">
                                        <label for="vacationReason" class="mainText fw-bold fs-4 text-nowrap">الســــــــــــــــــبب :</label>
                                    </div>
                                    <div class="col-md-10">
                                        <textarea name="vacationReason" id="vacationReason" rows="2" class="form-control fs-4"></textarea>
                                    </div>
                                </div>

                                <div class="row my-2">
                                    <div class="col-md-2 text-center">
                                        <label for="vacationFile" class="form-label mainText fw-bold fs-4 text-nowrap"> إرفاق ملف الأجازة :</label>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="fs-4 w-100 chooseVacationFileBtn text-center p-1 rounded-2" type="button">ارفق الملــف </div>
                                    </div>
                                    <div class="col-md-8 align-self-center">
                                        <input class="form-control d-none" type="file" id="vacationFile" name="vacationFile">
                                        <p class="selectedVacationFile fs-4"></p>
                                    </div>
                                </div>


                                <div class="row my-2">
                                    <div class="col-md-2 text-center">
                                        <label for="vacationNotes" class="mainText fw-bold fs-4 text-nowrap">ملاحظـــــــــــــات :</label>
                                    </div>
                                    <div class="col-md-10">
                                        <textarea name="vacationNotes" id="vacationNotes" rows="3" class="form-control fs-4"></textarea>
                                    </div>
                                </div>
                                <div class="row my-2 justify-content-end">
                                    <div class="col-md-2">
                                        <button type="submit" class="addVacationBtn rounded-pill border-0 w-100 my-3" id="addVacationBtn" name="addVacationBtn">إضافة</button>
                                    </div>
                                </div>
                            </div>
                        </div>
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