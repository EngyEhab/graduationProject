<?php

include "../Connections/syscon.php";
session_start();
if (!isset($_SESSION['username'])) {
    header("location:../index.php");
    exit;
} else {
    $now = time();
    if ($now > $_SESSION['expire']) {
        session_destroy();
        header("Location: ../index.php");
    }
}


mysqli_select_db($bis, $database_bis);
$query_appata = "SELECT * FROM application_data INNER JOIN users";
$appata = mysqli_query($bis, $query_appata) or die(mysqli_error($bis));
$row_appata = mysqli_fetch_assoc($appata);

$_SESSION['Uni_name'] = $row_appata['Uni_name'];
$_SESSION['app_name'] = $row_appata['app_name'];
$_SESSION['Faculty_name'] = $row_appata['Faculty_name'];
$_SESSION['Program_name'] = $row_appata['Program_name'];
$_SESSION['Faculty_Uni_logo'] = $row_appata['Faculty_Uni_logo'];
$_SESSION['Program_logo'] = $row_appata['Program_logo'];
?>

<!DOCTYPE html>
<html lang="ar">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>النظام الإلكترونى لإدارة شئون أعضاء هيئة التدريس</title>
</head>

<body>
    <header>
        <div class="container bg-white">
            <div class="row gx-0 align-items-center justify-content-center">
                <!-- start user image , name and link to logout -->
                <div class="col-xxl-1 col-md col-3">
                    <div class="user pt-2 text-center">
                        <div class="userImage me-1">
                            <img src="../images/users/<?php echo $_SESSION['image'] ?>" class="w-100 h-100 ratio-1x1 rounded-circle" alt="user-image">
                        </div>
                        <p class="mainTitle fs-4 mb-0 mt-1 lh-1">
                            <?php echo $_SESSION['user_ar_name'] ?>
                        </p>
                        <a href="logout.php" class="mainText fs-4 text-decoration-none lh-1">خروج</a>
                    </div>
                </div>
                <!-- end user image , name and link to logout -->

                <!-- start application data -->
                <div class="col-xxl-7 col-md-6 col-sm text-center">
                    <h1 class="mainTitle pb-2"> <?php echo $_SESSION['app_name']; ?> </h1>
                    <div class="row gx-0">
                        <h4 class="mainText col-xxl col-sm">
                            <?php echo $_SESSION['Uni_name']; ?> </h4>
                        <h4 class="mainText col-xxl col-sm"><?php echo $_SESSION['Faculty_name'] ?></h4>
                        <h4 class="mainText col-xxl col-sm"><?php echo $_SESSION['Program_name'] ?></h4>
                    </div>
                </div>
                <!-- end application data -->

                <!-- start logo bis and helwan -->
                <div class="col-xxl-1 col-sm-1">
                    <img src="../images/<?php echo $_SESSION['Program_logo'] ?>" class="w-100 logo" alt="BIS-LOGO">
                </div>

                <div class="col-xxl-1 col-sm-1">
                    <img src="../images/<?php echo $_SESSION['Faculty_Uni_logo'] ?>" class="w-100 logo" alt="Helwan-LOGO">
                </div>
                <!-- end logo bis and helwan -->
            </div>
        </div>

        <nav class="navbar navbar-expand-lg">
            <div class="container-fluid">
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                        <li class="nav-item linkStyle">
                            <a class="nav-link fs-5" href="home.php">الصفحة الرئيسية</a>
                        </li>
                        <li class="nav-item linkStyle">
                            <a class="nav-link fs-5" href="members.php">أعضاء هيئة التدريس</a>
                        </li>
                        <li class="nav-item linkStyle">
                            <a class="nav-link fs-5" href="penalties.php">العقوبات أو الجزاءات</a>
                        </li>
                        <li class="nav-item linkStyle">
                            <a class="nav-link fs-5" href="vacations.php"> الأجــــازات الدراسية</a>
                        </li>
                        <li class="nav-item linkStyle">
                            <a class="nav-link fs-5" href="privateVacations.php">الأجــــازات الخاصـــة</a>
                        </li>
                        <li class="nav-item linkStyle">
                            <a class="nav-link fs-5" href="secondments.php">الإعــــــارات</a>
                        </li>
                        <li class="nav-item linkStyle">
                            <a class="nav-link fs-5" href="missions.php">البعثــــــــــــــات </a>
                        </li>
                        <li class="nav-item linkStyle">
                            <a class="nav-link fs-5" href="assignments.php">الإنتدابـــــــــــــات </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- end navbar -->
    </header>

</body>

</html>