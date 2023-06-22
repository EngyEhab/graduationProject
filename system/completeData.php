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
                        <button type="submit" name="completesearch" class="searchBtn rounded-start-pill">
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
                            <th>الكود</th>
                            <th>اسم العضو</th>
                            <th>الدرجة الوظيفية الحالية</th>
                            <th>استكمال البيانات</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        if (isset($_POST['completesearch'])) {
                            $cst = $_POST['search'];
                            $myquery = "SELECT * FROM doctors_account 
                                        INNER JOIN  doctor_jobs  
                                        ON doctors_account.Doctor_job_id=doctor_jobs.Doctor_job_id WHERE Doctor_ar_Name like '%$cst%'";
                            $results = mysqli_query($bis, $myquery);
                            while ($row = mysqli_fetch_array($results)) {
                        ?>
                                <tr>
                                    <td><?php echo $row['DoctorCode']; ?></td>
                                    <td><?php echo $row['Doctor_ar_Name'] ?></td>
                                    <td><?php echo $row['Doctor_job_ar_name'] ?></td>
                                    <td>
                                        <a href="jobGradeDetails.php?id=<?php echo $row['DoctorCode']; ?>">
                                            <button name="tableCompletedata" class="border-0 rounded-pill w-50 fs-4 tableCompleteDataBtn">استكمال</button>
                                        </a>
                                    </td>
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
                                    <td><?php echo $row['Doctor_ar_Name'] ?> </td>
                                    <td><?php echo $row['Doctor_job_ar_name'] ?></td>
                                    <td>
                                        <a href="jobGradeDetails.php?id=<?php echo $row['DoctorCode']; ?>">
                                            <button name="tableCompletedata" class="border-0 rounded-pill w-50 fs-4 tableCompleteDataBtn">استكمال</button>
                                        </a>
                                    </td>                                
                                </tr>
                        <?php }
                        } ?>

                    </tbody>
                </table>
            </div>
        </div>
    </div>

    
        <?php if (isset($_POST['CompleteDataBtn'])) {
            if (
                isset($_POST['doctorCodeInput']) &&
                isset($_POST['doctorJobInput']) && isset($_POST['CompleteData'])
            ) {
                $doctorCodeInput = $_POST['doctorCodeInput'];

                $doctorJobInput = $_POST['doctorJobInput'];
                $CompleteData = $_POST["CompleteData"];
                $bis = new mysqli($hostname_bis, $username_bis, $password_bis, $database_bis);
                if ($bis->connect_error) {
                    die('Could not connect to the database.');
                } else {
                    $Select = "SELECT * FROM p74_completedata ";
                    $Insert = "INSERT INTO p74_completedata(doctorCodeInput, doctorJobInput, CompleteData) values(?, ?, ?)";
                    $stmt = $bis->prepare($Select);
                    $stmt = $bis->prepare($Insert);
                    $stmt->bind_param("iis", $doctorCodeInput, $doctorJobInput, $CompleteData);
                    if ($stmt->execute()) {

                    } else {
                        echo $stmt->error;
                    }
                }
            }
        } ?>
        








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