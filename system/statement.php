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
<body class="body statementPage">
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
                    <form action="statement.php" method="post" id="searchForm">
                        <input type="text" class="searchField form-control w-100 rounded-pill border-0 px-4" name="completesearch" placeholder="بحث...">
                    </form>
                </div>
            </div>
        </div>
    </div>
    
    
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-9">
                <table class="table text-center fs-4 bg-white shadow rounded-2">
                    <thead class="mainText table-light">
                        <tr>
                            <th>اسم العضو</th>
                            <th>القسم</th>
                            <th>عرض بيان الحالة </th>
                        </tr>
                    </thead>   
                    <tbody>
                    <?php
            if (isset($_POST['completesearch'])) {
        $st=$_POST ['completesearch'];
        $query="SELECT * FROM doctors_account WHERE Doctor_ar_Name like '%$st%' ";
        $results=mysqli_query($bis,$query);
        while($row=mysqli_fetch_array($results)) {
            
            ?>
                        <tr>
                            <td><?php echo $row['Doctor_ar_Name'] ?></td>
                            <td><?php echo $row['departments'] ?></td>
                            <td><button class="border-0 rounded-pill w-50 fs-4 tableDisplayBtn" name="btn">عرض  </button></td>
                        </tr>
                        <?php }
            }
            ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

   
    <div class="container statement p-5 mt-5 d-none" id="statement">
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
                <p></p>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-2">
                <h4 class="text-start"> تاريخ الميـــــــــلاد :</h4>
            </div>
            <div class="col-md-6">
                <p></p>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-2">
                <h4 class="text-start"> تاريخ التعييــــــــن :</h4>
            </div>
            <div class="col-md-6">
                <p></p>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-2">
                <h4 class="text-start"> المؤهلات العلميــــة :</h4>
            </div>
            <div class="col-md-6">
                <p></p>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-2">
                <h4 class="text-start">التدرج الوظيفــــى :</h4>
            </div>
            <div class="col-md-6">
                <p></p>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-2">
                <h4 class="text-start">الجـــــــــــــــزاءات :</h4>
            </div>
            <div class="col-md-6">
                <p></p>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-2">
                <h4 class="text-start">الإعـــــــــــــــارات :</h4>
            </div>
            <div class="col-md-6">
                <p></p>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-2">
                <h4 class="text-start"> الأجـازات الخاصــــة :</h4>
            </div>
            <div class="col-md-6">
                <p></p>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-2">
                <h4 class="text-start">البعثــــــــــــــــــات :</h4>
            </div>
            <div class="col-md-6">
                <p></p>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-2">
                <h4 class="text-start">الأجازات الدراسية :</h4>
            </div>
            <div class="col-md-6">
                <p></p>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-2">
                <h4 class="text-start">الإنتدابـــــــــــــــات :</h4>
            </div>
            <div class="col-md-6">
                <p></p>
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
    



    <div class="container">
        <div class="row justify-content-end">
            <div class="col-md-2">
                <button id="statementBtn" class="rounded-pill border-0 w-100 my-3 d-none">
                    <span>حـفـظ</span>
                    <i class="fa-solid fa-download fa-sm px-1" style="color: #ffffff;"></i>
                </button>
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