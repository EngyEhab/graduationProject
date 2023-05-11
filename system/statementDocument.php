<?php 
// session_start();
include "../Connections/syscon.php"; 
if(isset($_GET['id'])){
    $id=$_GET['id'];
    $query1 = "SELECT * FROM doctors_account WHERE DoctorCode = '$id' ";
    $results1 =mysqli_query($bis, $query1);
    $row1 = mysqli_fetch_array($results1);

    $query2 = "SELECT * FROM penalities WHERE DoctorCodeInput = '$id' ";
    $results2 =mysqli_query($bis, $query2);
    $row2 = mysqli_fetch_array($results2);

    $query3 = "SELECT * FROM addsecondment_data WHERE DoctorCodeInput = '$id' ";
    $results3 =mysqli_query($bis, $query3);
    $row3 = mysqli_fetch_array($results3);

    $query4 = "SELECT * FROM addvacation_data WHERE DoctorCodeInput = '$id' ";
    $results4 =mysqli_query($bis, $query4);
    $row4 = mysqli_fetch_array($results4);

    $query5 = "SELECT * FROM completedata WHERE DoctorCodeInput = '$id' ";
    $results5 =mysqli_query($bis, $query5);
    $row5 = mysqli_fetch_array($results5);

    // $query6 = "SELECT * FROM public_vacation WHERE DoctorCodeInput = '$id' ";
    // $results6 =mysqli_query($bis, $query6);
    // $row6 = mysqli_fetch_array($results6);

    // $query7 = "SELECT * FROM assignments WHERE DoctorCodeInput = '$id' ";
    // $results7 =mysqli_query($bis, $query7);
    // $row7 = mysqli_fetch_array($results7);
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
<body>
    <div class="container statement p-5 my-5" id="statement">
        <div class="row align-items-end">
            <div class="col-md-4">
                <div class="universityData text-center" >
                    <img src="../images/Facultylogo.jpg" class="w-25" alt="facultyLogo">
                    <h3 class="pt-1 mb-0">Helwan University</h3>
                    <p>*******************</p>
                </div>
            </div>
            <div class="col-md-4 align-self-center">
                <div class="text-center">
                    <h1>بيـان حالـة</h1>
                </div>
            </div>
            <div class="col-md-4">
                <div class="text-center">
                    <h3>الإدارة العامة لشئون الأفراد</h3>
                    <h3>و أعضاء هيئة التدريس</h3>
                    <h3>إدارة وثائق الخدمة</h3>
                    <p>*******************</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <p class="fs-3 text-center">نفيد انه بالاطلاع على ملف خدمة سيادته بالجامعة وجد الآتى:</p>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-2">
                <h4 class="text-start"> الإســــــــــــــــــــم : </h4>
            </div>
            <div class="col-md-6">
                <p><?php if ((!empty($row1['Doctor_ar_Name']))){echo $row1['Doctor_ar_Name'];} else{ echo "لا يوجد";}?></p>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-2">
                <h4 class="text-start"> تاريخ الميـــــــــلاد :</h4>
            </div>
            <div class="col-md-6">
                <p><?php if ((!empty($row1['date_of_birth']))){echo $row1['date_of_birth'];}else{ echo "لا يوجد";}?></p>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-2">
                <h4 class="text-start"> تاريخ التعييــــــــن :</h4>
            </div>
            <div class="col-md-6">
                <p><?php if ((!empty($row1['hiring_date']))){echo $row1['hiring_date'];}else{ echo "لا يوجد";}?></p>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-2">
                <h4 class="text-start"> المؤهلات العلميــــة :</h4>
            </div>
            <div class="col-md-6">
                <p><?php if ((!empty($row1['qualifications']))){echo $row1['qualifications'];}else{ echo "لا يوجد";}?></p>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-2">
                <h4 class="text-start">التدرج الوظيفــــى :</h4>
            </div>
            <div class="col-md-6">
                <p><?php if ((!empty($row5['doctorJobInput']))){echo $row5['doctorJobInput'];}else{ echo "لا يوجد";}?></p>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-2">
                <h4 class="text-start">الجـــــــــــــــزاءات :</h4>
            </div>
            <div class="col-md-6">
                <p>لا يوجد</p>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-2">
                <h4 class="text-start">الإعـــــــــــــــارات :</h4>
            </div>
            <div class="col-md-6">
                <p><?php if ((!empty($row3['secondmentDescription']))){echo $row3['secondmentDescription'];}else{ echo "لا يوجد";}?></p>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-2">
                <h4 class="text-start"> الأجـازات الخاصــــة :</h4>
            </div>
            <div class="col-md-6">
                <p><?php if ((!empty($row4['vacationDescription']))){echo $row4['vacationDescription'];}else{ echo "لا يوجد";}?></p>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-2">
                <h4 class="text-start">البعثــــــــــــــــــات :</h4>
            </div>
            <div class="col-md-6">
                <p>لا يوجد</p>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-2">
                <h4 class="text-start">الأجازات الدراسية :</h4>
            </div>
            <div class="col-md-6">
                <p>لا يوجد</p>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-2">
                <h4 class="text-start">الإنتدابـــــــــــــــات :</h4>
            </div>
            <div class="col-md-6">
                <p>لا يوجد</p>
            </div>
        </div>
            
        <div class="row">
            <div class="col-md-12 text-center fs-3">
                <p class="mb-0">****************************************************************************</p>
            </div>
            <div class="col-md-12 text-center fs-3">
                <p>و قد أعطيت لسيادته هذا البيان بناء على طلبه و ذلك لتقديمه إلى (&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;) ...</p>
            </div>
        </div>
    </div>
    
</body>
</html>