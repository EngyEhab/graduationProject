<?php
if (!isset($_SESSION)) {
  session_start();
}
// connection to database
require_once('Connections/syscon.php'); 

?>

<?php
$loginFormAction = $_SERVER['PHP_SELF'];
if (isset($_GET['accesscheck'])) {
  $_SESSION['PrevUrl'] = $_GET['accesscheck'];
}

if (isset($_POST['user'])) {
  $loginUsername=$_POST['user'];
  $password=$_POST['pass'];
  $MM_fldUserAuthorization = "type";
  $MM_redirectLoginSuccess = "system/index.php";
  $MM_redirectLoginFailed = "index.php?id=1";
  $MM_redirecttoReferrer = false;
  mysqli_select_db($bis,$database_bis);
  	
  $query="SELECT username, password, is_enable, user_ar_name, user_id, user_type_id, image FROM users WHERE UserName='$loginUsername' AND Password='$password' AND is_enable = 'Yes' ";

  $LoginRS = mysqli_query($bis,$query) or die(mysqli_error($bis));
  $row_LoginRS = mysqli_fetch_assoc($LoginRS);
  $loginFoundUser = mysqli_num_rows($LoginRS);
  if ($loginFoundUser>0) {
    
    $loginStrGroup  = $row_LoginRS['Type'];
    
    //declare two session variables and assign them
    $_SESSION['userid'] = $row_LoginRS['user_id'];
	$_SESSION['userarname'] = $row_LoginRS['user_ar_name'];
	$_SESSION['userimage'] = $row_LoginRS['image'];
    $_SESSION['MM_UserGroup'] = $loginStrGroup;	      


    if (isset($_SESSION['PrevUrl']) && false) {
      $MM_redirectLoginSuccess = $_SESSION['PrevUrl'];	
    }
    header("Location: " . $MM_redirectLoginSuccess );
  }
  else {
    header("Location: ". $MM_redirectLoginFailed );
  }
}
?>

<?php

mysqli_select_db($bis,$database_bis);
$query_appata = "SELECT *  FROM `application_data`";
$appata = mysqli_query($bis,$query_appata) or die(mysqli_error($bis));
$row_appata = mysqli_fetch_assoc($appata);

$_SESSION['app_name'] = $row_appata['app_name'];
$_SESSION['uniname'] = $row_appata['Uni_name'];
$_SESSION['faclutyname'] = $row_appata['Faculty_name'];
$_SESSION['programnanme'] = $row_appata['Program_name'];
$_SESSION['facultylogo'] = $row_appata['Faculty-Uni_logo'];
$_SESSION['programlogo'] = $row_appata['Program_logo'];
$_SESSION['deanname'] = $row_appata['Faculty_Dean'];
$_SESSION['postvicedean'] = $row_appata['Post_grad_vice_dean'];
$_SESSION['affairsvicedean'] = $row_appata['st_affairs_vice_dean'];
$_SESSION['programcoordinator'] = $row_appata['Program_coordinator'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $_SESSION['app_name']; ?></title>

    <!--Google Fonts-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">

    <!--Libraries-->
<link rel="stylesheet" href="css/bootstrap.min.css">

    <!--Main Css-->
    
    <link rel="stylesheet" href="css/style.css">
    <style type="text/css">
<!--
.style1 {
	color: #0000FF
}
.style2 {
	font-family: Calibri;
	font-weight: bold;
	color: #006699;
}
.style3 {
	color: #FF0000;
}
-->
    </style>
</head>

<body>
    <div class="container-fluid loginPage">
        <div class="row">

            <!--Div Right-->
            <div class="col-md-5 div-right">
          </div>

            <!--Div Left-->
            <div class="col-md-7 div-left">
                <div class="holder">
      <h2 align="center">
      <img src="images/<?php echo $_SESSION['facultylogo'];?>" alt="" width="130" height="150" class="logo" srcset="">           
      <?php if($_SESSION['programlogo'] != '') { ?> <img src="images/<?php echo $_SESSION['programlogo'];?>" alt="" width="130" height="120" class="logo" srcset=""> <?php } ?>
      
      </h2>
          
   <h3 align="center"><?php echo $_SESSION['uniname']; ?></h3>
      <h4 align="center"><?php echo $_SESSION['faclutyname']; ?></h4>
         <h4 align="center" dir="ltr"><?php echo $_SESSION['programnanme']; ?></h4>
         <h2 align="center" class="style3"><?php echo $_SESSION['app_name']; ?></h2>
         <h2 class="style1" style="font-weight: 600;">&nbsp;تسجيل دخول</h2> 
                  <?php if($_GET['id'] == "1") {  ?> <span class="style2">"عفوا اسم المستخدم أو كلمة المرور غير صحيحة"                    </span> <?php } ?>
                  <form action="<?php echo $loginFormAction; ?>" method="post" class="loginForm mt-4" style="direction: rtl;">
                        <div class="form-floating mb-3">
                          <input type="text" name="user" class="form-control" id="user"
                                placeholder="Username" required = "required">
                          <label for="user">اسم المستخدم</label>
                        </div>
                <div class="form-floating">
                          <input type="password" name="pass" class="form-control" id="pass"
                                placeholder="Password" required = "required">
                          <label for="pass">كلمة المرور</label>
                        </div>

                <input name="prog" type="hidden" id="prog" value="<?php echo $prog; ?>" />
                        <button type="submit" class="btn btn-primary mt-2">تسجيل دخول</button>
                  </form>
                </div>
          </div>

        </div>
    </div>
    <!--JS Libraries-->
    <script src="../js/bootstrap.bundle.min.js"></script>
    <!--Main Js-->
    <script src="../js/main.js"></script>
</body>

</html>