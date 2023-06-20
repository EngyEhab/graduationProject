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

    <!-- start delete Modal -->
    <div class="modal fade" id="deleteJobGradeModal" data-bs-backdrop="static" data-bs-keyboard="false">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
                    <p class="fs-3 mainTitle fw-bold">هل بالفعل تريد حذف التدرج الوظيفى الخاص بالعضو:</p>
                    <span class="fs-3 mainText"></span>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary fs-4" data-bs-dismiss="modal">الغاء</button>
                    <a href="deleteJobGradeData.php?id=">
                        <button id="deleteBtn" name="deleteBtn" class="btn btn-danger fs-4">حـــذف</button>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- end delete Modal -->


    <div class="container bg-white p-5 shadow mt-5">
        <div class="row align-items-center">
            <div class="col-md-6">
                <div class="jobGradeData p-2">
                    <div class="row">
                        <div class="col-md-3">
                            <h4 class="mainText fw-bold">اســــــــــم العضــــــــــو :</h4>
                        </div>
                        <div class="col-md-9">
                            <p class="fs-4"></p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            <h4 class="mainText fw-bold">الدرجة الوظيفية الحاليـة :</h4>
                        </div>
                        <div class="col-md-9">
                            <p class="fs-4"></p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            <h4 class="mainText fw-bold">التــــــدرج الوظيفـــــــى :</h4>
                        </div>
                        <div class="col-md-9">
                            <p class="fs-4"></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 d-flex justify-content-center align-items-center pb-5">
                <div class="memberPhoto">
                    <img src="../images/members/" class="w-100 h-100 ratio-1x1 rounded-circle shadow" alt="">
                    <h1 class="text-center mainTitle pt-3"></h1>
                </div>
            </div>
        </div>
    </div>
    <div class="container mt-3 mb-5">
        <div class="row justify-content-end">
            <div class="col-md-2">
                <button id="completeBtn" data-bs-toggle="modal" data-bs-target="#completeDataModal" class="btn w-100 rounded-pill fw-bold fs-4 border-2 shadow completeBtn">استكمال</button>
            </div>
            <div class="col-md-2">
                <a href="updateJobGradeData.php?id=">
                    <button id="updateBtn" class="btn btn-warning w-100 rounded-pill fw-bold fs-4 border-2 shadow">تعديــل</button>
                </a>
            </div>
            <div class="col-md-2">
                <button id="deleteBtn" data-bs-toggle="modal" data-bs-target="#deleteJobGradeModal" name="deleteBtn" class="btn btn-danger w-100 rounded-pill fw-bold fs-4 border-2 shadow">حـــذف</button>
            </div>
        </div>
    </div>



    <form action="completeData.php" method="post" id="completeDataForm">
        <div class="w-75 mx-auto m-5">
            <div class="modal modal-xl fade" id="completeDataModal">
                <div class="modal-dialog  modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-body">
                            <div class="container dataContainer p-3" id="completeDataContainer">
                                <div class="row my-2 align-items-center">
                                    <div class="col-md-2 text-center">
                                        <label for="doctorCodeInput" class="mainText fw-bold fs-4 text-nowrap">كــــــــــــــود العضــــــــــــــــو :</label>
                                    </div>
                                    <div class="col-md-10">
                                        <input name="doctorCodeInput" id="doctorCodeInput" readonly class="form-control fs-4"></input>
                                    </div>
                                </div>
                                <div class="row my-2 align-items-center">
                                    <div class="col-md-2 text-center">
                                        <label for="doctorNameInput" class="mainText fw-bold fs-4 text-nowrap">اســــــــــــــم العضــــــــــــــــو :</label>
                                    </div>
                                    <div class="col-md-10">
                                        <input name="doctorNameInput" id="doctorNameInput" readonly class="form-control fs-4"></input>
                                    </div>
                                </div>
                                <input name="doctorJobInput" id="doctorJobInput" readonly class="form-control fs-4 d-none"></input>
                                <div class="row my-2 align-items-center">
                                    <div class="col-md-2 text-center">
                                        <label for="doctorJobNameInput" class="mainText fw-bold fs-4 text-nowrap"> الدرجــة الوظيفيــة الحاليــــــــة :</label>
                                    </div>
                                    <div class="col-md-10">
                                        <input name="doctorJobNameInput" id="doctorJobNameInput" readonly class="form-control fs-4"></input>
                                    </div>
                                </div>
                                <div class="row my-2">
                                    <div class="col-md-2 text-center">
                                        <label for="CompleteData" class="mainText fw-bold fs-4 ">استكمـال بيانـات الدرجــــــــة الوظيفية الحاليـــــة :</label>
                                    </div>
                                    <div class="col-md-10">
                                        <textarea name="CompleteData" id="CompleteData" rows="5" class="form-control fs-4" required></textarea>
                                    </div>
                                </div>
                                <div class="row my-2 justify-content-end">
                                    <div class="col-md-2">
                                        <button type="submit" class="CompleteDataBtn rounded-pill border-0 w-100 my-3" id="CompleteDataBtn" name="CompleteDataBtn">استكمال</button>
                                    </div>
                                </div>
                            </div>
                        </div>
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