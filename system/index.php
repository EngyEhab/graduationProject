<?php

if (!isset($_SESSION)) {
  session_start();
}


if ((!isset($_SESSION['userid'])) or ($_SESSION['userid'] == ""))

{
	  echo ' 
		   <script type="text/javascript"> 
			  window.location = "../index.php" 
		   </script>';
 }

?>

<?php
// ** Logout the current user. **
$logoutAction = $_SERVER['PHP_SELF']."?doLogout=true";
if ((isset($_SERVER['QUERY_STRING'])) && ($_SERVER['QUERY_STRING'] != "")){
  $logoutAction .="&". htmlentities($_SERVER['QUERY_STRING']);
}

if ((isset($_GET['doLogout'])) &&($_GET['doLogout']=="true")){
  //to fully log out a visitor we need to clear the session varialbles
  $_SESSION['userid'] = NULL;
  $_SESSION['userarname'] = NULL;
  $_SESSION['userimage'] = NULL;
  $_SESSION['app_name'] = NULL;
  $_SESSION['uniname'] = NULL;
  $_SESSION['faclutyname'] = NULL;
  $_SESSION['programnanme'] = NULL;
  $_SESSION['facultylogo'] = NULL;
  $_SESSION['programlogo'] = NULL;
  $_SESSION['deanname'] = NULL;
  $_SESSION['postvicedean'] = NULL;
  $_SESSION['affairsvicedean'] = NULL;
  $_SESSION['programcoordinator'] = NULL;
  $_SESSION['MM_UserGroup'] = NULL;
  $_SESSION['PrevUrl'] = NULL;
  
  
  unset($_SESSION['userid']);
  unset($_SESSION['userarname']);
  unset($_SESSION['userimage']);
  unset($_SESSION['app_name']);
  unset($_SESSION['uniname']);
  unset($_SESSION['faclutyname']);
  unset($_SESSION['programnanme']);
  unset($_SESSION['facultylogo']);
  unset($_SESSION['programlogo']);
  unset($_SESSION['deanname']);
  unset($_SESSION['postvicedean']);
  unset($_SESSION['affairsvicedean']);
  unset($_SESSION['programcoordinator']); 
  unset($_SESSION['MM_UserGroup']);
  unset($_SESSION['PrevUrl']);
	
  $logoutGoTo = "../index.php";
  if ($logoutGoTo) {
  
echo ' 
		   <script type="text/javascript"> 
			  window.location = "index.php?page=Blocked" 
		   </script>';
		       exit;
  }
}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo $_SESSION['app_name']; ?></title>
<style type="text/css">
<!--
body {
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
}
.style225 {
	color: #FFFFFF;
	font-weight: bold;
}
a {
	font-family: Calibri;
	color: #FFFFFF;
	font-weight: bold;
}
a:hover {
	color: #FF0000;
	text-decoration: none;
}
a:link {
	text-decoration: none;
	color: #003366;
}
a:visited {
	text-decoration: none;
	color: #003366;
}
a:active {
	text-decoration: none;
	color: #003366;
}
body,td,th {
	font-family: Calibri;
	font-size: 18px;
	font-weight: bold;
}
.style52 {color: #FFFFFF}
.style54 {color: #99FF66}
.style56 {color: #990000}
.style57 {color: #006699}
.style58 {color: #FFFF00}
</style>

</head>

<body>
<table width="90%" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr >
    <td width="50%" height="30" align="center" valign="middle"  ><h2 class="style54"><span class="style56"><?php echo $_SESSION['app_name']; ?></span><br />
        <span class="style57" ><?php echo $_SESSION['uniname']; ?> - <?php echo $_SESSION['faclutyname']; ?><br />
    <?php echo $_SESSION['programnanme']; ?></span></h2></td>
    <td width="15%" align="right" valign="middle" ><img src="../images/<?php echo $_SESSION['facultylogo'];?>" alt="" width="140" height="140" class="logo" srcset="" /></td>
    <td width="15%" align="left" valign="middle"><?php if($_SESSION['programlogo'] != '') { ?>
      <img src="../images/<?php echo $_SESSION['programlogo'];?>" alt="" width="130" height="120" class="logo" srcset="" />
      <?php } ?></td>
    <td width="20%" align="center" valign="middle" ><a href="<?php echo $logoutAction ?>"><img src="../images/users/<?php echo $_SESSION['userimage']; ?>" alt="\" width="60" height="60" style="border:thick #006699 ridge" /><br />
      <span class="style240 style52"><span class="style56"><?php echo $_SESSION['userarname']; ?></span><br />
      </span></a><a href="<?php echo $logoutAction ?>"><span class="style229">خروج</span></a></td>
  </tr>
  <tr>
    <td height="480" colspan="4" align="center" valign="top" bgcolor="#FFFFFF"><hr align="center" width="100%" />    <p>&nbsp;</p>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <p>&nbsp;</p>      </td>
  </tr>
  <tr>
    <td colspan="4" valign="top">&nbsp;</td>
  </tr>
  <tr bgcolor="<?php echo $color; ?>">
    <td height="30" colspan="4" align="center" bgcolor="#3399CC"><span class="style225"><span class="style237 style58"><a href="team.php">BIS 2023</a></span> جميع الحقوق محفوظه لــــــــــ <span class="style237 style58"><a href="team.php">فريق برنامج </a></span></span></td>
  </tr>
</table>

</body>

</html>
