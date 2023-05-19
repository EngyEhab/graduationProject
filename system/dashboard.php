<?php
include "../Connections/syscon.php"; 
$Select=mysqli_query($bis,"SELECT * FROM p74_application_data ");
$row=mysqli_fetch_assoc($Select);


    $app_id=$row['app_id'];
    $app_name=$row['app_name'];
    $Uni_name =$row['Uni_name'];
    $Faculty_name =$row['Faculty_name'];  
    $Program_name = $row['Program_name'];     
    $Faculty_Uni_logo=$row["Faculty_Uni_logo"];                   
    $Program_logo=$row["Program_logo"];                   
    $Faculty_Dean=$row["Faculty_Dean"];                   
    $Post_grad_vice_dean=$row["Post_grad_vice_dean"]; 
    $st_affairs_vice_dean=$row["st_affairs_vice_dean"]; 
    $Program_coordinator=$row["Program_coordinator"];
    
    if (isset($_POST['submit'])){
    // $app_name=$_POST['app_name'];
    $Uni_name =$_POST['Uni_name'];
    $Faculty_name =$_POST['Faculty_name'];  
    $Program_name = $_POST['Program_name'];     
    $Faculty_Uni_logo=$_POST["Faculty_Uni_logo"];                   
    $Program_logo=$_POST["Program_logo"];                   
    $Faculty_Dean=$_POST["Faculty_Dean"];                   
    $Post_grad_vice_dean=$_POST["Post_grad_vice_dean"]; 
    $st_affairs_vice_dean=$_POST["st_affairs_vice_dean"]; 
    $Program_coordinator=$_POST["Program_coordinator"];


    $sql = mysqli_query($bis , "UPDATE p74_application_data SET 
        Uni_name='$Uni_name',Faculty_name='$Faculty_name',
        Program_name='$Program_name',Faculty_Uni_logo='$Faculty_Uni_logo',Program_logo='$Program_logo',
        Faculty_Dean='$Faculty_Dean',Post_grad_vice_dean='$Post_grad_vice_dean',
        st_affairs_vice_dean='$st_affairs_vice_dean',Program_coordinator='$Program_coordinator'
        WHERE app_id='$app_id'");

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
    
    <div class="w-75 mx-auto m-5">
        <h3 class="mainTitle text-end p-2"> بيانات النظام الحالى</h3>
        <div class="container dataContainer p-3">
            <div class="row">
                <div class="col-md-3">
                    <h4 class="mainText fw-bold text-center">الجــامعـــــــــــــــــــــــــــــــة :</h4>
                </div>
                <div class="col-md-9">
                    <p class="fs-4"><?php {echo $Uni_name;}?></p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <h4 class="mainText fw-bold text-center">الكليــــــــــــــــــــــــــــــــــة :</h4>
                </div>
                <div class="col-md-9">
                    <p class="fs-4"><?php {echo $Faculty_name;}?></p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <h4 class="mainText fw-bold text-center">البرنامــــــــــــــــــــــــــــــــج :</h4>
                </div>
                <div class="col-md-9">
                    <p class="fs-4"><?php  {echo $Program_name;}?></p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <h4 class="mainText fw-bold text-center">عميــــــد الكليـــــــــــــــــــــة :</h4>
                </div>
                <div class="col-md-9">
                    <p class="fs-4"><?php  {echo $Faculty_Dean;}?></p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <h4 class="mainText fw-bold text-center">وكيل الكلية لشئون الدراسات العليا والبحوث :</h4>
                </div>
                <div class="col-md-9">
                    <p class="fs-4"><?php  {echo $Post_grad_vice_dean;}?></p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <h4 class="mainText fw-bold text-center">وكيل الكلية لشئون التعليم والطلاب :</h4>
                </div>
                <div class="col-md-9">
                    <p class="fs-4"><?php  {echo $st_affairs_vice_dean;}?></p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <h4 class="mainText fw-bold text-center">منســــــق البرنامـــــــــــج :</h4>
                </div>
                <div class="col-md-9">
                    <p class="fs-4"><?php  {echo $Program_coordinator;}?></p>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row mt-2 justify-content-end">
                <div class="col-md-2">
                    <button type="submit" class="updateSystemDataModalBtn rounded-pill border-0 w-100 mt-3" data-bs-toggle="modal" data-bs-target="#updateSystemDataModal" id="updateSystemDataModalBtn" name="updateSystemDataModalBtn">تحديث</button>
                </div> 
            </div>
        </div>
    </div>

    <form action="" method="post">
        <div class="w-75 mx-auto m-5">
            <div class="modal modal-xl fade" id="updateSystemDataModal">
                <div class="modal-dialog  modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-body">
                            <h3 class="mainTitle text-end p-2">تحديث بيانات النظام</h3>
                            <div class="container dataContainer p-3">
                                <div class="row my-2 align-items-center">
                                    <div class="col-md-2 text-center">
                                        <label for="universityName" class="mainText fw-bold fs-4 text-nowrap"> الجــامعـــــــــــــــــــــــــــــــة  :</label>
                                    </div>
                                    <div class="col-md-10">
                                        <input type="text" name="Uni_name" id="universityName" value="<?php {echo $Uni_name;}?>" class="form-control fs-4"></input>
                                    </div>
                                </div> 
                                <div class="row my-2 align-items-center">
                                    <div class="col-md-2 text-center">
                                        <label for="facultyName" class="mainText fw-bold fs-4 text-nowrap"> الكليــــــــــــــــــــــــــــــــــة  :</label>
                                    </div>
                                    <div class="col-md-10">
                                        <input type="text" name="Faculty_name" id="facultyName" value="<?php {echo $Faculty_name;}?>" class="form-control fs-4"></input>
                                    </div>
                                </div> 

                                <div class="row my-2 align-items-center">
                                    <div class="col-md-2 text-center">
                                        <label for="facultyLogo" class="mainText fw-bold fs-4 text-nowrap"> لوجــــــــــــو الكليـــــــــــــة  :</label>
                                    </div>
                                    <div class="col-md-10">
                                        <input type="file" name="Faculty_Uni_logo" accept="image/*" id="facultyLogo" value="<?php  {echo $Faculty_Uni_logo;}?>" class="form-control fs-4"></input>
                                    </div>
                                </div>

                                <div class="row my-2 align-items-center">
                                    <div class="col-md-2 text-center">
                                        <label for="programName" class="mainText fw-bold fs-4 text-nowrap"> البرنامــــــــــــــــــــــــــــــــج :</label>
                                    </div>
                                    <div class="col-md-10">
                                        <input type="text" class="form-control" name="Program_name" id="programName" value="<?php  {echo $Program_name;}?>">
                                    </div>
                                </div>

                                <div class="row my-2 align-items-center">
                                    <div class="col-md-2 text-center">
                                        <label for="programLogo" class="mainText fw-bold fs-4 text-nowrap"> لوجــــــــــــو البرنامـــــــــــج  :</label>
                                    </div>
                                    <div class="col-md-10">
                                        <input type="file" name="Program_logo" accept="image/*" id="programLogo" value="<?php  {echo $Program_logo;}?>" class="form-control fs-4"></input>
                                    </div>
                                </div>

                                <div class="row my-2 align-items-center">
                                    <div class="col-md-2 text-center">
                                        <label for="facultyDean" class="mainText fw-bold fs-4 text-nowrap"> عميــــــد الكليـــــــــــــــــــــة :</label>
                                    </div>
                                    <div class="col-md-10">
                                        <input type="text" class="form-control" name="Faculty_Dean" id="facultyDean" value="<?php  {echo $Faculty_Dean;}?>">
                                    </div>
                                </div>

                                <div class="row my-2 align-items-center">
                                    <div class="col-md-2 text-center">
                                        <label for="postGradViceDean" class="mainText fw-bold fs-4">وكيل الكلية لشئون الدراسات العليا والبحوث :</label>
                                    </div>
                                    <div class="col-md-10">
                                        <input type="text" class="form-control" name="Post_grad_vice_dean" id="postGradViceDean" value="<?php  {echo $Post_grad_vice_dean;}?>">
                                    </div>
                                </div>

                                <div class="row my-2 align-items-center">
                                    <div class="col-md-2 text-center">
                                        <label for="studentAffairsViceDean" class="mainText fw-bold fs-4">وكيل الكلية لشئون التعليم والطلاب :</label>
                                    </div>
                                    <div class="col-md-10">
                                        <input type="text" class="form-control" name="st_affairs_vice_dean" id="studentAffairsViceDean" value="<?php  {echo $st_affairs_vice_dean;}?>">
                                    </div>
                                </div>

                                <div class="row my-2 align-items-center">
                                    <div class="col-md-2 text-center">
                                        <label for="programCoordinator" class="mainText fw-bold fs-4 text-nowrap"> منســــــق البرنامـــــــــــج :</label>
                                    </div>
                                    <div class="col-md-10">
                                        <input type="text" class="form-control" name="Program_coordinator" id="programCoordinator" value="<?php  {echo $Program_coordinator;}?>">
                                    </div>
                                </div>
                            </div>
                            <div class="container">
                                <div class="row mt-2 justify-content-end">
                                    <div class="col-md-2">
                                        <button type="submit" class="updateSystemDataBtn rounded-pill border-0 w-100 mt-3"  id="submit" name="submit">تحديث</button>
                                    </div> 
                                </div>
                            </div>
                        </div>
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