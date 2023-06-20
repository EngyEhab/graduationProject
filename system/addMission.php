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

    <div class="container my-5">
        <div class="row justify-content-center">
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
                <table class="table text-center fs-4 bg-white shadow rounded-2">
                    <thead class="mainText table-light">
                        <tr>
                            <th>كود العضو</th>
                            <th>اسم العضو</th>
                            <th>الدرجة الوظيفية الحالية</th>
                            <th>إضافة البعثات</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td><button doctorCode="" doctorName="" data-bs-toggle="modal" data-bs-target="#addMissionModal" class="border-0 rounded-pill w-50 fs-4 tableAddMissionBtn">إضافة </button></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td><button doctorCode="" doctorName="" data-bs-toggle="modal" data-bs-target="#addMissionModal" class="border-0 rounded-pill w-50 fs-4 tableAddMissionBtn">إضافة </button></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <form action="" method="POST" id="addMissionForm" enctype="multipart/form-data">
        <div class="w-75 mx-auto m-5">
            <div class="modal modal-xl fade" id="addMissionModal">
                <div class="modal-dialog  modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-body">
                            <div class="container dataContainer p-3">
                                <div class="row my-2 align-items-center">
                                    <div class="col-md-2 text-center">
                                        <label for="doctorCodeInput" class="mainText fw-bold fs-4 text-nowrap">كــــــــــــــود العضــــــــــــــو :</label>
                                    </div>
                                    <div class="col-md-10">
                                        <input name="doctorCodeInput" id="doctorCodeInput" readonly class="form-control fs-4"></input>
                                    </div>
                                </div>
                                <div class="row my-2 align-items-center">
                                    <div class="col-md-2 text-center">
                                        <label for="doctorNameInput" class="mainText fw-bold fs-4 text-nowrap">اســـــــــــــم العضــــــــــــــو :</label>
                                    </div>
                                    <div class="col-md-10">
                                        <input name="doctorNameInput" id="doctorNameInput" readonly class="form-control fs-4"></input>
                                    </div>
                                </div>
                                <div class="row my-2 align-items-center">
                                    <div class="col-md-2 text-center">
                                        <label for="missionDescription" class="mainText fw-bold fs-4 text-nowrap">البعثـــــــــــــــــــــــــــــــــــــة : </label>
                                    </div>
                                    <div class="col-md-10">
                                        <textarea  class="form-control" name="missionDescription" id="missionDescription" required></textarea>
                                    </div>
                                </div>
                                
                                <div class="row my-2 justify-content-end">
                                    <div class="col-md-2">
                                        <button type="submit" class="addMissionBtn rounded-pill border-0 w-100 my-3" id="addMissionBtn" name="submit">إضافة</button>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
    
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