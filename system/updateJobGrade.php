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
                            <th>تحديث الدرجة الوظيفية</th>
                        </tr>
                    </thead>   
                    <tbody>
                        <tr>
                        <?php
            if (isset($_POST['search'])) {
                    $st=$_POST['search'];
                    $myquery="SELECT * FROM doctors_account 
                    INNER JOIN  doctor_jobs  
                    ON doctors_account.Doctor_job_id=doctor_jobs.Doctor_job_id WHERE Doctor_ar_Name like '%$st%'";
                    $results=mysqli_query($bis,$myquery);
                    while ($row=mysqli_fetch_array($results)){
                    ?>
                            <td><?php echo $row['DoctorCode'];?></td>
                            <td><?php echo $row['Doctor_ar_Name']?></td>
                            <td><?php echo $row['Doctor_job_ar_name']?></td>
                            <td><button doctorCode="<?php echo $row['DoctorCode'];?>" doctorName="<?php echo $row['Doctor_ar_Name']?>" doctorJob="<?php echo $row['Doctor_job_id']?>"  doctorJobName="<?php echo $row['Doctor_job_ar_name']?>" job_order="<?php echo $row['job_order']?>" data-bs-toggle="modal" data-bs-target="#updateJobGradeModal" class="border-0 rounded-pill w-50 fs-4 tableUpdateJobGradeBtn">تحديث</button></td>
                        </tr>
                        <?php }
                        
            }
                else { $myquery="SELECT * FROM doctors_account 
                    INNER JOIN  doctor_jobs  
                    ON doctors_account.Doctor_job_id=doctor_jobs.Doctor_job_id";
                        $results=mysqli_query($bis,$myquery);
                    while ($row=mysqli_fetch_array($results)){?>
                        <tr>
                            <td><?php echo $row['DoctorCode'];?></td>
                            <td><?php echo $row['Doctor_ar_Name']?></td>
                            <td><?php echo $row['Doctor_job_ar_name']?></td>
                            <td><button doctorCode="<?php echo $row['DoctorCode'];?>" doctorName="<?php echo $row['Doctor_ar_Name']?>" doctorJob="<?php echo $row['Doctor_job_id']?>" doctorJobName="<?php echo $row['Doctor_job_ar_name']?>" job_order="<?php echo $row['job_order']?>" data-bs-toggle="modal" data-bs-target="#updateJobGradeModal" class="border-0 rounded-pill w-50 fs-4 tableUpdateJobGradeBtn">تحديث</button></td>
                        </tr>
                        <?php }}?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <form action="updateJobGrade.php" method="post" id="updateJobGradeForm">
        <form action="" method="post" id="jobOrderForm">

        <input name="jobOrder" id="jobOrder" readonly class="form-control fs-4"></input>
        <button type="submit" class="updateJobGradeBtn rounded-pill border-0 w-100 my-3"  id="updateJobGradeBtn" name="pola">تحديــث</button>


        </form>
        <?php 
        if (isset($_POST['search'])) {

         $jobOrder= $_POST['jobOrder'];}?>




    <?php
    // $doctor_jobs1 = "SELECT * FROM doctor_jobs INNER JOIN doctors_account ON doctor_jobs.Doctor_job_id=doctors_account.Doctor_job_id";
    // $result = $bis->query($doctor_jobs1);
    // $job_order=$row['job_order'];
    echo $jobOrder;
    $doctor_jobs = "SELECT * FROM doctor_jobs ";
    $result = $bis->query($doctor_jobs);
    $appata = mysqli_query ($bis, $doctor_jobs) or die (mysqli_error ($bis));
    $row_appata = mysqli_fetch_assoc ($appata);
    $doctor_jobs=array($row_appata);
    while($row=mysqli_fetch_assoc($appata)){
        array_push($doctor_jobs,$row);
    }
    $_SESSION ['doctor_jobs']=$doctor_jobs;

    if (isset($_POST['updateJobGradeBtn'])){
        $doctorCodeInput=$_POST['doctorCodeInput'];
        $p74_doctor_job =$_POST['doctor_job'];
        if ((!empty($p74_doctor_job))){
        $Details = mysqli_query($bis , "UPDATE doctors_account SET 
        Doctor_job_id='$p74_doctor_job'  WHERE DoctorCode='$doctorCodeInput'");}
        echo "<meta http-equiv='refresh' content='0'>";
    }

        ?>
        <div class="w-75 mx-auto m-5">
            <div class="modal modal-xl fade" id="updateJobGradeModal">
                <div class="modal-dialog  modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-body">
                            <div class="container dataContainer p-3">
                                <div class="row my-2 align-items-center">
                                    <div class="col-md-2 text-center">
                                        <label for="doctorCodeInput" class="mainText fw-bold fs-4 text-nowrap">كــــــود العضـــــــــــــــــــــو  :</label>
                                    </div>
                                    <div class="col-md-10">
                                        <input name="doctorCodeInput" id="doctorCodeInput" readonly class="form-control fs-4"></input>
                                    </div>
                                </div> 
                                <div class="row my-2 align-items-center">
                                    <div class="col-md-2 text-center">
                                        <label for="doctorNameInput" class="mainText fw-bold fs-4 text-nowrap">اســــــم العضـــــــــــــــــــــو  :</label>
                                    </div>
                                    <div class="col-md-10">
                                        <input name="doctorNameInput" id="doctorNameInput" readonly class="form-control fs-4"></input>
                                    </div>
                                </div> 
                                <input name="doctorJobInput" id="doctorJobInput" readonly class="form-control fs-4 d-none"></input> 
                                <div class="row my-2 align-items-center">
                                    <div class="col-md-2 text-center">
                                        <label for="doctorJobNameInput" class="mainText fw-bold fs-4 text-nowrap"> الدرجــة الوظيفيــة الحاليـــــة  :</label>
                                    </div>
                                    <div class="col-md-10">
                                        <input name="doctorJobNameInput" id="doctorJobNameInput" readonly class="form-control fs-4"></input>
                                    </div>
                                </div>
                                <div class="row my-2 align-items-center">
                                    <div class="col-md-2 text-center">
                                        <label for="jobGrade" class="mainText fw-bold fs-4 text-nowrap">تحديــث الدرجــة الوظيفيــــة   :</label>
                                    </div>
                                    <div class="col-md-10">
                                        <select name="doctor_job" class="form-select" id="job">
                                            <option selected value=""></option>
                                            <?php  foreach($doctor_jobs as $row){?>
                                        <option value='<?php  echo $row['Doctor_job_id']?>'><?php echo $row['Doctor_job_ar_name']?></option>
                                        <?php } ?>
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