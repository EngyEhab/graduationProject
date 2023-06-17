<?php
include "../Connections/syscon.php";

$users_types = "SELECT * FROM  users_types";
$result = $bis->query($users_types);
$appata = mysqli_query($bis, $users_types) or die(mysqli_error($bis));
$row_appata = mysqli_fetch_assoc($appata);
$users_types = array($row_appata);
while ($row = mysqli_fetch_assoc($appata)) {
    array_push($users_types, $row);
}
$_SESSION['users_types'] = $users_types;
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
    <form action="" method="post" id="addUserForm" enctype="multipart/form-data">
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
                        <input type="file" accept="image/*" id="imageSelectionField" class="d-none" name="Doctor_image">
                    </div>
                </div>
                <div class="row my-2">
                    <div class="col-md-4">
                        <input type="text" class="form-control" placeholder="اسم المستخدم باللغة العربية" name="user_ar_Name" required>
                    </div>
                    <div class="col-md-4">
                        <input type="text" class="form-control" placeholder="اسم المستخدم باللغة الانجليزية" name="userName" required>
                    </div>
                    <div class="col-md-4">
                        <select name="user_type_id" id="userType" class="form-select" required>
                            <option value="">نوع المستخدم</option>
                            <?php foreach ($users_types as $row) { ?>
                                <option value="<?php echo $row['user_type_id'] ?>"><?php echo $row['user_type_ar_name'] ?> </option>

                            <?php } ?>
                        </select>
                    </div>
                </div>
                <div class="row my-2">
                    <div class="col-md-4">
                        <input type="password" class="form-control password" placeholder="كلمة المرور" name="password" required>
                    </div>
                    <div class="col-md-4">
                        <input type="password" class="form-control confirmPassword" placeholder="تأكيد كلمة المرور" name="confirmPassword" required>
                    </div>
                </div>

                <div class="row my-2">
                    <div class="col-md-12">
                        <textarea name="Notes" id="notes" rows="3" placeholder="ملاحظــــــــــــات" class="form-control fs-4" required></textarea>
                    </div>
                </div>
                <div class="row my-2 justify-content-end">
                    <div class="col-md-2">
                        <button type="submit" class="addUserBtn rounded-pill border-0 w-100 my-3" id="submit" name="submit">إضافة</button>
                    </div>
                </div>
            </div>
        </div>
    </form>

    <?php
    include('footer.php');
    if (isset($_POST['submit'])) {
        if (
            isset($_POST['user_ar_Name']) && isset($_POST['userName']) &&
            isset($_POST['user_type_id']) && isset($_POST['password'])
            && isset($_POST['Notes'])
        )

        $user_ar_Name = $_POST["user_ar_Name"];
        $userName = $_POST["userName"];
        $user_type_id = $_POST["user_type_id"];
        $password = $_POST["password"];
        $Notes = $_POST["Notes"];
        $imgFile = $_FILES['Doctor_image']['name'];
        $tmp_dir = $_FILES['Doctor_image']['tmp_name'];
        $imgSize = $_FILES['Doctor_image']['size'];
        $user_id = $_SESSION['user_id'];

        if (!empty($imgFile)) {

            $upload_dir = '../images/users/'; // upload directory

            $imgExt = strtolower(pathinfo($imgFile, PATHINFO_EXTENSION)); // get image extension

            // valid image extensions
            $valid_extensions = array('jpeg', 'jpg', 'png', 'gif'); // valid extensions

            // rename uploading image
            $coverpic = rand(1000, 1000000) . "." . $imgExt;

            // allow valid image file formats
            if (in_array($imgExt, $valid_extensions)) {
                // Check file size '5MB'
                if ($imgSize < 5000000) {
                    move_uploaded_file($tmp_dir, $upload_dir . $coverpic);
                }
            }


            $bis = new mysqli($hostname_bis, $username_bis, $password_bis, $database_bis);
            if ($bis->connect_error) {
                die('Could not connect to the database.');
            } else {
                $Select = "SELECT * FROM  users ";
                $Insert = "INSERT INTO  users(user_ar_name, userName, user_type_id,added_by, password, Notes, image ) values(?, ?, ?, ?, ?, ? ,?)";
                $stmt = $bis->prepare($Select);
                $stmt = $bis->prepare($Insert);
                $stmt->bind_param("sssssss", $user_ar_Name, $userName, $user_type_id, $user_id, $password, $Notes, $coverpic);
                if ($stmt->execute()) {
                } else {
                    echo $stmt->error;
                }
            }
        }
    }




    ?>




    <script src="../js/all.min.js"></script>
    <script src="../js/bootstrap.bundle.min.js"></script>
    <script src="../js/jquery-3.6.4.js"></script>
    <script src="../js/main.js"></script>
</body>

</html>