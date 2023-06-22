<?php
include "../Connections/syscon.php";
if (isset($_GET['id'])) {

    $id = $_GET['id'];

    $myquery = "SELECT * FROM doctors_account  WHERE DoctorCode = '$id'";
    $results = mysqli_query($bis, $myquery);
    while ($row = mysqli_fetch_array($results)) {
        $DoctorCode = $row['DoctorCode'];
        $Doctor_image = $row['Doctor_image'];
        $Doctor_ar_Name = $row['Doctor_ar_Name'];
    }

    mysqli_select_db($bis, $database_bis);
    $myquery = "SELECT * FROM doctors_account 
                INNER JOIN  doctor_jobs  
                ON doctors_account.Doctor_job_id=doctor_jobs.Doctor_job_id
                WHERE DoctorCode= '$id'";
    $result = $bis->query($myquery);
    if ($result->num_rows === 1 ) {
        $row = $result->fetch_assoc();

        $Doctor_job_ar_name = $row['Doctor_job_ar_name'];
        $Doctor_job_id = $row['Doctor_job_id'];}

    }

        
    
if (isset($_POST['deleteBtn'])) {
    $id = $_GET['id'];
    $Details = mysqli_query($bis, " DELETE FROM p74_penalties WHERE doctorCodeInput='$id'");
}


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

    <div class="container bg-white p-5 shadow mt-5">
        <div class="row align-items-center">
            <div class="col-md-6 borderLeft">
                <div class="jobGradeData p-2">
                    <div class="row">
                        <div class="col-md-3">
                            <h4 class="mainText fw-bold">اســــــــــم العضــــــــــو :</h4>
                        </div>
                        <div class="col-md-9">
                            <p class="fs-4"><?php echo $Doctor_ar_Name; ?></p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            <h4 class="mainText fw-bold">الدرجة الوظيفية الحاليـة :</h4>
                        </div>
                        <div class="col-md-9">
                            <p class="fs-4"><?php echo $Doctor_job_ar_name; ?></p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            <h4 class="mainText fw-bold">التــــــدرج الوظيفـــــــى :</h4>
                        </div>
                        <div class="col-md-9">
                            <table class="col-md-12">
                            <?php $myquery = "SELECT * FROM doctors_account 
                            INNER JOIN  p74_completedata  
                            ON doctors_account.DoctorCode=p74_completedata.doctorCodeInput
                            WHERE doctorCodeInput='$id'";
                            $results = mysqli_query($bis, $myquery);


                            if ( $results->num_rows < 1 ) {
                                ?>
                                <tr>
                                    <td class="fs-4 col-md-9"><?php echo "لا يوجد " ?></td> 
                                </tr> 
                                <?php } else {
                                while ($row = mysqli_fetch_array($results)) {
                                    ?>
                                    <tr>
                                        <td class="fs-4 col-md-9"><?php echo $row['CompleteData'] ?></td>
                                        <td class="col-md-3">
                                            <a href="updateJobGradeData.php?id=<?php echo $row['id_completeData'] ?>" class="text-decoration-none">
                                                <button class="btn btn-warning me-2">
                                                    <i class="fa-solid fa-pencil fa-sm "></i>
                                                </button>
                                            </a>
                                            <a href="deleteJobGradeData.php?id=<?php echo $row['id_completeData'];?>&DoctorCode=<?php echo $row['DoctorCode'];?>" class="text-decoration-none">
                                                <button class="btn btn-danger me-2">
                                                    <i class="fa-solid fa-trash-can fa-sm "></i>
                                                </button>
                                            </a>
                                        </td>
                                    </tr>
                                    <?php } } ?>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 d-flex justify-content-center align-items-center pb-5">
                <div class="memberPhoto">
                    <img src="../images/members/<?php echo $Doctor_image; ?>" class="w-100 h-100 ratio-1x1 rounded-circle shadow" alt="">
                    <h1 class="text-center mainTitle pt-3"><?php echo $Doctor_ar_Name; ?></h1>
                </div>
            </div>
        </div>
    </div>
    <div class="container mt-3 mb-5">
        <div class="row justify-content-end">
            <div class="col-md-2">
                <button id="completeBtn" doctorCode="<?php echo $DoctorCode;?>" doctorName="<?php echo $Doctor_ar_Name; ?>" doctorJobID="<?php echo $Doctor_job_id ?>" doctorJobName="<?php echo $Doctor_job_ar_name;?>" data-bs-toggle="modal" data-bs-target="#completeDataModal" class="btn w-100 rounded-pill fw-bold fs-4 border-2 shadow completeBtn">استكمال</button>
            </div>
        </div>
    </div>

    

    <form action="" method="POST" id="completeDataForm">
    <?php
        
    if (isset($_POST['CompleteDataBtn'])) {
            if (
                isset($_POST['doctorCodeInput']) &&
                isset($_POST['doctorJobNameInput']) && isset($_POST['CompleteData1'])
            ) {
                $doctorCodeInput = $_POST['doctorCodeInput'];
                $doctorJobNameInput = $_POST['doctorJobNameInput'];
                $CompleteData1 = $_POST["CompleteData1"];
                $user_id = $_SESSION['user_id'];
                

                $bis = new mysqli($hostname_bis, $username_bis, $password_bis, $database_bis);
                if ($bis->connect_error) {
                    die('Could not connect to the database.');
                } else {
                    $Select = "SELECT * FROM p74_completedata";
                    $Insert = "INSERT INTO p74_completedata(CompleteData, doctorJobInput, doctorCodeInput, added_by) values(?, ?, ?, ?)";
                    $stmt = $bis->prepare($Select);
                    $stmt = $bis->prepare($Insert);
                    $stmt->bind_param("siii", $CompleteData1, $doctorJobNameInput, $doctorCodeInput, $user_id);
                    if ($stmt->execute()) {
                    } else {
                        echo $stmt->error;
                    }
                }
            }
        }
    
    ?>
        
        <div class="w-75 mx-auto m-5">
            <div class="modal modal-xl fade" id="completeDataModal">
                <div class="modal-dialog  modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-body">
                            <div class="container dataContainer p-3" id="completeDataContainer">
                                <div class="row my-2 align-items-center">
                                    <div class="col-md-2 text-center">
                                        <label for="doctorCodeInput" class="mainText fw-bold fs-4 text-nowrap">كــــــــــــــود العضــــــــــــــــو :</label>
                                    </div>
                                    <div class="col-md-10">
                                        <input name="doctorCodeInput" id="doctorCodeInput" readonly class="form-control fs-4"></input>
                                    </div>
                                </div>
                                <div class="row my-2 align-items-center">
                                    <div class="col-md-2 text-center">
                                        <label for="doctorNameInput" class="mainText fw-bold fs-4 text-nowrap">اســــــــــــــم العضــــــــــــــــو :</label>
                                    </div>
                                    <div class="col-md-10">
                                        <input name="doctorNameInput" id="doctorNameInput"  readonly class="form-control fs-4"></input>
                                    </div>
                                </div>
                                <input name="doctorJobInput" id="doctorJobInput" readonly class="form-control fs-4 d-none"></input>
                                <div class="row my-2 align-items-center">
                                    <div class="col-md-2 text-center">
                                        <label for="doctorJobNameInput" class="mainText fw-bold fs-4 text-nowrap"> الدرجــة الوظيفيــة الحاليــــــــة :</label>
                                    </div>
                                    <div class="col-md-10">
                                        <input name="doctorJobNameInput" id="doctorJobNameInput" readonly class="form-control fs-4"></input>
                                    </div>
                                </div>
                                <div class="row my-2">
                                    <div class="col-md-2 text-center">
                                        <label for="CompleteData" class="mainText fw-bold fs-4 ">استكمـال بيانـات الدرجــــــــة الوظيفية الحاليـــــة :</label>
                                    </div>
                                    <div class="col-md-10">
                                        <textarea name="CompleteData1" id="CompleteData" rows="5" class="form-control fs-4" required></textarea>
                                    </div>
                                </div>
                                <div class="row my-2 justify-content-end">
                                    <div class="col-md-2">
                                        <button type="submit" class="CompleteDataBtn rounded-pill border-0 w-100 my-3" id="CompleteDataBtn" name="CompleteDataBtn">استكمال</button>
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