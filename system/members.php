<?php
include "../Connections/syscon.php";
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

    <!-- start search and add member button -->
    <div class="container-fluid mt-3">
        <div class="row align-items-center justify-content-center">
            <div class="col-md-2">
                <div class="addMember">
                    <a href="addMember.php" class="text-decoration-none text-white">
                        <button class="addMemberBtn rounded-pill w-100 border-0" id="addMemberBtn">إضافة عضو جديد</button>
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
    <!-- end search and add member button -->


    <div class="container my-5">
        <div class="row gy-5 gx-0 justify-content-center " id="members">
            <?php
            if (isset($_POST['search'])) {
                $st = $_POST['search'];
                $myquery = "SELECT * FROM doctors_account WHERE Doctor_ar_Name like '%$st%' ";
                $results = mysqli_query($bis, $myquery);
                while ($row = mysqli_fetch_array($results)) {
            ?>
                    <div class="col-md-3 d-flex justify-content-center">
                        <div class="memberContainer w-75">
                            <a href="memberDetails.php?id=<?php echo $row['DoctorCode'] ?>" class="text-decoration-none">
                                <div class="member rounded-3 bg-white w-100 p-3 text-center mx-auto">
                                    <div class="memberImage rounded-circle mx-auto">
                                        <img src="../images/members/<?php echo $row['Doctor_image'] ?>" class="rounded-circle w-100 h-100 ratio-1x1" alt="">
                                    </div>
                                    <h3 class="mainTitle pt-2"><?php echo $row['Doctor_ar_Name'] ?></h3>
                                </div>
                            </a>
                        </div>
                    </div>
                <?php }
            } else {

                $myquery = "SELECT * FROM doctors_account";
                $results = mysqli_query($bis, $myquery);
                while ($row = mysqli_fetch_array($results)) {
                ?>
                    <div class="col-md-3 d-flex justify-content-center">
                        <div class="memberContainer w-75">
                            <a href="memberDetails.php?id=<?php echo $row['DoctorCode'] ?>" class="text-decoration-none">
                                <div class="member rounded-3 bg-white w-100 p-3 text-center mx-auto">
                                    <div class="memberImage rounded-circle mx-auto">
                                        <img src="../images/members/<?php echo $row['Doctor_image'] ?>" class="rounded-circle w-100 h-100 ratio-1x1" alt="">
                                    </div>
                                    <h3 class="mainTitle pt-2"><?php echo $row['Doctor_ar_Name'] ?></h3>
                                </div>
                            </a>
                        </div>
                    </div>
            <?php }
            } ?>
        </div>
    </div>


    <div class="fixedFooter position-fixed bottom-0 start-0 end-0 z-1">
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