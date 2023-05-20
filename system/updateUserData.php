<?php
include "../Connections/syscon.php"; 

if (isset($_GET['id'])){
    $id=$_GET['id'];
    
$Select=mysqli_query($bis,"SELECT * FROM p74_users INNER JOIN p74_users_types ON p74_users.user_type_id=p74_users_types.user_type_id WHERE  user_id=$id ");
    $row=mysqli_fetch_assoc($Select);

            $user_ar_name=$row["user_ar_name"]; 
            $username=$row["username"]; 
            $user_type_id=$row["user_type_id"]; 
            $password=$row["password"]; 
            $Notes=$row["Notes"]; 
            $image=$row["image"]; 
            $user_type_ar_name=$row["user_type_ar_name"]; 
}

if (isset($_POST['submit'])){

    $user_ar_name=$_POST["user_ar_name"]; 
    $username=$_POST["username"]; 
    $user_type_id=$_POST["user_type_id"]; 
    $password=$_POST["password"]; 
    $Notes=$_POST["Notes"]; 
    $image=$_POST["image"]; 

    if ((!empty($image))){
        $Details = mysqli_query($bis , "UPDATE p74_users SET 
        user_ar_name='$user_ar_name',username='$username',
        user_type_id='$user_type_id',password='$password',Notes='$Notes', image='$image' WHERE user_id='$id'");
        }else{
            $sql = mysqli_query($bis , "UPDATE p74_users SET 
            user_ar_name='$user_ar_name',username='$username',
            user_type_id='$user_type_id',password='$password',Notes='$Notes' WHERE user_id='$id'");
        }
        header("location:../system/users.php");
    
}

$p74_users_types = "SELECT * FROM  p74_users_types";
$result = $bis->query($p74_users_types);
$appata = mysqli_query ($bis, $p74_users_types) or die (mysqli_error ($bis));
$row_appata = mysqli_fetch_assoc ($appata);
$p74_users_types=array($row_appata);
while($row=mysqli_fetch_assoc($appata)){
    array_push($p74_users_types,$row);
}
$_SESSION ['p74_users_types']=$p74_users_types;
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
    
    <form action="" method="post" enctype="multipart/form-data">
    <div class="w-75 mx-auto m-5">
        <div class="container dataContainer p-3">
            <div class="row mb-5">
                <div class="col-md-4 mx-auto">
                    <div class="profilePicture mx-auto border-0">
                        <img class="w-100 h-100 ratio-1x1 rounded-circle" id="profile" src="../images/users/<?php if (isset($_GET['id'])) {echo $image;}?>" >
                        <label for="imageSelectionField" class="imageSelection">
                            <i class="fa-solid fa-plus" style="color: #AAB2BA;"></i>
                        </label>
                    </div>
                    <input type="file" accept="image/*" id="imageSelectionField" class="d-none" name="image" >
                </div>
            </div>
            <div class="row my-2">
                <div class="col-md-4">
                    <input type="text" class="form-control" placeholder="اسم المستخدم باللغة العربية" value="<?php if (isset($_GET['id'])) {echo $user_ar_name;}?>"  name="user_ar_name">
                </div>
                <div class="col-md-4">
                    <input type="text" class="form-control" placeholder="اسم المستخدم باللغة الانجليزية" value="<?php if (isset($_GET['id'])) {echo $username;}?>"  name="username">
                </div>
                <div class="col-md-4">
                    <select name="user_type_id" id="userType" class="form-select">
                        <option value="">نوع المستخدم</option>
                        <?php foreach ($p74_users_types as $row){?>
                        <option value="<?php echo $row['user_type_id']?>"><?php echo $row['user_type_ar_name']?> </option>
                        <?php } if (isset($_GET['id'])){?> <option selected value='<?php echo $row['user_type_id']?>'> <?php echo $user_type_ar_name; }?></option>
                        
                    
                    </select>
                </div>
            </div>
            <div class="row my-2">
                <div class="col-md-4">
                    <input type="password" class="form-control" placeholder="كلمة المرور" value="<?php if (isset($_GET['id'])) {echo $password;}?>" 	 name="password">
                </div>
                <div class="col-md-4">
                    <input type="password" class="form-control" placeholder="تأكيد كلمة المرور" value="<?php if (isset($_GET['id'])) {echo $password;}?>"  name="confirmPassword">
                </div>  
            </div>

            <div class="row my-2">
                <div class="col-md-12">
                    <textarea name="Notes" id="notes" rows="3"  placeholder="ملاحظــــــــــــات" class="form-control fs-4"><?php if (isset($_GET['id'])) {echo $Notes;}?></textarea>
                </div>
            </div>
            <div class="row my-2 justify-content-end">
                <div class="col-md-2">
                    <button type="submit" class="updateBtn rounded-pill border-0 w-100 my-3"  id="submit" name="submit">تعديل</button>
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