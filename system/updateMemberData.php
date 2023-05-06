<?php
include "../Connections/syscon.php"; 
$bis = mysqli_connect($hostname_bis, $username_bis, $password_bis, $database_bis);

$qualifications="";
$date_of_birth ="";
$hiring_date =""; 
$Doctor_ar_Name ="";              
$Doctor_eng_Name="";                   
$National_id="";                   
$Mobile="";                   
$Academic_Mail=""; 
$Personal_Mail=""; 
$Notes=""; 
$Doctor_image=""; 
$department=""; 
$university="";
$faculty="";
$doctorjob="";

if (isset($_GET['id'])){
    $id=$_GET['id'];
    
    $Select=mysqli_query($bis,"SELECT * FROM doctors_account WHERE  DoctorCode='$id' ");
    $row=mysqli_fetch_assoc($Select);
    
    
    $qualifications=$row['qualifications'];
    $date_of_birth =$row['date_of_birth'];
    $hiring_date =$row['hiring_date'];  
    $Doctor_ar_Name = $row['Doctor_ar_Name'];     
    $Doctor_eng_Name=$row["Doctor_eng_Name"];                   
    $National_id=$row["National_id"];                   
    $Mobile=$row["Mobile"];                   
    $Academic_Mail=$row["Academic_Mail"]; 
    $Personal_Mail=$row["Personal_Mail"]; 
    $Notes=$row["Notes"]; 
    $Doctor_image=$row["Doctor_image"]; 
    $department=$row["departments"]; 
    $university=$row["university"];
    $faculty=$row["faculty"];
    $doctorjob=$row["doctor_jobs"];}

if (isset($_POST['updateMemberData'])){
  
    $qualifications=$_POST['qualifications'];
    $date_of_birth =$_POST['date_of_birth'];
    $hiring_date =$_POST['hiring_date']; 
    $Doctor_ar_Name = $_POST['Doctor_ar_Name'];              
    $Doctor_eng_Name=$_POST["Doctor_eng_Name"];                   
    $National_id=$_POST["National_id"];                   
    $Mobile=$_POST["Mobile"];                   
    $Academic_Mail=$_POST["Academic_Mail"]; 
    $Personal_Mail=$_POST["Personal_Mail"]; 
    $Notes=$_POST["Notes"]; 
    $Doctor_image=$_POST["Doctor_image"]; 
    $department=$_POST["departments"]; 
    $university=$_POST["university"];
    $faculty=$_POST["faculty"];
    $doctorjob=$_POST["doctor_jobs"];
    
    $Details = mysqli_query($bis , "UPDATE doctors_account SET 
    Doctor_ar_Name='$Doctor_ar_Name',Doctor_eng_Name='$Doctor_eng_Name',
    National_id='$National_id',Mobile='$Mobile',Academic_Mail='$Academic_Mail',
    Personal_Mail='$Personal_Mail',Notes='$Notes',Doctor_image='$Doctor_image',
    departments='$department',university='$university',faculty='$faculty',
    doctor_jobs='$doctorjob', qualifications='$qualifications',
    date_of_birth ='$date_of_birth' , hiring_date ='$hiring_date'  WHERE DoctorCode='$id'");

}

    
    
$query_appata = "SELECT * FROM departments";
$result = $bis->query($query_appata);
$appata = mysqli_query ($bis, $query_appata) or die (mysqli_error ($bis));
$row_appata = mysqli_fetch_assoc ($appata);
$departments=array($row_appata);
while($row=mysqli_fetch_assoc($appata)){
    array_push($departments,$row);
}
$_SESSION ['departments']=$departments;
;
$doctor_jobs = "SELECT * FROM doctor_jobs";
$result = $bis->query($doctor_jobs);
$appata = mysqli_query ($bis, $doctor_jobs) or die (mysqli_error ($bis));
$row_appata = mysqli_fetch_assoc ($appata);
$doctor_jobs=array($row_appata);
while($row=mysqli_fetch_assoc($appata)){
    array_push($doctor_jobs,$row);
}
$_SESSION ['doctor_jobs']=$doctor_jobs;

$universities = "SELECT * FROM universities";
$result = $bis->query($universities);
$appata = mysqli_query ($bis, $universities) or die (mysqli_error ($bis));
$row_appata = mysqli_fetch_assoc ($appata);
$universities=array($row_appata);
while($row=mysqli_fetch_assoc($appata)){
    array_push($universities,$row);
}
$_SESSION ['universities']=$universities;

$faculties = "SELECT * FROM faculties";
$result = $bis->query($faculties);
$appata = mysqli_query ($bis, $faculties) or die (mysqli_error ($bis));
$row_appata = mysqli_fetch_assoc ($appata);
$faculties=array($row_appata);
while($row=mysqli_fetch_assoc($appata)){
    array_push($faculties,$row);
}
$_SESSION ['faculties']=$faculties;
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
    
    <form action="" method="post">
    <div class="w-75 mx-auto m-5">
        <h3 class="mainTitle text-end p-2">إدخال بيانات عضو جديد</h3>
        <div class="container dataContainer p-3">
            <div class="row mb-5">
                <div class="col-md-4 mx-auto">
                    <div class="profilePicture mx-auto">
                        <img class="w-100 rounded-circle" id="profile">
                        <label for="imageSelectionField" class="imageSelection">
                            <i class="fa-solid fa-plus" style="color: #AAB2BA;"></i>
                        </label>
                    </div>
                    <input type="file" accept="image/*" id="imageSelectionField" class="d-none" value="<?php if (isset($_GET['id'])) {echo $Doctor_image;}?>" name="Doctor_image">
                </div>
            </div>
            <div class="row my-2">
                <div class="col-md-4">
                    <input type="text" class="form-control" placeholder="الاسم باللغة العربية" value="<?php if (isset($_GET['id'])) {echo $Doctor_ar_Name;}?>" name="Doctor_ar_Name">
                </div>
                <div class="col-md-4">
                    <input type="text" class="form-control" placeholder="الاسم باللغة الانجليزية" value="<?php if (isset($_GET['id'])) {echo $Doctor_eng_Name;}?>" name="Doctor_eng_Name">
                </div>
                <div class="col-md-4">
                    <input type="text" class="form-control" placeholder=" الرقم القومى" id="nationalID" value="<?php if (isset($_GET['id'])) {echo $National_id;}?>" name="National_id">
                </div>
            </div>
            <div class="row my-2">
                <div class="col-md-4">
                    <input type="text" class="form-control" placeholder="تاريخ الميلاد" value="<?php if (isset($_GET['id'])) {echo $date_of_birth;}?>" name="date_of_birth" id="birthDate">
                </div>
                <div class="col-md-4">
                    <input type="email" class="form-control" placeholder="الايميل الشخصى" value="<?php if (isset($_GET['id'])) {echo $Personal_Mail;}?>" id="personalEmail" name="Personal_Mail">
                </div>
                <div class="col-md-4">
                    <input type="tel" class="form-control" placeholder="رقم الهاتف" value="<?php if (isset($_GET['id'])) {echo $Mobile;}?>" id="phoneNumber" name="Mobile">
                </div>
            </div>
            <div class="row my-2">
                <div class="col-md-4">
                    <select name="university" class="form-select" id="university">
                    <?php foreach($universities as $row){?>
                        <option selected value='<?php echo $row['uni_eng_name'];?>'> <?php echo $row['uni_ar_name']?></option>
                        <?php } if (isset($_GET['id'])){?> <option selected value=''> <?php echo $university;} ?></option>?>
                    </select>
                </div>
                <div class="col-md-4">
                    <select name="faculty" class="form-select" id="faculty">
                    <?php foreach($faculties as $row){?>
                        <option selected value='<?php echo $row['Faculty_eng_name']?>'><?php echo $row['Faculty_ar_name']?> </option>
                        <?php } if (isset($_GET['id'])){?> <option selected value=''> <?php echo $faculty;} ?></option>
                    </select>
                </div>
                <div class="col-md-4">
                    <select name="departments" class="form-select" id="department">
                    <option selected value="">القسم</option>
                    <?php foreach ($departments as $row){?>
                        <option value='<?php echo $row['Department_eng_name']?>'><?php echo $row['Department_ar_name']?></option> 
                        <?php } if (isset($_GET['id'])){?> <option selected value=''> <?php echo $department;} ?></option> 
                    </select>
                </div>
            </div>
            <div class="row my-2">
                <div class="col-md-4">
                    <select name="doctor_jobs" class="form-select" id="job">
                    <option selected value="">الدرجة الوظيفية الحالية</option>
                    <?php  foreach($doctor_jobs as $row){?>
                        <option value='<?php echo $row['Doctor_job_eng_name']?>'><?php echo $row['Doctor_job_ar_name']?></option>
                        <?php } if (isset($_GET['id'])){?> <option selected value=''> <?php echo $doctorjob;} ?></option>
                    </select>
                </div>
                <div class="col-md-4">
                    <input type="text" class="form-control" placeholder="تاريخ التعيين" value="<?php if (isset($_GET['id'])) {echo $hiring_date;}?>" name="hiring_date" id="hiringDate">
                </div>
                <div class="col-md-4">
                    <input type="email" class="form-control" placeholder="الايميل الاكاديمى" value="<?php if (isset($_GET['id'])) {echo $Academic_Mail;}?>" id="academicEmail" name="Academic_Mail">
                </div>
            </div>
            <div class="row my-2">
                <div class="col-md-12">
                    <textarea name="qualifications" id="Qualifications" rows="3" value="<?php if (isset($_GET['id'])) {echo $qualifications;}?>" placeholder="المؤهلات العلمية" class="form-control fs-4"></textarea>
                </div>
            </div>
            <div class="row my-2">
                <div class="col-md-12">
                    <textarea name="Notes" id="notes" rows="3"  placeholder="ملاحظــــــــــــات" value="<?php if (isset($_GET['id'])) {echo $Notes;}?>" class="form-control fs-4"></textarea>
                </div>
            </div>
            <div class="row my-2 justify-content-end">
                <div class="col-md-2">
                <a href="memberDetails.php?id=<?php echo $Doctor_Code?>"><button type="submit" class="updateMemberDataBtn rounded-pill border-0 w-100 my-3"  id="updateMemberData" name="updateMemberData">تعديل</button></a>
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