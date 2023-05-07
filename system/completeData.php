<?php
include "../Connections/syscon.php";
$id=""; 
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
    
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="search">
                    <form action="completeData.php" method="post" id="searchForm">
                        <input type="text" class="searchField form-control w-100 rounded-pill border-0 px-4" name="completesearch" placeholder="بحث...">
                    </form>
                </div>
            </div>
            <!-- <div class="col-md-6">
                <select name="memberSelected" required class="form-select fs-5 border-0 shadow rounded-pill" id="memberSelection">
                    <option selected value="">اختر العضو</option>
                    <option value="mohamed">محمد عبد السلام</option>
                </select>
            </div> -->
        </div>
    </div>

    <div class="container">
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
                    $cst=$_POST['completesearch'];
                    $myquery="SELECT * FROM doctors_account WHERE Doctor_ar_Name like '%$cst%'";
                    $results=mysqli_query($bis,$myquery);
                    while ($row=mysqli_fetch_array($results)){
                    ?>
                        <tr>
                            <td><?php echo $row['DoctorCode'];?></td>
                            <td><?php echo $row['Doctor_ar_Name']?></td>
                            <td><?php echo $row['doctor_jobs']?></td>
                            <td><button name= "tableCompletedata" doctorCode ="<?php echo $row['DoctorCode'];?>" doctorName="<?php echo $row['Doctor_ar_Name']?>" doctorJob="<?php echo $row['doctor_jobs']?>" class="border-0 rounded-pill w-50 fs-4 tableCompleteDataBtn">استكمال</button></td>
                        </tr>
                    <?php }
                        
            }
                else { 
                        $myquery="SELECT * FROM doctors_account";
                        $results=mysqli_query($bis,$myquery);
                        $results=mysqli_query($bis,$myquery);
                    while ($row=mysqli_fetch_array($results)){?>
                    
                        <tr>
                            <td><?php echo $row['DoctorCode'];?></td>
                            <td><?php echo $row['Doctor_ar_Name']?>  </td>
                            <td><?php echo $row['doctor_jobs']?></td>
                            <td><button name= "tableCompletedata" doctorCode ="<?php echo $row['DoctorCode'];?>" doctorName="<?php echo $row['Doctor_ar_Name']?>" doctorJob="<?php echo $row['doctor_jobs']?>" class="border-0 rounded-pill w-50 fs-4 tableCompleteDataBtn">استكمال</button></td>
                        </tr>
                    <?php }
                }?>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
   
    <form action="" method="" id="completeDataForm">
        <div class="w-75 mx-auto m-5">
            <div class="container dataContainer p-3 d-none" id="completeDataContainer">
                <div class="row my-2">
                    <div class="col-md-2 text-center">
                        <label for="doctorCodeInput" class="mainText fw-bold fs-4">كود العضو  :</label>
                    </div>
                    <div class="col-md-10">
                        <input name="doctorCodeInput" id="doctorCodeInput" readonly class="form-control fs-4"></input>
                    </div>
                </div> 
                <div class="row my-2">
                    <div class="col-md-2 text-center">
                        <label for="doctorNameInput" class="mainText fw-bold fs-4">اسم العضو  :</label>
                    </div>
                    <div class="col-md-10">
                        <input name="doctorNameInput" id="doctorNameInput" readonly class="form-control fs-4"></input>
                    </div>
                </div> 
                <div class="row my-2">
                    <div class="col-md-2 text-center">
                        <label for="doctorJobInput" class="mainText fw-bold fs-4"> الدرجة الوظيفية الحالية  :</label>
                    </div>
                    <div class="col-md-10">
                        <input name="doctorJobInput" id="doctorJobInput" readonly class="form-control fs-4"></input>
                    </div>
                </div> 
                <div class="row my-2">
                    <div class="col-md-2 text-center">
                        <label for="CompleteData" class="mainText fw-bold fs-4">استكمال بيانات الدرجة الوظيفية الحالية   :</label>
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