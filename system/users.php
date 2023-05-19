<?php
include "../Connections/syscon.php"; 



    mysqli_select_db($bis,$database_bis);
    $query_appata = "SELECT * FROM p74_application_data INNER JOIN p74_users";
    $appata = mysqli_query ($bis, $query_appata) or die (mysqli_error ($bis));
    $row_appata = mysqli_fetch_assoc ($appata);
    $_SESSION ['user_id'] = $row_appata['user_id'];
    echo $_SESSION ['user_id']

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

    <div class="container my-5">
        <div class="row align-items-center justify-content-center">
            <div class="col-md-2">
                <div class="addUser">
                    <a href="addUser.php" class="text-decoration-none text-white">
                        <button class="addUserBtn rounded-pill w-100 border-0" id="addUserBtn">إضافة مستخدم</button>
                    </a>   
                </div>
            </div>
            <div class="col-md-6">
                <div class="search position-relative">
                    <form action="" method="post" id="searchForm">
                        <input type="text" class="searchField form-control w-100 rounded-pill border-0" name="search" placeholder="بحث...">
                        <button type="submit" class="searchBtn rounded-start-pill">
                            <i class="fa-solid fa-magnifying-glass fa-rotate-90 fa-lg" style="color: #fff;"></i>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="container mb-5">
        <div class="row justify-content-center">
            <div class="col-md-9">
                <table class="table text-center fs-4 bg-white shadow rounded-2 align-middle">
                    <thead class="mainText table-light">
                        <tr>
                            <th>كود المستخدم</th>
                            <th>اسم المستخدم</th>
                            <th>حالة المستخدم</th>
                            <th>الإعدادات</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        if (isset($_POST['search'])) {
                            $st=$_POST ['search'];
                        $myquery="SELECT * FROM  p74_users WHERE user_ar_name like '%$st%' ";
                        $results=mysqli_query($bis,$myquery);
                        while ($row=mysqli_fetch_array($results)){
                        ?>
                        <tr>
                            <td><?php echo $row['user_id']?></td>
                            <td><?php echo $row['user_ar_name']?></td>
                            <td>
                            <?php if ($row['is_enable'] == "no") { ?>
                                <a href="inableUser.php?id=<?php echo $row ['user_id']?>">
                                <button class="btn btn-success w-50 fw-bold fs-5">تمكيــــن  </button>
                                </a>
                                <?php }else{?>
                                
                                <a href="disableUser.php?id=<?php echo $row ['user_id']?>">
                                <button class="btn btn-danger w-50 fw-bold fs-5">تعـطيـــل  </button>
                                </a>
                                <?php } ?>
                            </td>
                            <td>
                                <a href="updateUserData.php" class="text-decoration-none">
                                    <button class="btn btn-warning">
                                        <i class="fa-solid fa-pencil fa-lg p-1"></i>
                                    </button>
                                </a>
                                <a href="deleteUserData.php"class="text-decoration-none">
                                    <button class="btn btn-danger">
                                        <i class="fa-solid fa-trash-can fa-lg p-1"></i>
                                    </button>
                                </a>
                            </td>
                        </tr>
                        <?php }}
                        else{
                            $myquery="SELECT * FROM  p74_users ";
                            $results=mysqli_query($bis,$myquery);
                            while ($row=mysqli_fetch_array($results)){
                            ?>
                        <tr>
                            <td><?php echo $row['user_id']?></td>
                            <td><?php echo $row['user_ar_name']?></td>
                            <td>
                            <?php if ($row['is_enable'] == "no") { ?>
                                <a href="inableUser.php?id=<?php echo $row ['user_id']?>">
                                <button class="btn btn-success w-50 fw-bold fs-5">تمكيــــن  </button>
                                </a>
                                <?php }else{?>
                                
                                <a href="disableUser.php?id=<?php echo $row ['user_id']?>">
                                <button class="btn btn-danger w-50 fw-bold fs-5">تعـطيـــل  </button>
                                </a>
                                <?php } ?>
                            </td>
                            <td>
                                <a href="updateUserData.php" class="text-decoration-none">
                                    <button class="btn btn-warning">
                                        <i class="fa-solid fa-pencil fa-lg p-1"></i>
                                    </button>
                                </a>
                                <a href="deleteUserData.php"  class="text-decoration-none">
                                    <button class="btn btn-danger">
                                        <i class="fa-solid fa-trash-can fa-lg p-1"></i>
                                    </button>
                                </a>
                            </td>
                        </tr>
                        <?php }} ?>
                    </tbody>
                </table>
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