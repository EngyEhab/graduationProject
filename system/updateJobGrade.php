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
                        <?php
            if (isset($_POST['search'])) {
                    $st=$_POST['search'];
                    $myquery="SELECT * FROM doctors_account WHERE Doctor_ar_Name like '%$st%'";
                    $results=mysqli_query($bis,$myquery);
                    while ($row=mysqli_fetch_array($results)){
                    ?>
                            <td><?php echo $row['DoctorCode'];?></td>
                            <td><?php echo $row['Doctor_ar_Name']?></td>
                            <td><?php echo $row['doctor_jobs']?></td>
                            <td><button doctorCode="<?php echo $row['DoctorCode'];?>" doctorName="<?php echo $row['Doctor_ar_Name']?>" doctorJob="<?php echo $row['doctor_jobs']?>" class="border-0 rounded-pill w-50 fs-4 tableUpdateJobGradeBtn">تحديث</button></td>
                        </tr>
                        <?php }
                        
            }
                else { $myquery="SELECT * FROM doctors_account";
                        $results=mysqli_query($bis,$myquery);
                    while ($row=mysqli_fetch_array($results)){?>
                        <tr>
                            <td><?php echo $row['DoctorCode'];?></td>
                            <td><?php echo $row['Doctor_ar_Name']?></td>
                            <td><?php echo $row['doctor_jobs']?></td>
                            <td><button doctorCode="<?php echo $row['DoctorCode'];?>" doctorName="<?php echo $row['Doctor_ar_Name']?>" doctorJob="<?php echo $row['doctor_jobs']?>" class="border-0 rounded-pill w-50 fs-4 tableUpdateJobGradeBtn">تحديث</button></td>
                        </tr>
                        <?php }}?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <form action="updateJobGrade.php" method="post" id="updateJobGradeForm" class="d-none">

    <?php
    $doctor_jobs = "SELECT * FROM doctor_jobs";
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
        $doctor_job =$_POST['doctor_job'];
        if ((!empty($doctor_job))){
        $Details = mysqli_query($bis , "UPDATE doctors_account SET 
        doctor_jobs='$doctor_job'  WHERE DoctorCode='$doctorCodeInput'");}}

        ?>
        <div class="w-75 mx-auto m-5">
            <div class="container dataContainer p-3">
                <div class="row my-2 align-items-center">
                    <div class="col-md-2 text-center">
                        <label for="doctorCodeInput" class="mainText fw-bold fs-4">كــــــود العضـــــــــــــــــــــو  :</label>
                    </div>
                    <div class="col-md-10">
                        <input name="doctorCodeInput" id="doctorCodeInput" readonly class="form-control fs-4"></input>
                    </div>
                </div> 
                <div class="row my-2 align-items-center">
                    <div class="col-md-2 text-center">
                        <label for="doctorNameInput" class="mainText fw-bold fs-4">اســــــم العضـــــــــــــــــــــو  :</label>
                    </div>
                    <div class="col-md-10">
                        <input name="doctorNameInput" id="doctorNameInput" readonly class="form-control fs-4"></input>
                    </div>
                </div> 
                <div class="row my-2 align-items-center">
                    <div class="col-md-2 text-center">
                        <label for="doctorJobInput" class="mainText fw-bold fs-4"> الدرجــة الوظيفيــة الحاليـــــة  :</label>
                    </div>
                    <div class="col-md-10">
                        <input name="doctorJobInput" id="doctorJobInput" readonly class="form-control fs-4"></input>
                    </div>
                </div> 
                <div class="row my-2 align-items-center">
                    <div class="col-md-2 text-center">
                        <label for="jobGrade" class="mainText fw-bold fs-4">تحديــث الدرجــة الوظيفيــــة   :</label>
                    </div>
                    <div class="col-md-10">
                        <select name="doctor_job" class="form-select" id="job">
                            <option selected value=""></option>
                            <?php  foreach($doctor_jobs as $row){?>
                        <option value='<?php echo $row['Doctor_job_ar_name']?>'><?php echo $row['Doctor_job_ar_name']?></option>
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