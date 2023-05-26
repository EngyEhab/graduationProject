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
                    $cst=$_POST['search'];
                    $myquery="SELECT * FROM p74_doctors_account 
                    INNER JOIN  p74_doctor_jobs  
                    ON p74_doctors_account.Doctor_job_id=p74_doctor_jobs.Doctor_job_id WHERE Doctor_ar_Name like '%$cst%'";
                    $results=mysqli_query($bis,$myquery);
                    while ($row=mysqli_fetch_array($results)){
                    ?>
                        <tr>
                            <td><?php echo $row['DoctorCode'];?></td>
                            <td><?php echo $row['Doctor_ar_Name']?></td>
                            <td><?php echo $row['Doctor_job_ar_name']?></td>
                            <td><button name= "tableCompletedata" doctorCode ="<?php echo $row['DoctorCode'];?>" doctorName="<?php echo $row['Doctor_ar_Name']?>" doctorJob="<?php echo $row['Doctor_job_id']?>" data-bs-toggle="modal" data-bs-target="#completeDataModal" class="border-0 rounded-pill w-50 fs-4 tableCompleteDataBtn">استكمال</button></td>
                        </tr>
                    <?php }}
                else { 
                        $myquery="SELECT * FROM p74_doctors_account 
                        INNER JOIN  p74_doctor_jobs  
                        ON p74_doctors_account.Doctor_job_id=p74_doctor_jobs.Doctor_job_id";
                        $results=mysqli_query($bis,$myquery);
                    while ($row=mysqli_fetch_array($results)){?>
                    
                        <tr>
                            <td><?php echo $row['DoctorCode'];?></td>
                            <td><?php echo $row['Doctor_ar_Name']?>  </td>
                            <td><?php echo $row['Doctor_job_ar_name']?></td>
                            <td><button name= "tableCompletedata" doctorCode ="<?php echo $row['DoctorCode'];?>" doctorName="<?php echo $row['Doctor_ar_Name']?>" data-bs-toggle="modal" data-bs-target="#completeDataModal" doctorJob="<?php echo $row['Doctor_job_id']?>" class="border-0 rounded-pill w-50 fs-4 tableCompleteDataBtn">استكمال</button></td>
                        </tr>
                    <?php }
                }?>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
    
    <form action="completeData.php" method="post" id="completeDataForm">
    <?php  if (isset($_POST['CompleteDataBtn'])) {
    if (isset($_POST['doctorCodeInput']) && isset($_POST['doctorNameInput']) &&
        isset($_POST['doctorJobInput']) && isset($_POST['CompleteData'])){
            $doctorCodeInput=$_POST['doctorCodeInput'];
            $doctorNameInput =$_POST['doctorNameInput'];
            $doctorJobInput =$_POST['doctorJobInput']; 
            $CompleteData=$_POST["CompleteData"]; 
            $bis = new mysqli($hostname_bis, $username_bis, $password_bis, $database_bis);
            if ($bis->connect_error) {
                die('Could not connect to the database.');
            }
            else {
                $Select = "SELECT * FROM p74_completedata ";
                $Insert = "INSERT INTO p74_completedata(doctorCodeInput, doctorNameInput, doctorJobInput, CompleteData) values(?, ?, ?, ?)";
                $stmt = $bis->prepare($Select);
                    $stmt = $bis->prepare($Insert);
                    $stmt->bind_param("isis",$doctorCodeInput, $doctorNameInput, $doctorJobInput, $CompleteData);
                    if ($stmt->execute()) {
                    }
                    else {
                        echo $stmt->error;
                    }}}} ?>
        <div class="w-75 mx-auto m-5">
            <div class="modal modal-xl fade" id="completeDataModal">
                <div class="modal-dialog  modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-body">
                            <div class="container dataContainer p-3" id="completeDataContainer">
                                <div class="row my-2 align-items-center">
                                    <div class="col-md-2 text-center">
                                        <label for="doctorCodeInput" class="mainText fw-bold fs-4 text-nowrap">كــــــــــــــود العضــــــــــــــــو  :</label>
                                    </div>
                                    <div class="col-md-10">
                                        <input name="doctorCodeInput" id="doctorCodeInput" readonly class="form-control fs-4"></input>
                                    </div>
                                </div> 
                                <div class="row my-2 align-items-center">
                                    <div class="col-md-2 text-center">
                                        <label for="doctorNameInput" class="mainText fw-bold fs-4 text-nowrap">اســــــــــــــم العضــــــــــــــــو  :</label>
                                    </div>
                                    <div class="col-md-10">
                                        <input name="doctorNameInput" id="doctorNameInput" readonly class="form-control fs-4"></input>
                                    </div>
                                </div> 
                                <div class="row my-2 align-items-center">
                                    <div class="col-md-2 text-center">
                                        <label for="doctorJobInput" class="mainText fw-bold fs-4 text-nowrap"> الدرجــة الوظيفيــة الحاليــــــــة  :</label>
                                    </div>
                                    <div class="col-md-10">
                                        <input name="doctorJobInput" id="doctorJobInput"  readonly class="form-control fs-4"></input>
                                    </div>
                                </div> 
                                <div class="row my-2">
                                    <div class="col-md-2 text-center">
                                        <label for="CompleteData" class="mainText fw-bold fs-4 ">استكمـال بيانـات الدرجــــــــة الوظيفية الحاليـــــة   :</label>
                                    </div>
                                    <div class="col-md-10">
                                        <textarea name="CompleteData" id="CompleteData" rows="5" class="form-control fs-4"></textarea>
                                    </div>
                                </div>
                                <div class="row my-2 justify-content-end">
                                    <div class="col-md-2">
                                        <button type="submit" class="CompleteDataBtn rounded-pill border-0 w-100 my-3"  id="CompleteDataBtn" name="CompleteDataBtn">استكمال</button>
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