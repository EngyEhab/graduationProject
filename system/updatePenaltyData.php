<?php
include "../Connections/syscon.php"; 
$bis = mysqli_connect($hostname_bis, $username_bis, $password_bis, $database_bis);
$id="";
if (isset($_GET['id'])){
    $id=$_GET['id'];
    
    $Select=mysqli_query($bis,"SELECT * FROM penalities WHERE  doctorCodeInput='$id' ");
    $row=mysqli_fetch_assoc($Select);
    
    
            $doctorCodeInput=$row['doctorCodeInput'];
            $doctorNameInput =$row['doctorNameInput'];
            $penaltyDescription =$row['penaltyDescription']; 
            $startDate=$row["startDate"]; 
            $endDate=$row["endDate"]; 
            $penaltyReason=$row["penaltyReason"]; 
            $penaltyFile=$row["penaltyFile"]; 
            $penaltyNotes=$row["penaltyNotes"]; 
            $penaltyDuration=$row["penaltyDuration"]; }

if (isset($_POST['updatePenaltyBtn'])){
    
            
            $doctorNameInput =$_POST['doctorNameInput'];
            $penaltyDescription =$_POST['penaltyDescription']; 
            $startDate=$_POST["startDate"]; 
            $endDate=$_POST["endDate"]; 
            $penaltyReason=$_POST["penaltyReason"]; 
            $penaltyFile=$_POST["penaltyFile"]; 
            $penaltyNotes=$_POST["penaltyNotes"]; 
            $penaltyDuration=$_POST["penaltyDuration"];

    if ((!empty($penaltyFile))){
        $Details = mysqli_query($bis , "UPDATE penalities SET 
        doctorNameInput='$doctorNameInput',penaltyDescription='$penaltyDescription',
        startDate='$startDate',endDate='$endDate',penaltyReason='$penaltyReason',
        penaltyFile='$penaltyFile',penaltyNotes='$penaltyNotes',penaltyDuration='$penaltyDuration'
        WHERE doctorCodeInput='$id'");
        }
        else{
            $Details = mysqli_query($bis , "UPDATE penalities SET 
            doctorNameInput='$doctorNameInput',penaltyDescription='$penaltyDescription',
            startDate='$startDate',endDate='$endDate',penaltyReason='$penaltyReason',
            penaltyFile='$penaltyFile',penaltyNotes='$penaltyNotes',penaltyDuration='$penaltyDuration' WHERE doctorCodeInput='$id'");  
        }}










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
    
    
    <form action="updatePenaltyData.php" method="post" id="updatePenaltyForm" class="mb-5">
        <div class="w-75 mx-auto m-5">
            <div class="container dataContainer p-3">
                <div class="row my-2 align-items-center">
                    <div class="col-md-2 text-center">
                        <label for="doctorNameInput" class="mainText fw-bold fs-4">اســـــــــــــم العضــــــــــــــو  :</label>
                    </div>
                    <div class="col-md-10">
                        <input name="doctorNameInput" id="doctorNameInput" value="<?php if (isset($_GET['id'])) {echo $doctorNameInput;}?>" readonly class="form-control fs-4"></input>
                    </div>
                </div> 
                <div class="row my-2 align-items-center">
                    <div class="col-md-2 text-center">
                        <label for="penaltyDescription" class="mainText fw-bold fs-4">  الجــــــــــزاء أو العقوبـــــــــة :</label>
                    </div>
                    <div class="col-md-10">
                        <input type="text" class="form-control" value="<?php if (isset($_GET['id'])) {echo $penaltyDescription;}?>" name="penaltyDescription" id="penaltyDescription">
                    </div>
                </div>
                <div class="row my-2 align-items-center">
                    <div class="col-md-2 text-center">
                        <label for="penaltyDuration" class="mainText fw-bold fs-4">المــــــــــــــــــــــــــــــــــــــدة  :</label>
                    </div>
                    <div class="col-md-2">
                        <input type="number" min="1" class="form-control" value="<?php if (isset($_GET['id'])) {echo $penaltyDuration;}?>" name="penaltyDuration" id="penaltyDuration">
                    </div>
                    <div class="col-md-2">
                        <span class="fs-3 fw-bold">سنين/ سنة</span>
                    </div>
                    <div class="col-md-1 text-center">
                        <label for="startDate" class="mainText fw-bold fs-4">مــن  :</label>
                    </div>
                    <div class="col-md-2">
                        <input type="text" class="form-control" value="<?php if (isset($_GET['id'])) {echo $startDate;}?>" name="startDate" id="startDate">
                    </div>
                    <div class="col-md-1 text-center">
                        <label for="endDate" class="mainText fw-bold fs-4">إلــى  :</label>
                    </div>
                    <div class="col-md-2">
                        <input type="text" class="form-control" value="<?php if (isset($_GET['id'])) {echo $endDate;}?>" name="endDate" id="endDate">
                    </div>
                </div>

                <div class="row my-2">
                    <div class="col-md-2 text-center">
                        <label for="penaltyReason" class="mainText fw-bold fs-4">الســـــــــــــــــــــــــــــــــبب  :</label>
                    </div>
                    <div class="col-md-10">
                        <textarea name="penaltyReason" id="penaltyReason" rows="2" class="form-control fs-4"><?php if (isset($_GET['id'])) {echo $penaltyReason;}?></textarea>
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
                        <input class="form-control d-none" type="file"  id="penaltyFile" name="penaltyFile">
                        <p class="selectedPenaltyFile fs-4"><?php if (isset($_GET['id'])) {echo $penaltyFile;}?></p>                   
                    </div>
                </div>

                <div class="row my-2">
                    <div class="col-md-2 text-center">
                        <label for="penaltyNotes" class="mainText fw-bold fs-4">ملاحظــــــــــــــــــــــــــــات  :</label>
                    </div>
                    <div class="col-md-10">
                        <textarea name="penaltyNotes" id="penaltyNotes"  rows="3" class="form-control fs-4"><?php if (isset($_GET['id'])) {echo $penaltyNotes;}?></textarea>
                    </div>
                </div>
                <div class="row my-2 justify-content-end">
                    <div class="col-md-2">
                        <button type="submit" class="updatePenaltyBtn rounded-pill border-0 w-100 my-3"  id="updatePenaltyBtn" name="updatePenaltyBtn">تعديــل</button>
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