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
        <h3 class="mainTitle text-end p-2">إدخال بيانات مستخدم جديد</h3>
        <div class="container dataContainer p-3">
            <div class="row mb-5">
                <div class="col-md-4 mx-auto">
                    <div class="profilePicture mx-auto border-0">
                        <img class="w-100 h-100 ratio-1x1 rounded-circle" id="profile">
                        <label for="imageSelectionField" class="imageSelection">
                            <i class="fa-solid fa-plus" style="color: #AAB2BA;"></i>
                        </label>
                    </div>
                    <input type="file" accept="image/*" id="imageSelectionField" class="d-none" name="Doctor_image" required="">
                </div>
            </div>
            <div class="row my-2">
                <div class="col-md-4">
                    <input type="text" class="form-control" placeholder="اسم المستخدم باللغة العربية" 	 name="user_ar_Name">
                </div>
                <div class="col-md-4">
                    <input type="text" class="form-control" placeholder="اسم المستخدم باللغة الانجليزية"  name="userName">
                </div>
                <div class="col-md-4">
                    <select name="userType" id="userType" class="form-select">
                        <option value="">نوع المستخدم</option>
                        <option value="admin">مسئول نظام</option>
                        <option value="employee">موظف</option>
                    </select>
                </div>
            </div>
            <div class="row my-2">
                <div class="col-md-4">
                    <input type="password" class="form-control" placeholder="كلمة المرور" 	 name="password">
                </div>
                <div class="col-md-4">
                    <input type="password" class="form-control" placeholder="تأكيد كلمة المرور"  name="confirmPassword">
                </div>  
            </div>

            <div class="row my-2">
                <div class="col-md-12">
                    <textarea name="Notes" id="notes" rows="3"  placeholder="ملاحظــــــــــــات" class="form-control fs-4"></textarea>
                </div>
            </div>
            <div class="row my-2 justify-content-end">
                <div class="col-md-2">
                    <button type="submit" class="addUserBtn rounded-pill border-0 w-100 my-3"  id="submit" name="submit">إضافة</button>
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