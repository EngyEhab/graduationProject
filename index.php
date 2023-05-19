<!-- START login  -->
<?php
session_start();
include ("Connections/syscon.php");
if(isset($_SESSION['username'])){
    header("location:system/home.php");
}
// mysqli_select_db($bis,$database_bis);
// $query_appata = "SELECT * FROM users";
// $appata = mysqli_query ($bis, $query_appata) or die (mysqli_error ($bis));
// $row_appata = mysqli_fetch_assoc ($appata);
// $_SESSION['username'] = $row_appata["username"];
// $_SESSION[ 'user_ar_name' ] = $row_appata ['user_ar_name'];
// $_SESSION ['image'] = $row_appata ['image'];

$con = new mysqli("localhost","root","","staff_affairs");
if($con->connect_error) {
    die("failed to connect : ".$con->connect_error); 
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    // $user_ar_name =$_post['user_ar_name'];
    $password = $_POST['password'];
    // $image = $_post['image'];
    $query = "SELECT * FROM p74_users WHERE username = '$username' AND password = '$password' AND is_enable='yes'";
    $result = $con->query($query);
    if ($result->num_rows === 1) {
        $row = $result->fetch_assoc();
        $username = $row['username'];
        $user_id = $row['user_id'];
        $user_ar_name =$row['user_ar_name'];
        $image = $row['image'];
        $_SESSION['username'] = $username;
        $_SESSION['user_id'] = $row['user_id'];
        $_SESSION['user_ar_name'] = $user_ar_name;
        $_SESSION['image'] = $image;
        $_SESSION['start'] = time();
        $_SESSION['expire'] = $_SESSION['start'] + (4 * 2000);

        header("location:system/home.php?user_id=$_SESSION[user_id]");
        exit();
    } else {
        header("location: index.php");
    }
}
?>
<!-- END login  -->


<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>النظام الإلكترونى لإدارة شئون أعضاء هيئة التدريس</title>
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <!-- start header -->
    <header class="container py-3">
        <div class="row align-items-center">
            <div class="col-lg-3 offset-6 col-md-4 ">
                <div class="mainTitles text-center pt-4">
                    <h2 class="mainText">جامعة حلوان</h2>
                    <h2 class="mainText">كلية التجارة و إدارة الأعمال</h2>
                    <h2 class="mainText"> برنامج نظم معلومات الأعمال BIS</h2>
                </div>
            </div>
            <div class="col-sm">
                <img src="images/Facultylogo.jpg" class="w-100" alt="Helwan-LOGO">
            </div>
            <div class="col-sm">
                <img src="images/program.png" class="w-100" alt="BIS-LOGO">
            </div>
        </div>
        <div class="row pt-5">
            <div class="col-lg-6 text-center mx-auto">
                <h1 class="mainTitle">النظام الإلكترونى لإدارة شئون أعضاء هيئة التدريس</h1>
            </div>
        </div>
    </header>
    <!-- end header -->


    <!-- start login form -->
    <div class="container py-3">
        <div class="row">
            <div class="col-lg-5  mx-auto text-center">
                <div class="login">
                    <h3 class="mainText">تسجيل الدخول</h3>
                    <form method="post" action="" class="loginForm">
                        <input type="text" class="form-control loginInputField" name="username"  required placeholder="اسم المستخدم">
                        <input type="password" class="form-control loginInputField" name="password"  required placeholder="كلمة المرور">
                        <button type="submit" id="loginBtn" class="btn-1 subtext w-100">تسجيل دخول</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- end login form -->


    <!-- start footer -->
    <footer class="position-fixed bottom-0 start-0 end-0">
        <div class="footer py-2 d-flex justify-content-center">
            <span>جميع الحقوق محفوظة ل </span>
            <a href="#" >فريق برنامج BIS 2023</a>
            <div class="bisLogo d-flex align-items-center me-2">
                <img src="images/program.png" alt="BIS-LOGO">
            </div>
        </div>
    </footer>
    <!-- end footer -->


    <script src="js/all.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/main.js"></script>
</body>
</html>
