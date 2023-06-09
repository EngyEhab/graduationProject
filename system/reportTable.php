<?php
include "../Connections/syscon.php";
$bis = mysqli_connect($hostname_bis, $username_bis, $password_bis, $database_bis);


$reportAbout = "";
$startDate = "";
$endDate = "";
$Department_id = "";

if (isset($_GET['reportAbout'])) {
    $reportAbout = $_GET['reportAbout'];
    $startDate = $_GET['startDate'];
    $endDate = $_GET['endDate'];
    $Department_id = $_GET['Department_id'];
}

?>
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


    <div class="container mt-5" id="displayReportSearch">
        <div class="row align-items-center justify-content-center">
            <div class="col-md-2">
                <div>
                    <a href="reports.php">
                        <button class="anotherReport rounded-pill w-100 border-0" id="anotherReport">عرض تقرير آخر</button>
                    </a>
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
            
            <div class="col-md-2">
                <div class="reportAsPDF">
                    <a href="reportAsPDF.php?reportAbout=<?php echo $reportAbout?>&startDate=<?php echo $startDate?>&endDate=<?php echo $endDate?>&Department_id=<?php echo $Department_id?>"  class="text-decoration-none text-white">
                        <button class="displayPDFBtn rounded-pill w-100 border-0" name="displayPDFBtn" id="displayPDFBtn">عرض كـ PDF</button>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="container mt-5 mb-1">
        <div class="row me-auto px-5">
            <div class="col text-center ps-1">
                <h3 class="mainTitle fw-bold">تقرير عن  :<span class="mainText"><?php if ($reportAbout == "members"){echo "أعضاء هيئة التدريس";}elseif($reportAbout == "penalties"){echo "العقوبات أو الجزاءات";}elseif($reportAbout == "vacations"){echo "الأجازات الدراسية";}elseif($reportAbout == "privateVacations"){echo "الأجازات الخاصة";}elseif($reportAbout == "secondments"){echo "الإعارات";}elseif($reportAbout == "missions"){echo "البعثات";}elseif($reportAbout == "assignments"){echo "الإنتدابات";}?></span></h3>
            </div>
            <div class="col text-center">
                <h3 class="mainTitle fw-bold">القسم العلمى  :<span class="mainText"> <?php if (!empty($Department_id)){if ($Department_id == "1"){echo "قسم المحاسبة";} elseif ($Department_id == "2"){echo "قسم إدارة الأعمال";}elseif ($Department_id == "3"){echo "قسم الاقتصاد والتجارة الخارجية";}elseif ($Department_id == "4"){echo "قسم الإحصاء";}elseif ($Department_id == "5"){echo "قسم العلوم السياسية";}elseif ($Department_id == "6"){echo "قسم نظم المعلومات";}elseif ($Department_id == "7"){echo "شعبه عامه";};}else{echo "لا يوجد";}?></span></h3>
            </div>
                <?php if (!empty($startDate)){?>
                    <div class="col text-center">
                        <h3 class="mainTitle fw-bold">من :<span class="mainText"> <?php echo $startDate;?> </span></h3>
                    </div>
                <?php } ?>
            
                <?php if (!empty($endDate)){?>
                    <div class="col text-center">
                        <h3 class="mainTitle fw-bold">إلى :<span class="mainText"> <?php echo $endDate;?> </span></h3>
                    </div>
                <?php } ?>
        </div>
    </div>
    <div class="container-fluid mb-5 mt-1" id="displayReportTable">
        
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
                    <?php
                    if (isset($_POST['search'])) {
                        $st = $_POST['search'];
                        if ($reportAbout == "penalties" &&  !empty($startDate) && !empty($endDate) && !empty($Department_id)) {
                            $myquery = ("SELECT * FROM doctors_account 
                            INNER JOIN  departments  
                            ON doctors_account.Department_id=departments.Department_id
                            INNER JOIN  doctor_jobs
                            ON doctors_account.Doctor_job_id=doctor_jobs.Doctor_job_id
                            INNER JOIN  p74_penalties
                            ON doctors_account.DoctorCode=p74_penalties.doctorCodeInput WHERE p74_penalties.startDate >= '$startDate' AND p74_penalties.endDate <= '$endDate' AND doctors_account.Department_id='$Department_id' AND Doctor_ar_Name like '%$st%'");
                            $results = mysqli_query($bis, $myquery);
                            while ($row = mysqli_fetch_array($results)) {
                    ?>
                        <tr>
                            <td><?php echo $row['DoctorCode']; ?></td>
                            <td><?php echo $row['Doctor_ar_Name'] ?></td>
                            <td><?php echo $row['Department_ar_name'] ?></td>
                            <td><?php echo $row['Doctor_job_ar_name'] ?></td>
                            <td>
                                <a href="penaltyDetails.php?id=<?php echo $row['penality_id']; ?>">
                                    <button class="border-0 rounded-pill w-50 fs-4 tableDisplayBtn">عـرض</button>
                                </a>
                            </td>
                        </tr>
                            <?php }
                        } elseif ($reportAbout == "penalties" &&  empty($startDate) && empty($endDate) && empty($Department_id)) {

                                $st = $_POST['search'];
                                $myquery = ("SELECT * FROM doctors_account 
                            INNER JOIN  departments  
                            ON doctors_account.Department_id=departments.Department_id
                            INNER JOIN  doctor_jobs
                            ON doctors_account.Doctor_job_id=doctor_jobs.Doctor_job_id
                            INNER JOIN  p74_penalties
                            ON doctors_account.DoctorCode=p74_penalties.doctorCodeInput WHERE Doctor_ar_Name like '%$st%' ");
                                $results = mysqli_query($bis, $myquery);
                                while ($row = mysqli_fetch_array($results)) {
                                ?>
                                    <tr>
                                        <td><?php echo $row['DoctorCode']; ?></td>
                                        <td><?php echo $row['Doctor_ar_Name'] ?></td>
                                        <td><?php echo $row['Department_ar_name'] ?></td>
                                        <td><?php echo $row['Doctor_job_ar_name'] ?></td>
                                        <td>
                                            <a href="penaltyDetails.php?id=<?php echo $row['penality_id']; ?>">
                                                <button class="border-0 rounded-pill w-50 fs-4 tableDisplayBtn">عـرض</button>
                                            </a>
                                        </td>
                                    </tr>
                                <?php }
                            } elseif ($reportAbout == "penalties" &&  empty($startDate) && empty($endDate) && !empty($Department_id)) {

                                $st = $_POST['search'];
                                $myquery = ("SELECT * FROM doctors_account 
                            INNER JOIN  departments  
                            ON doctors_account.Department_id=departments.Department_id
                            INNER JOIN  doctor_jobs
                            ON doctors_account.Doctor_job_id=doctor_jobs.Doctor_job_id
                            INNER JOIN  p74_penalties
                            ON doctors_account.DoctorCode=p74_penalties.doctorCodeInput WHERE doctors_account.Department_id='$Department_id' AND Doctor_ar_Name like '%$st%' ");
                                $results = mysqli_query($bis, $myquery);
                                while ($row = mysqli_fetch_array($results)) {
                                ?>
                                    <tr>
                                        <td><?php echo $row['DoctorCode']; ?></td>
                                        <td><?php echo $row['Doctor_ar_Name'] ?></td>
                                        <td><?php echo $row['Department_ar_name'] ?></td>
                                        <td><?php echo $row['Doctor_job_ar_name'] ?></td>
                                        <td>
                                            <a href="penaltyDetails.php?id=<?php echo $row['penality_id']; ?>">
                                                <button class="border-0 rounded-pill w-50 fs-4 tableDisplayBtn">عـرض</button>
                                            </a>
                                        </td>
                                    </tr>
                                <?php }
                            } elseif ($reportAbout == "penalties" &&  !empty($startDate) && !empty($endDate) && empty($Department_id)) {

                                $st = $_POST['search'];
                                $myquery = ("SELECT * FROM doctors_account 
                            INNER JOIN  departments  
                            ON doctors_account.Department_id=departments.Department_id
                            INNER JOIN  doctor_jobs
                            ON doctors_account.Doctor_job_id=doctor_jobs.Doctor_job_id
                            INNER JOIN  p74_penalties
                            ON doctors_account.DoctorCode=p74_penalties.doctorCodeInput WHERE p74_vacation_data.startDate >= '$startDate' AND p74_vacation_data.endDate <= '$endDate' AND Doctor_ar_Name like '%$st%' ");
                                $results = mysqli_query($bis, $myquery);
                                while ($row = mysqli_fetch_array($results)) {
                                ?>
                                    <tr>
                                        <td><?php echo $row['DoctorCode']; ?></td>
                                        <td><?php echo $row['Doctor_ar_Name'] ?></td>
                                        <td><?php echo $row['Department_ar_name'] ?></td>
                                        <td><?php echo $row['Doctor_job_ar_name'] ?></td>
                                        <td>
                                            <a href="penaltyDetails.php?id=<?php echo $row['penality_id']; ?>">
                                                <button class="border-0 rounded-pill w-50 fs-4 tableDisplayBtn">عـرض</button>
                                            </a>
                                        </td>
                                    </tr>
                                <?php }
                            } elseif ($reportAbout == "vacations" &&  !empty($startDate) && !empty($endDate) && !empty($Department_id)) {

                                $myquery = ("SELECT * FROM doctors_account 
                                            INNER JOIN  departments  
                                            ON doctors_account.Department_id=departments.Department_id
                                            INNER JOIN  doctor_jobs
                                            ON doctors_account.Doctor_job_id=doctor_jobs.Doctor_job_id
                                            INNER JOIN  p74_vacation_data
                                            ON doctors_account.DoctorCode=p74_vacation_data.doctorCodeInput WHERE p74_vacation_data.startDate >= '$startDate' AND p74_vacation_data.endDate <= '$endDate' AND Department_id='$Department_id' AND Doctor_ar_Name like '%$st%'");
                                $results = mysqli_query($bis, $myquery);
                                while ($row = mysqli_fetch_array($results)) {

                                ?>
                                    <tr>
                                        <td><?php echo $row['DoctorCode']; ?></td>
                                        <td><?php echo $row['Doctor_ar_Name'] ?></td>
                                        <td><?php echo $row['Department_ar_name'] ?></td>
                                        <td><?php echo $row['Doctor_job_ar_name'] ?></td>
                                        <td>
                                            <a href="vacationDetails.php?id=<?php echo $row['Vacation_id']; ?>">
                                                <button class="border-0 rounded-pill w-50 fs-4 tableDisplayBtn">عـرض</button>
                                            </a>
                                        </td>
                                    </tr>
                                <?php }
                            } elseif ($reportAbout == "vacations" &&  empty($startDate) && empty($endDate) && empty($Department_id)) {

                                $myquery = ("SELECT * FROM doctors_account 
                                            INNER JOIN  departments  
                                            ON doctors_account.Department_id=departments.Department_id
                                            INNER JOIN  doctor_jobs
                                            ON doctors_account.Doctor_job_id=doctor_jobs.Doctor_job_id
                                            INNER JOIN  p74_vacation_data
                                            ON doctors_account.DoctorCode=p74_vacation_data.doctorCodeInput WHERE Doctor_ar_Name like '%$st%'");
                                $results = mysqli_query($bis, $myquery);
                                while ($row = mysqli_fetch_array($results)) {

                                ?>
                                    <tr>
                                        <td><?php echo $row['DoctorCode']; ?></td>
                                        <td><?php echo $row['Doctor_ar_Name'] ?></td>
                                        <td><?php echo $row['Department_ar_name'] ?></td>
                                        <td><?php echo $row['Doctor_job_ar_name'] ?></td>
                                        <td>
                                            <a href="vacationDetails.php?id=<?php echo $row['Vacation_id']; ?>">
                                                <button class="border-0 rounded-pill w-50 fs-4 tableDisplayBtn">عـرض</button>
                                            </a>
                                        </td>
                                    </tr>
                                <?php }
                            } elseif ($reportAbout == "vacations" &&  !empty($startDate) && !empty($endDate) && empty($Department_id)) {

                                $myquery = ("SELECT * FROM doctors_account 
                        INNER JOIN  departments  
                        ON doctors_account.Department_id=departments.Department_id
                        INNER JOIN  doctor_jobs
                        ON doctors_account.Doctor_job_id=doctor_jobs.Doctor_job_id
                        INNER JOIN  p74_vacation_data
                        ON doctors_account.DoctorCode=p74_vacation_data.doctorCodeInput WHERE p74_vacation_data.startDate >= '$startDate' AND p74_vacation_data.endDate <= '$endDate' Doctor_ar_Name like '%$st%'");
                                $results = mysqli_query($bis, $myquery);
                                while ($row = mysqli_fetch_array($results)) {

                                ?>
                                    <tr>
                                        <td><?php echo $row['DoctorCode']; ?></td>
                                        <td><?php echo $row['Doctor_ar_Name'] ?></td>
                                        <td><?php echo $row['Department_ar_name'] ?></td>
                                        <td><?php echo $row['Doctor_job_ar_name'] ?></td>
                                        <td>
                                            <a href="vacationDetails.php?id=<?php echo $row['Vacation_id']; ?>">
                                                <button class="border-0 rounded-pill w-50 fs-4 tableDisplayBtn">عـرض</button>
                                            </a>
                                        </td>
                                    </tr>
                                <?php }
                            } elseif ($reportAbout == "vacations" &&  empty($startDate) && empty($endDate) && !empty($Department_id)) {

                                $myquery = ("SELECT * FROM doctors_account 
                        INNER JOIN  departments  
                        ON doctors_account.Department_id=departments.Department_id
                        INNER JOIN  doctor_jobs
                        ON doctors_account.Doctor_job_id=doctor_jobs.Doctor_job_id
                        INNER JOIN  p74_vacation_data
                        ON doctors_account.DoctorCode=p74_vacation_data.doctorCodeInput WHERE doctors_account.Department_id='$Department_id' AND Doctor_ar_Name like '%$st%'");
                                $results = mysqli_query($bis, $myquery);
                                while ($row = mysqli_fetch_array($results)) {

                                ?>
                                    <tr>
                                        <td><?php echo $row['DoctorCode']; ?></td>
                                        <td><?php echo $row['Doctor_ar_Name'] ?></td>
                                        <td><?php echo $row['Department_ar_name'] ?></td>
                                        <td><?php echo $row['Doctor_job_ar_name'] ?></td>
                                        <td>
                                            <a href="vacationDetails.php?id=<?php echo $row['Vacation_id']; ?>">
                                                <button class="border-0 rounded-pill w-50 fs-4 tableDisplayBtn">عـرض</button>
                                            </a>
                                        </td>
                                    </tr>
                                <?php }
                            } elseif ($reportAbout == "secondments" &&  !empty($startDate) && !empty($endDate) && !empty($Department_id)) {
                                $myquery = ("SELECT * FROM doctors_account 
                    INNER JOIN  departments  
                    ON doctors_account.Department_id=departments.Department_id
                    INNER JOIN  doctor_jobs
                    ON doctors_account.Doctor_job_id=doctor_jobs.Doctor_job_id
                    INNER JOIN  p74_secondment_data
                    ON doctors_account.DoctorCode=p74_secondment_data.doctorCodeInput WHERE p74_secondment_data.startDate >= '$startDate' AND p74_secondment_data.endDate <= '$endDate' AND doctors_account.Department_id='$Department_id'  AND Doctor_ar_Name like '%$st%'");
                                $results = mysqli_query($bis, $myquery);
                                while ($row = mysqli_fetch_array($results)) {
                                ?>
                                    <tr>
                                        <td><?php echo $row['DoctorCode']; ?></td>
                                        <td><?php echo $row['Doctor_ar_Name'] ?></td>
                                        <td><?php echo $row['Department_ar_name'] ?></td>
                                        <td><?php echo $row['Doctor_job_ar_name'] ?></td>
                                        <td>
                                            <a href="secondmentDetails.php?id=<?php echo $row['Secondment_id']; ?>">
                                                <button class="border-0 rounded-pill w-50 fs-4 tableDisplayBtn">عـرض</button>
                                            </a>
                                        </td>
                                    </tr>
                                <?php }
                            } elseif ($reportAbout == "secondments" &&  empty($startDate) && empty($endDate) && !empty($Department_id)) {
                                $myquery = ("SELECT * FROM doctors_account 
                                            INNER JOIN  departments  
                                            ON doctors_account.Department_id=departments.Department_id
                                            INNER JOIN  doctor_jobs
                                            ON doctors_account.Doctor_job_id=doctor_jobs.Doctor_job_id
                                            INNER JOIN  p74_secondment_data
                                            ON doctors_account.DoctorCode=p74_secondment_data.doctorCodeInput WHERE doctors_account.Department_id='$Department_id' AND Doctor_ar_Name like '%$st%'");
                                $results = mysqli_query($bis, $myquery);
                                while ($row = mysqli_fetch_array($results)) {
                                ?>
                                    <tr>
                                        <td><?php echo $row['DoctorCode']; ?></td>
                                        <td><?php echo $row['Doctor_ar_Name'] ?></td>
                                        <td><?php echo $row['Department_ar_name'] ?></td>
                                        <td><?php echo $row['Doctor_job_ar_name'] ?></td>
                                        <td>
                                            <a href="secondmentDetails.php?id=<?php echo $row['Secondment_id']; ?>">
                                                <button class="border-0 rounded-pill w-50 fs-4 tableDisplayBtn">عـرض</button>
                                            </a>
                                        </td>
                                    </tr>
                                <?php }
                            } elseif ($reportAbout == "secondments" &&  !empty($startDate) && !empty($endDate) && empty($Department_id)) {
                                $myquery = ("SELECT * FROM doctors_account 
                    INNER JOIN  departments  
                    ON doctors_account.Department_id=departments.Department_id
                    INNER JOIN  doctor_jobs
                    ON doctors_account.Doctor_job_id=doctor_jobs.Doctor_job_id
                    INNER JOIN  p74_secondment_data
                    ON doctors_account.DoctorCode=p74_secondment_data.doctorCodeInput WHERE p74_secondment_data.startDate >= '$startDate' AND p74_secondment_data.endDate <= '$endDate' AND Doctor_ar_Name like '%$st%'");
                                $results = mysqli_query($bis, $myquery);
                                while ($row = mysqli_fetch_array($results)) {
                                ?>
                                    <tr>
                                        <td><?php echo $row['DoctorCode']; ?></td>
                                        <td><?php echo $row['Doctor_ar_Name'] ?></td>
                                        <td><?php echo $row['Department_ar_name'] ?></td>
                                        <td><?php echo $row['Doctor_job_ar_name'] ?></td>
                                        <td>
                                            <a href="secondmentDetails.php?id=<?php echo $row['Secondment_id']; ?>">
                                                <button class="border-0 rounded-pill w-50 fs-4 tableDisplayBtn">عـرض</button>
                                            </a>
                                        </td>
                                    </tr>
                                <?php }
                            } elseif ($reportAbout == "missions" && !empty($Department_id)) {


                                $myquery = ("SELECT * FROM doctors_account 
                            INNER JOIN  departments  
                            ON doctors_account.Department_id=departments.Department_id
                            INNER JOIN  doctor_jobs
                            ON doctors_account.Doctor_job_id=doctor_jobs.Doctor_job_id
                            INNER JOIN  p74_missions_data
                            ON doctors_account.DoctorCode=p74_missions_data.doctorCodeInput WHERE doctors_account.Department_id=$Department_id AND Doctor_ar_Name like '%$st%'");
                                $results = mysqli_query($bis, $myquery);
                                while ($row = mysqli_fetch_array($results)) {
                                ?>
                                    <tr>
                                        <td><?php echo $row['DoctorCode']; ?></td>
                                        <td><?php echo $row['Doctor_ar_Name'] ?></td>
                                        <td><?php echo $row['Department_ar_name'] ?></td>
                                        <td><?php echo $row['Doctor_job_ar_name'] ?></td>
                                        <td>
                                            <a href="privateVacationDetails.php?id=<?php echo $row['mission_id']; ?>">
                                                <button class="border-0 rounded-pill w-50 fs-4 tableDisplayBtn">عـرض</button>
                                            </a>
                                        </td>
                                    </tr>
                                <?php }
                            } elseif ($reportAbout == "missions" && empty($Department_id)) {


                                $myquery = ("SELECT * FROM doctors_account 
                            INNER JOIN  departments  
                            ON doctors_account.Department_id=departments.Department_id
                            INNER JOIN  doctor_jobs
                            ON doctors_account.Doctor_job_id=doctor_jobs.Doctor_job_id
                            INNER JOIN  p74_missions_data
                            ON doctors_account.DoctorCode=p74_missions_data.doctorCodeInput WHERE Doctor_ar_Name like '%$st%'");
                                $results = mysqli_query($bis, $myquery);
                                while ($row = mysqli_fetch_array($results)) {
                                ?>
                                    <tr>
                                        <td><?php echo $row['DoctorCode']; ?></td>
                                        <td><?php echo $row['Doctor_ar_Name'] ?></td>
                                        <td><?php echo $row['Department_ar_name'] ?></td>
                                        <td><?php echo $row['Doctor_job_ar_name'] ?></td>
                                        <td>
                                            <a href="privateVacationDetails.php?id=<?php echo $row['mission_id']; ?>">
                                                <button class="border-0 rounded-pill w-50 fs-4 tableDisplayBtn">عـرض</button>
                                            </a>
                                        </td>
                                    </tr>
                                <?php }
                            } elseif ($reportAbout == "members" && !empty($Department_id)) {


                                $myquery = ("SELECT * FROM doctors_account 
                            INNER JOIN  departments  
                            ON doctors_account.Department_id=departments.Department_id
                            INNER JOIN  doctor_jobs
                            ON doctors_account.Doctor_job_id=doctor_jobs.Doctor_job_id
                            WHERE doctors_account.Department_id=$Department_id AND Doctor_ar_Name like '%$st%'");
                                $results = mysqli_query($bis, $myquery);
                                while ($row = mysqli_fetch_array($results)) {
                                ?>
                                    <tr>
                                        <td><?php echo $row['DoctorCode']; ?></td>
                                        <td><?php echo $row['Doctor_ar_Name'] ?></td>
                                        <td><?php echo $row['Department_ar_name'] ?></td>
                                        <td><?php echo $row['Doctor_job_ar_name'] ?></td>
                                        <td>
                                            <a href="memberDetails.php?id=<?php echo $row['DoctorCode']; ?>">
                                                <button class="border-0 rounded-pill w-50 fs-4 tableDisplayBtn">عـرض</button>
                                            </a>
                                        </td>
                                    </tr>
                                <?php }
                            } elseif ($reportAbout == "members" && empty($Department_id)) {


                                $myquery = ("SELECT * FROM doctors_account 
                            INNER JOIN  departments  
                            ON doctors_account.Department_id=departments.Department_id
                            INNER JOIN  doctor_jobs
                            ON doctors_account.Doctor_job_id=doctor_jobs.Doctor_job_id
                            WHERE Doctor_ar_Name like '%$st%'");
                                $results = mysqli_query($bis, $myquery);
                                while ($row = mysqli_fetch_array($results)) {
                                ?>
                                    <tr>
                                        <td><?php echo $row['DoctorCode']; ?></td>
                                        <td><?php echo $row['Doctor_ar_Name'] ?></td>
                                        <td><?php echo $row['Department_ar_name'] ?></td>
                                        <td><?php echo $row['Doctor_job_ar_name'] ?></td>
                                        <td>
                                            <a href="memberDetails.php?id=<?php echo $row['DoctorCode']; ?>">
                                                <button class="border-0 rounded-pill w-50 fs-4 tableDisplayBtn">عـرض</button>
                                            </a>
                                        </td>
                                    </tr>
                                <?php }
                            } elseif ($reportAbout == "assignments" && !empty($Department_id)) {


                                $myquery = ("SELECT * FROM doctors_account 
                            INNER JOIN  departments  
                            ON doctors_account.Department_id=departments.Department_id
                            INNER JOIN  doctor_jobs
                            ON doctors_account.Doctor_job_id=doctor_jobs.Doctor_job_id
                            INNER JOIN  p74_assignments_data
                            ON doctors_account.DoctorCode=p74_assignments_data.doctorCodeInput WHERE doctors_account.Department_id=$Department_id AND Doctor_ar_Name like '%$st%'");
                                $results = mysqli_query($bis, $myquery);
                                while ($row = mysqli_fetch_array($results)) {
                                ?>
                                    <tr>
                                        <td><?php echo $row['DoctorCode']; ?></td>
                                        <td><?php echo $row['Doctor_ar_Name'] ?></td>
                                        <td><?php echo $row['Department_ar_name'] ?></td>
                                        <td><?php echo $row['Doctor_job_ar_name'] ?></td>
                                        <td>
                                            <a href="AssignmentDetails.php?id=<?php echo $row['assignment_id']; ?>">
                                                <button class="border-0 rounded-pill w-50 fs-4 tableDisplayBtn">عـرض</button>
                                            </a>
                                        </td>
                                    </tr>
                                <?php }
                            } elseif ($reportAbout == "assignments" && empty($Department_id)) {


                                $myquery = ("SELECT * FROM doctors_account 
                            INNER JOIN  departments  
                            ON doctors_account.Department_id=departments.Department_id
                            INNER JOIN  doctor_jobs
                            ON doctors_account.Doctor_job_id=doctor_jobs.Doctor_job_id
                            INNER JOIN  p74_assignments_data
                            ON doctors_account.DoctorCode=p74_assignments_data.doctorCodeInput WHERE Doctor_ar_Name like '%$st%'");
                                $results = mysqli_query($bis, $myquery);
                                while ($row = mysqli_fetch_array($results)) {
                                ?>
                                    <tr>
                                        <td><?php echo $row['DoctorCode']; ?></td>
                                        <td><?php echo $row['Doctor_ar_Name'] ?></td>
                                        <td><?php echo $row['Department_ar_name'] ?></td>
                                        <td><?php echo $row['Doctor_job_ar_name'] ?></td>
                                        <td>
                                            <a href="AssignmentDetails.php?id=<?php echo $row['assignment_id']; ?>">
                                                <button class="border-0 rounded-pill w-50 fs-4 tableDisplayBtn">عـرض</button>
                                            </a>
                                        </td>
                                    </tr>
                                <?php }
                            } elseif ($reportAbout == "privateVacations" && !empty($Department_id)) {


                                $myquery = ("SELECT * FROM doctors_account 
                                            INNER JOIN  departments  
                                            ON doctors_account.Department_id=departments.Department_id
                                            INNER JOIN  doctor_jobs
                                            ON doctors_account.Doctor_job_id=doctor_jobs.Doctor_job_id
                                            INNER JOIN  p74_special_vacation_data
                                            ON doctors_account.DoctorCode=p74_special_vacation_data.doctorCodeInput WHERE doctors_account.Department_id=$Department_id AND Doctor_ar_Name like '%$st%'");
                                $results = mysqli_query($bis, $myquery);
                                while ($row = mysqli_fetch_array($results)) {
                                ?>
                                    <tr>
                                        <td><?php echo $row['DoctorCode']; ?></td>
                                        <td><?php echo $row['Doctor_ar_Name'] ?></td>
                                        <td><?php echo $row['Department_ar_name'] ?></td>
                                        <td><?php echo $row['Doctor_job_ar_name'] ?></td>
                                        <td>
                                            <a href="privateVacationDetails.php?id=<?php echo $row['Special_vacation_id']; ?>">
                                                <button class="border-0 rounded-pill w-50 fs-4 tableDisplayBtn">عـرض</button>
                                            </a>
                                        </td>
                                    </tr>
                                <?php }
                            } elseif ($reportAbout == "privateVacations" && empty($Department_id)) {


                                $myquery = ("SELECT * FROM doctors_account 
                                            INNER JOIN  departments  
                                            ON doctors_account.Department_id=departments.Department_id
                                            INNER JOIN  doctor_jobs
                                            ON doctors_account.Doctor_job_id=doctor_jobs.Doctor_job_id
                                            INNER JOIN  p74_special_vacation_data
                                            ON doctors_account.DoctorCode=p74_special_vacation_data.doctorCodeInput WHERE Doctor_ar_Name like '%$st%'");
                                $results = mysqli_query($bis, $myquery);
                                while ($row = mysqli_fetch_array($results)) {
                                ?>
                                    <tr>
                                        <td><?php echo $row['DoctorCode']; ?></td>
                                        <td><?php echo $row['Doctor_ar_Name'] ?></td>
                                        <td><?php echo $row['Department_ar_name'] ?></td>
                                        <td><?php echo $row['Doctor_job_ar_name'] ?></td>
                                        <td>
                                            <a href="privateVacationDetails.php?id=<?php echo $row['Special_vacation_id']; ?>">
                                                <button class="border-0 rounded-pill w-50 fs-4 tableDisplayBtn">عـرض</button>
                                            </a>
                                        </td>
                                    </tr>
                                    <?php }
                            } else {
                                if ($reportAbout == "secondments" &&  empty($startDate) && empty($endDate) && empty($Department_id)) {
                                    $myquery = ("SELECT * FROM doctors_account 
                                                INNER JOIN  departments  
                                                ON doctors_account.Department_id=departments.Department_id
                                                INNER JOIN  doctor_jobs
                                                ON doctors_account.Doctor_job_id=doctor_jobs.Doctor_job_id
                                                INNER JOIN  p74_secondment_data
                                                ON doctors_account.DoctorCode=p74_secondment_data.doctorCodeInput WHERE Doctor_ar_Name like '%$st%'");
                                    $results = mysqli_query($bis, $myquery);
                                    while ($row = mysqli_fetch_array($results)) {
                                    ?>
                                        <tr>
                                            <td><?php echo $row['DoctorCode']; ?></td>
                                            <td><?php echo $row['Doctor_ar_Name'] ?></td>
                                            <td><?php echo $row['Department_ar_name'] ?></td>
                                            <td><?php echo $row['Doctor_job_ar_name'] ?></td>
                                            <td>
                                                <a href="secondmentDetails.php?id=<?php echo $row['Secondment_id']; ?>">
                                                    <button class="border-0 rounded-pill w-50 fs-4 tableDisplayBtn">عـرض</button>
                                                </a>
                                            </td>
                                        </tr>
                                    <?php }
                                }
                            }
                        } else {

                            if ($reportAbout == "penalties" &&  !empty($startDate) && !empty($endDate) && !empty($Department_id)) {
                                $myquery = ("SELECT * FROM doctors_account 
                                            INNER JOIN  departments  
                                            ON doctors_account.Department_id=departments.Department_id
                                            INNER JOIN  doctor_jobs
                                            ON doctors_account.Doctor_job_id=doctor_jobs.Doctor_job_id
                                            INNER JOIN  p74_penalties
                                            ON doctors_account.DoctorCode=p74_penalties.doctorCodeInput WHERE p74_penalties.startDate >= '$startDate' AND p74_penalties.endDate <= '$endDate' AND doctors_account.Department_id = '$Department_id'");
                                $results = mysqli_query($bis, $myquery);
                                while ($row = mysqli_fetch_array($results)) {
                                    ?>
                                    <tr>
                                        <td><?php echo $row['DoctorCode']; ?></td>
                                        <td><?php echo $row['Doctor_ar_Name'] ?></td>
                                        <td><?php echo $row['Department_ar_name'] ?></td>
                                        <td><?php echo $row['Doctor_job_ar_name'] ?></td>
                                        <td>
                                            <a href="penaltyDetails.php?id=<?php echo $row['penality_id']; ?>">
                                                <button class="border-0 rounded-pill w-50 fs-4 tableDisplayBtn">عـرض</button>
                                            </a>
                                        </td>
                                    </tr>
                                <?php }
                            } elseif ($reportAbout == "penalties" &&  empty($startDate) && empty($endDate) && !empty($Department_id)) {

                                $myquery = ("SELECT * FROM doctors_account 
                                            INNER JOIN  departments  
                                            ON doctors_account.Department_id=departments.Department_id
                                            INNER JOIN  doctor_jobs
                                            ON doctors_account.Doctor_job_id=doctor_jobs.Doctor_job_id
                                            INNER JOIN  p74_penalties
                                            ON doctors_account.DoctorCode=p74_penalties.doctorCodeInput WHERE doctors_account.Department_id = '$Department_id' ");
                                $results = mysqli_query($bis, $myquery);
                                while ($row = mysqli_fetch_array($results)) {
                                ?>
                                    <tr>
                                        <td><?php echo $row['DoctorCode']; ?></td>
                                        <td><?php echo $row['Doctor_ar_Name'] ?></td>
                                        <td><?php echo $row['Department_ar_name'] ?></td>
                                        <td><?php echo $row['Doctor_job_ar_name'] ?></td>
                                        <td>
                                            <a href="penaltyDetails.php?id=<?php echo $row['penality_id']; ?>">
                                                <button class="border-0 rounded-pill w-50 fs-4 tableDisplayBtn">عـرض</button>
                                            </a>
                                        </td>
                                    </tr>
                                <?php }
                            } elseif ($reportAbout == "penalties" &&  !empty($startDate) && !empty($endDate) && empty($Department_id)) {

                                $myquery = ("SELECT * FROM doctors_account 
                                            INNER JOIN  departments  
                                            ON doctors_account.Department_id=departments.Department_id
                                            INNER JOIN  doctor_jobs
                                            ON doctors_account.Doctor_job_id=doctor_jobs.Doctor_job_id
                                            INNER JOIN  p74_penalties
                                            ON doctors_account.DoctorCode=p74_penalties.doctorCodeInput ");
                                $results = mysqli_query($bis, $myquery);
                                while ($row = mysqli_fetch_array($results)) {
                                ?>
                                    <tr>
                                        <td><?php echo $row['DoctorCode']; ?></td>
                                        <td><?php echo $row['Doctor_ar_Name'] ?></td>
                                        <td><?php echo $row['Department_ar_name'] ?></td>
                                        <td><?php echo $row['Doctor_job_ar_name'] ?></td>
                                        <td>
                                            <a href="penaltyDetails.php?id=<?php echo $row['penality_id']; ?>">
                                                <button class="border-0 rounded-pill w-50 fs-4 tableDisplayBtn">عـرض</button>
                                            </a>
                                        </td>
                                    </tr>
                                <?php }
                            } elseif ($reportAbout == "penalties" &&  empty($startDate) && empty($endDate) && empty($Department_id)) {

                                $myquery = ("SELECT * FROM doctors_account 
                                            INNER JOIN  departments  
                                            ON doctors_account.Department_id=departments.Department_id
                                            INNER JOIN  doctor_jobs
                                            ON doctors_account.Doctor_job_id=doctor_jobs.Doctor_job_id
                                            INNER JOIN  p74_penalties
                                            ON doctors_account.DoctorCode=p74_penalties.doctorCodeInput ");
                                $results = mysqli_query($bis, $myquery);
                                while ($row = mysqli_fetch_array($results)) {
                                ?>
                                    <tr>
                                        <td><?php echo $row['DoctorCode']; ?></td>
                                        <td><?php echo $row['Doctor_ar_Name'] ?></td>
                                        <td><?php echo $row['Department_ar_name'] ?></td>
                                        <td><?php echo $row['Doctor_job_ar_name'] ?></td>
                                        <td>
                                            <a href="penaltyDetails.php?id=<?php echo $row['penality_id']; ?>">
                                                <button class="border-0 rounded-pill w-50 fs-4 tableDisplayBtn">عـرض</button>
                                            </a>
                                        </td>
                                    </tr>
                                <?php }
                            } elseif ($reportAbout == "vacations" &&  !empty($startDate) && !empty($endDate) && !empty($Department_id)) {

                                $myquery = ("SELECT * FROM doctors_account 
                                            INNER JOIN  departments  
                                            ON doctors_account.Department_id=departments.Department_id
                                            INNER JOIN  doctor_jobs
                                            ON doctors_account.Doctor_job_id=doctor_jobs.Doctor_job_id
                                            INNER JOIN  p74_vacation_data
                                            ON doctors_account.DoctorCode=p74_vacation_data.doctorCodeInput WHERE p74_vacation_data.startDate >= '$startDate' AND p74_vacation_data.endDate <= '$endDate' AND doctors_account.Department_id = '$Department_id'");
                                $results = mysqli_query($bis, $myquery);
                                while ($row = mysqli_fetch_array($results)) {

                                ?>
                                    <tr>
                                        <td><?php echo $row['DoctorCode']; ?></td>
                                        <td><?php echo $row['Doctor_ar_Name'] ?></td>
                                        <td><?php echo $row['Department_ar_name'] ?></td>
                                        <td><?php echo $row['Doctor_job_ar_name'] ?></td>
                                        <td>
                                            <a href="vacationDetails.php?id=<?php echo $row['Vacation_id']; ?>">
                                                <button class="border-0 rounded-pill w-50 fs-4 tableDisplayBtn">عـرض</button>
                                            </a>
                                        </td>
                                    </tr>
                                <?php }
                            } elseif ($reportAbout == "vacations" &&  !empty($startDate) && !empty($endDate) && empty($Department_id)) {

                                $myquery = ("SELECT * FROM doctors_account 
                                            INNER JOIN  departments  
                                            ON doctors_account.Department_id=departments.Department_id
                                            INNER JOIN  doctor_jobs
                                            ON doctors_account.Doctor_job_id=doctor_jobs.Doctor_job_id
                                            INNER JOIN  p74_vacation_data
                                            ON doctors_account.DoctorCode=p74_vacation_data.doctorCodeInput ");
                                $results = mysqli_query($bis, $myquery);
                                while ($row = mysqli_fetch_array($results)) {

                                ?>
                                    <tr>
                                        <td><?php echo $row['DoctorCode']; ?></td>
                                        <td><?php echo $row['Doctor_ar_Name'] ?></td>
                                        <td><?php echo $row['Department_ar_name'] ?></td>
                                        <td><?php echo $row['Doctor_job_ar_name'] ?></td>
                                        <td>
                                            <a href="vacationDetails.php?id=<?php echo $row['Vacation_id']; ?>">
                                                <button class="border-0 rounded-pill w-50 fs-4 tableDisplayBtn">عـرض</button>
                                            </a>
                                        </td>
                                    </tr>
                                <?php }
                            } elseif ($reportAbout == "vacations" &&  empty($startDate) && empty($endDate) && !empty($Department_id)) {

                                $myquery = ("SELECT * FROM doctors_account 
                                            INNER JOIN  departments  
                                            ON doctors_account.Department_id=departments.Department_id
                                            INNER JOIN  doctor_jobs
                                            ON doctors_account.Doctor_job_id=doctor_jobs.Doctor_job_id
                                            INNER JOIN  p74_vacation_data
                                            ON doctors_account.DoctorCode=p74_vacation_data.doctorCodeInput WHERE doctors_account.Department_id = '$Department_id' ");
                                $results = mysqli_query($bis, $myquery);
                                while ($row = mysqli_fetch_array($results)) {

                                ?>
                                    <tr>
                                        <td><?php echo $row['DoctorCode']; ?></td>
                                        <td><?php echo $row['Doctor_ar_Name'] ?></td>
                                        <td><?php echo $row['Department_ar_name'] ?></td>
                                        <td><?php echo $row['Doctor_job_ar_name'] ?></td>
                                        <td>
                                            <a href="vacationDetails.php?id=<?php echo $row['Vacation_id']; ?>">
                                                <button class="border-0 rounded-pill w-50 fs-4 tableDisplayBtn">عـرض</button>
                                            </a>
                                        </td>
                                    </tr>
                                <?php }
                            } elseif ($reportAbout == "vacations" &&  empty($startDate) && empty($endDate) && empty($Department_id)) {

                                $myquery = ("SELECT * FROM doctors_account 
                                            INNER JOIN  departments  
                                            ON doctors_account.Department_id=departments.Department_id
                                            INNER JOIN  doctor_jobs
                                            ON doctors_account.Doctor_job_id=doctor_jobs.Doctor_job_id
                                            INNER JOIN  p74_vacation_data
                                            ON doctors_account.DoctorCode=p74_vacation_data.doctorCodeInput");
                                $results = mysqli_query($bis, $myquery);
                                while ($row = mysqli_fetch_array($results)) {

                                ?>
                                    <tr>
                                        <td><?php echo $row['DoctorCode']; ?></td>
                                        <td><?php echo $row['Doctor_ar_Name'] ?></td>
                                        <td><?php echo $row['Department_ar_name'] ?></td>
                                        <td><?php echo $row['Doctor_job_ar_name'] ?></td>
                                        <td>
                                            <a href="vacationDetails.php?id=<?php echo $row['Vacation_id']; ?>">
                                                <button class="border-0 rounded-pill w-50 fs-4 tableDisplayBtn">عـرض</button>
                                            </a>
                                        </td>
                                    </tr>
                                <?php }
                            } elseif ($reportAbout == "missions" && !empty($Department_id)) {

                                $myquery = ("SELECT * FROM doctors_account 
                                            INNER JOIN  departments  
                                            ON doctors_account.Department_id=departments.Department_id
                                            INNER JOIN  doctor_jobs
                                            ON doctors_account.Doctor_job_id=doctor_jobs.Doctor_job_id
                                            INNER JOIN  p74_missions_data
                                            ON doctors_account.DoctorCode=p74_missions_data.doctorCodeInput WHERE doctors_account.Department_id = '$Department_id'");
                                $results = mysqli_query($bis, $myquery);
                                while ($row = mysqli_fetch_array($results)) {
                                ?>
                                    <tr>
                                        <td><?php echo $row['DoctorCode']; ?></td>
                                        <td><?php echo $row['Doctor_ar_Name'] ?></td>
                                        <td><?php echo $row['Department_ar_name'] ?></td>
                                        <td><?php echo $row['Doctor_job_ar_name'] ?></td>
                                        <td>
                                            <a href="privateVacationDetails.php?id=<?php echo $row['mission_id']; ?>">
                                                <button class="border-0 rounded-pill w-50 fs-4 tableDisplayBtn">عـرض</button>
                                            </a>
                                        </td>
                                    </tr>
                                <?php }
                            } elseif ($reportAbout == "missions" && empty($Department_id)) {

                                $myquery = ("SELECT * FROM doctors_account 
                                            INNER JOIN  departments  
                                            ON doctors_account.Department_id=departments.Department_id
                                            INNER JOIN  doctor_jobs
                                            ON doctors_account.Doctor_job_id=doctor_jobs.Doctor_job_id
                                            INNER JOIN  p74_missions_data
                                            ON doctors_account.DoctorCode=p74_missions_data.doctorCodeInput");
                                $results = mysqli_query($bis, $myquery);
                                while ($row = mysqli_fetch_array($results)) {
                                ?>
                                    <tr>
                                        <td><?php echo $row['DoctorCode']; ?></td>
                                        <td><?php echo $row['Doctor_ar_Name'] ?></td>
                                        <td><?php echo $row['Department_ar_name'] ?></td>
                                        <td><?php echo $row['Doctor_job_ar_name'] ?></td>
                                        <td>
                                            <a href="privateVacationDetails.php?id=<?php echo $row['mission_id']; ?>">
                                                <button class="border-0 rounded-pill w-50 fs-4 tableDisplayBtn">عـرض</button>
                                            </a>
                                        </td>
                                    </tr>
                                <?php }
                            } elseif ($reportAbout == "assignments" && !empty($Department_id)) {


                                $myquery = ("SELECT * FROM doctors_account 
                                            INNER JOIN  departments  
                                            ON doctors_account.Department_id=departments.Department_id
                                            INNER JOIN  doctor_jobs
                                            ON doctors_account.Doctor_job_id=doctor_jobs.Doctor_job_id
                                            INNER JOIN  p74_assignments_data
                                            ON doctors_account.DoctorCode=p74_assignments_data.doctorCodeInput WHERE doctors_account.Department_id = '$Department_id'");
                                $results = mysqli_query($bis, $myquery);
                                while ($row = mysqli_fetch_array($results)) {
                                ?>
                                    <tr>
                                        <td><?php echo $row['DoctorCode']; ?></td>
                                        <td><?php echo $row['Doctor_ar_Name'] ?></td>
                                        <td><?php echo $row['Department_ar_name'] ?></td>
                                        <td><?php echo $row['Doctor_job_ar_name'] ?></td>
                                        <td>
                                            <a href="AssignmentDetails.php?id=<?php echo $row['assignment_id']; ?>">
                                                <button class="border-0 rounded-pill w-50 fs-4 tableDisplayBtn">عـرض</button>
                                            </a>
                                        </td>
                                    </tr>
                                <?php }
                            } elseif ($reportAbout == "assignments" && empty($Department_id)) {


                                $myquery = ("SELECT * FROM doctors_account 
                                            INNER JOIN  departments  
                                            ON doctors_account.Department_id=departments.Department_id
                                            INNER JOIN  doctor_jobs
                                            ON doctors_account.Doctor_job_id=doctor_jobs.Doctor_job_id
                                            INNER JOIN  p74_assignments_data
                                            ON doctors_account.DoctorCode=p74_assignments_data.doctorCodeInput");
                                $results = mysqli_query($bis, $myquery);
                                while ($row = mysqli_fetch_array($results)) {
                                ?>
                                    <tr>
                                        <td><?php echo $row['DoctorCode']; ?></td>
                                        <td><?php echo $row['Doctor_ar_Name'] ?></td>
                                        <td><?php echo $row['Department_ar_name'] ?></td>
                                        <td><?php echo $row['Doctor_job_ar_name'] ?></td>
                                        <td>
                                            <a href="AssignmentDetails.php?id=<?php echo $row['assignment_id']; ?>">
                                                <button class="border-0 rounded-pill w-50 fs-4 tableDisplayBtn">عـرض</button>
                                            </a>
                                        </td>
                                    </tr>
                                <?php }
                            } elseif ($reportAbout == "privateVacations" && !empty($Department_id)) {
                                $myquery = ("SELECT * FROM doctors_account 
                                            INNER JOIN  departments  
                                            ON doctors_account.Department_id=departments.Department_id
                                            INNER JOIN  doctor_jobs
                                            ON doctors_account.Doctor_job_id=doctor_jobs.Doctor_job_id
                                            INNER JOIN  p74_special_vacation_data
                                            ON doctors_account.DoctorCode=p74_special_vacation_data.doctorCodeInput WHERE doctors_account.Department_id = '$Department_id'");
                                $results = mysqli_query($bis, $myquery);
                                while ($row = mysqli_fetch_array($results)) {
                                ?>
                                    <tr>
                                        <td><?php echo $row['DoctorCode']; ?></td>
                                        <td><?php echo $row['Doctor_ar_Name'] ?></td>
                                        <td><?php echo $row['Department_ar_name'] ?></td>
                                        <td><?php echo $row['Doctor_job_ar_name'] ?></td>
                                        <td>
                                            <a href="privateVacationDetails.php?id=<?php echo $row['Special_vacation_id']; ?>">
                                                <button class="border-0 rounded-pill w-50 fs-4 tableDisplayBtn">عـرض</button>
                                            </a>
                                        </td>
                                    </tr>
                                <?php }
                            } elseif ($reportAbout == "privateVacations" && empty($Department_id)) {
                                $myquery = ("SELECT * FROM doctors_account 
                                            INNER JOIN  departments  
                                            ON doctors_account.Department_id=departments.Department_id
                                            INNER JOIN  doctor_jobs
                                            ON doctors_account.Doctor_job_id=doctor_jobs.Doctor_job_id
                                            INNER JOIN  p74_special_vacation_data
                                            ON doctors_account.DoctorCode=p74_special_vacation_data.doctorCodeInput");
                                $results = mysqli_query($bis, $myquery);
                                while ($row = mysqli_fetch_array($results)) {
                                ?>
                                    <tr>
                                        <td><?php echo $row['DoctorCode']; ?></td>
                                        <td><?php echo $row['Doctor_ar_Name'] ?></td>
                                        <td><?php echo $row['Department_ar_name'] ?></td>
                                        <td><?php echo $row['Doctor_job_ar_name'] ?></td>
                                        <td>
                                            <a href="privateVacationDetails.php?id=<?php echo $row['Special_vacation_id']; ?>">
                                                <button class="border-0 rounded-pill w-50 fs-4 tableDisplayBtn">عـرض</button>
                                            </a>
                                        </td>
                                    </tr>
                                <?php }
                            } elseif ($reportAbout == "members" && !empty($Department_id)) {
                                $myquery = ("SELECT * FROM doctors_account 
                                            INNER JOIN  departments  
                                            ON doctors_account.Department_id=departments.Department_id
                                            INNER JOIN  doctor_jobs
                                            ON doctors_account.Doctor_job_id=doctor_jobs.Doctor_job_id
                                            WHERE doctors_account.Department_id = '$Department_id'");
                                $results = mysqli_query($bis, $myquery);
                                while ($row = mysqli_fetch_array($results)) {
                                ?>
                                    <tr>
                                        <td><?php echo $row['DoctorCode']; ?></td>
                                        <td><?php echo $row['Doctor_ar_Name'] ?></td>
                                        <td><?php echo $row['Department_ar_name'] ?></td>
                                        <td><?php echo $row['Doctor_job_ar_name'] ?></td>
                                        <td>
                                            <a href="memberDetails.php?id=<?php echo $row['DoctorCode']; ?>">
                                                <button class="border-0 rounded-pill w-50 fs-4 tableDisplayBtn">عـرض</button>
                                            </a>
                                        </td>
                                    </tr>
                                <?php }
                            } elseif ($reportAbout == "members" && empty($Department_id)) {
                                $myquery = ("SELECT * FROM doctors_account 
                                            INNER JOIN  departments  
                                            ON doctors_account.Department_id=departments.Department_id
                                            INNER JOIN  doctor_jobs
                                            ON doctors_account.Doctor_job_id=doctor_jobs.Doctor_job_id");
                                $results = mysqli_query($bis, $myquery);
                                while ($row = mysqli_fetch_array($results)) {
                                ?>
                                    <tr>
                                        <td><?php echo $row['DoctorCode']; ?></td>
                                        <td><?php echo $row['Doctor_ar_Name'] ?></td>
                                        <td><?php echo $row['Department_ar_name'] ?></td>
                                        <td><?php echo $row['Doctor_job_ar_name'] ?></td>
                                        <td>
                                            <a href="memberDetails.php?id=<?php echo $row['DoctorCode']; ?>">
                                                <button class="border-0 rounded-pill w-50 fs-4 tableDisplayBtn">عـرض</button>
                                            </a>
                                        </td>
                                    </tr>
                                <?php }
                            } elseif ($reportAbout == "secondments" &&  !empty($startDate) && !empty($endDate) && !empty($Department_id)) {
                                $myquery = ("SELECT * FROM doctors_account 
                                            INNER JOIN  departments  
                                            ON doctors_account.Department_id=departments.Department_id
                                            INNER JOIN  doctor_jobs
                                            ON doctors_account.Doctor_job_id=doctor_jobs.Doctor_job_id
                                            INNER JOIN  p74_secondment_data
                                            ON doctors_account.DoctorCode=p74_secondment_data.doctorCodeInput WHERE p74_secondment_data.startDate >= '$startDate' AND p74_secondment_data.endDate <= '$endDate' AND doctors_account.Department_id = '$Department_id'");
                                $results = mysqli_query($bis, $myquery);
                                while ($row = mysqli_fetch_array($results)) {
                                ?>
                                    <tr>
                                        <td><?php echo $row['DoctorCode']; ?></td>
                                        <td><?php echo $row['Doctor_ar_Name'] ?></td>
                                        <td><?php echo $row['Department_ar_name'] ?></td>
                                        <td><?php echo $row['Doctor_job_ar_name'] ?></td>
                                        <td>
                                            <a href="secondmentDetails.php?id=<?php echo $row['Secondment_id']; ?>">
                                                <button class="border-0 rounded-pill w-50 fs-4 tableDisplayBtn">عـرض</button>
                                            </a>
                                        </td>
                                    </tr>
                                <?php }
                            } elseif ($reportAbout == "secondments" &&  !empty($startDate) && !empty($endDate) && empty($Department_id)) {
                                $myquery = ("SELECT * FROM doctors_account 
                                            INNER JOIN  departments  
                                            ON doctors_account.Department_id=departments.Department_id
                                            INNER JOIN  doctor_jobs
                                            ON doctors_account.Doctor_job_id=doctor_jobs.Doctor_job_id
                                            INNER JOIN  p74_secondment_data
                                            ON doctors_account.DoctorCode=p74_secondment_data.doctorCodeInput WHERE p74_secondment_data.startDate >= '$startDate' AND p74_secondment_data.endDate <= '$endDate'");
                                $results = mysqli_query($bis, $myquery);
                                while ($row = mysqli_fetch_array($results)) {
                                ?>
                                    <tr>
                                        <td><?php echo $row['DoctorCode']; ?></td>
                                        <td><?php echo $row['Doctor_ar_Name'] ?></td>
                                        <td><?php echo $row['Department_ar_name'] ?></td>
                                        <td><?php echo $row['Doctor_job_ar_name'] ?></td>
                                        <td>
                                            <a href="secondmentDetails.php?id=<?php echo $row['Secondment_id']; ?>">
                                                <button class="border-0 rounded-pill w-50 fs-4 tableDisplayBtn">عـرض</button>
                                            </a>
                                        </td>
                                    </tr>
                                <?php }
                            } elseif ($reportAbout == "secondments" &&  empty($startDate) && empty($endDate) && empty($Department_id)) {
                                $myquery = ("SELECT * FROM doctors_account 
                                            INNER JOIN  departments  
                                            ON doctors_account.Department_id=departments.Department_id
                                            INNER JOIN  doctor_jobs
                                            ON doctors_account.Doctor_job_id=doctor_jobs.Doctor_job_id
                                            INNER JOIN  p74_secondment_data
                                            ON doctors_account.DoctorCode=p74_secondment_data.doctorCodeInput");
                                $results = mysqli_query($bis, $myquery);
                                while ($row = mysqli_fetch_array($results)) {
                                ?>
                                    <tr>
                                        <td><?php echo $row['DoctorCode']; ?></td>
                                        <td><?php echo $row['Doctor_ar_Name'] ?></td>
                                        <td><?php echo $row['Department_ar_name'] ?></td>
                                        <td><?php echo $row['Doctor_job_ar_name'] ?></td>
                                        <td>
                                            <a href="secondmentDetails.php?id=<?php echo $row['Secondment_id']; ?>">
                                                <button class="border-0 rounded-pill w-50 fs-4 tableDisplayBtn">عـرض</button>
                                            </a>
                                        </td>
                                    </tr>
                                    <?php }
                            } else {
                                if ($reportAbout == "secondments" &&  empty($startDate) && empty($endDate) && !empty($Department_id)) {
                                    $myquery = ("SELECT * FROM doctors_account 
                                                INNER JOIN  departments  
                                                ON doctors_account.Department_id=departments.Department_id
                                                INNER JOIN  doctor_jobs
                                                ON doctors_account.Doctor_job_id=doctor_jobs.Doctor_job_id
                                                INNER JOIN  p74_secondment_data
                                                ON doctors_account.DoctorCode=p74_secondment_data.doctorCodeInput WHERE doctors_account.Department_id = '$Department_id'");
                                    $results = mysqli_query($bis, $myquery);
                                    while ($row = mysqli_fetch_array($results)) {
                                    ?>
                                        <tr>
                                            <td><?php echo $row['DoctorCode']; ?></td>
                                            <td><?php echo $row['Doctor_ar_Name'] ?></td>
                                            <td><?php echo $row['Department_ar_name'] ?></td>
                                            <td><?php echo $row['Doctor_job_ar_name'] ?></td>
                                            <td>
                                                <a href="secondmentDetails.php?id=<?php echo $row['Secondment_id']; ?>">
                                                    <button class="border-0 rounded-pill w-50 fs-4 tableDisplayBtn">عـرض</button>
                                                </a>
                                            </td>
                                        </tr>
                        <?php }
                                }
                            }
                        }
                        ?>
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