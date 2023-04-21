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
                <div class="search">
                    <form action="">
                        <input type="text" class="searchField form-control w-100 rounded-pill border-0 px-4" name="search" placeholder="بحث...">
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- end search and add member button -->

    <div class="container my-5">
        <div class="row gy-5 gx-0 justify-content-center " id="members">
            <div class="col-md-3">
                <div class="member rounded-3 bg-white w-75 p-3 text-center mx-auto">
                    <div class="memberImage w-50 rounded-circle mx-auto">
                        <img src="../images/1.jpg" class="rounded-circle w-100" alt="">
                    </div>
                    <h3 class="mainTitle pt-2">محمد عبد السلام</h3>
                </div>
            </div>
            <div class="col-md-3">
                <div class="member rounded-3 bg-white w-75 p-3 text-center mx-auto">
                    <div class="memberImage w-50 rounded-circle mx-auto">
                        <img src="../images/1.jpg" class="rounded-circle w-100" alt="">
                    </div>
                    <h3 class="mainTitle pt-2">محمد عبد السلام</h3>
                </div>
            </div>
            <div class="col-md-3">
                <div class="member rounded-3 bg-white w-75 p-3 text-center mx-auto">
                    <div class="memberImage w-50 rounded-circle mx-auto">
                        <img src="../images/1.jpg" class="rounded-circle w-100" alt="">
                    </div>
                    <h3 class="mainTitle pt-2">محمد عبد السلام</h3>
                </div>
            </div>
            <div class="col-md-3">
                <div class="member rounded-3 bg-white w-75 p-3 text-center mx-auto">
                    <div class="memberImage w-50 rounded-circle mx-auto">
                        <img src="../images/1.jpg" class="rounded-circle w-100" alt="">
                    </div>
                    <h3 class="mainTitle pt-2">محمد عبد السلام</h3>
                </div>
            </div>
            <div class="col-md-3">
                <div class="member rounded-3 bg-white w-75 p-3 text-center mx-auto">
                    <div class="memberImage w-50 rounded-circle mx-auto">
                        <img src="../images/1.jpg" class="rounded-circle w-100" alt="">
                    </div>
                    <h3 class="mainTitle pt-2">محمد عبد السلام</h3>
                </div>
            </div>
            <div class="col-md-3">
                <div class="member rounded-3 bg-white w-75 p-3 text-center mx-auto">
                    <div class="memberImage w-50 rounded-circle mx-auto">
                        <img src="../images/1.jpg" class="rounded-circle w-100" alt="">
                    </div>
                    <h3 class="mainTitle pt-2">محمد عبد السلام</h3>
                </div>
            </div>
            <div class="col-md-3">
                <div class="member rounded-3 bg-white w-75 p-3 text-center mx-auto">
                    <div class="memberImage w-50 rounded-circle mx-auto">
                        <img src="../images/1.jpg" class="rounded-circle w-100" alt="">
                    </div>
                    <h3 class="mainTitle pt-2">محمد عبد السلام</h3>
                </div>
            </div>
            <div class="col-md-3">
                <div class="member rounded-3 bg-white w-75 p-3 text-center mx-auto">
                    <div class="memberImage w-50 rounded-circle mx-auto">
                        <img src="../images/1.jpg" class="rounded-circle w-100" alt="">
                    </div>
                    <h3 class="mainTitle pt-2">محمد عبد السلام</h3>
                </div>
            </div>
            <div class="col-md-3">
                <div class="member rounded-3 bg-white w-75 p-3 text-center mx-auto">
                    <div class="memberImage w-50 rounded-circle mx-auto">
                        <img src="../images/1.jpg" class="rounded-circle w-100" alt="">
                    </div>
                    <h3 class="mainTitle pt-2">محمد عبد السلام</h3>
                </div>
            </div>
            <div class="col-md-3">
                <div class="member rounded-3 bg-white w-75 p-3 text-center mx-auto">
                    <div class="memberImage w-50 rounded-circle mx-auto">
                        <img src="../images/1.jpg" class="rounded-circle w-100" alt="">
                    </div>
                    <h3 class="mainTitle pt-2">محمد عبد السلام</h3>
                </div>
            </div>
            <div class="col-md-3">
                <div class="member rounded-3 bg-white w-75 p-3 text-center mx-auto">
                    <div class="memberImage w-50 rounded-circle mx-auto">
                        <img src="../images/1.jpg" class="rounded-circle w-100" alt="">
                    </div>
                    <h3 class="mainTitle pt-2">محمد عبد السلام</h3>
                </div>
            </div>
            <div class="col-md-3">
                <div class="w-75 p-3 text-center mx-auto">
                    <a href="addMember.php" class="text-decoration-none">
                        <div id="plusIcon" class="plusIcon rounded-circle d-flex justify-content-center align-items-center mx-auto">
                            <i class="fa-solid fa-plus fa-2xl fs-1" style="color:#AAB2BA;"></i>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>


    <?php
        include('footer.php');
    ?>

    <script src="../js/all.min.js"></script>
    <script src="../js/bootstrap.bundle.min.js"></script>
    <script src="../js/main.js"></script>
</body>
</html>