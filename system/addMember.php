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
    <form action="" method="">
    <div class="w-75 mx-auto m-5">
        <h3 class="mainTitle text-end p-2">إدخال بيانات عضو جديد</h3>
        <div class="container dataContainer p-3">
            <div class="row mb-5">
                <div class="col-md-4 mx-auto">
                    <div class="profilePicture mx-auto">
                        <img class="w-100 rounded-circle" id="profile">
                        <label for="imageSelectionField" class="imageSelection">
                            <i class="fa-solid fa-plus" style="color: #AAB2BA;"></i>
                        </label>
                    </div>
                    <input type="file" accept="image/*" id="imageSelectionField" class="d-none">
                </div>
            </div>
            
            <div class="row my-2">
                <div class="col-md-4">
                    <input type="text" class="form-control" placeholder="الاسم باللغة العربية" id="arabicName">
                </div>
                <div class="col-md-4">
                    <input type="text" class="form-control" placeholder="الاسم باللغة الانجليزية" id="englishName">
                </div>
                <div class="col-md-4">
                    <input type="text" class="form-control" placeholder=" الرقم القومى" id="nationalID">
                </div>
            </div>
            <div class="row my-2">
                <div class="col-md-4">
                    <input type="email" class="form-control" placeholder="الايميل الشخصى" id="personalEmail">
                </div>
                <div class="col-md-4">
                    <input type="email" class="form-control" placeholder="الايميل الاكاديمى" id="academicEmail">
                </div>
                <div class="col-md-4">
                    <input type="tel" class="form-control" placeholder="رقم الهاتف" id="phoneNumber">
                </div>
            </div>
            <div class="row my-2">
                <div class="col-md-4">
                    <select name="university" class="form-select" id="university">
                        <option selected value="helwan">جامعة حلوان</option>
                    </select>
                </div>
                <div class="col-md-4">
                    <select name="faculty" class="form-select" id="faculty">
                        <option selected value="commerce"> كلية التجارة و إدارة الأعمال</option>
                    </select>
                </div>
                <div class="col-md-4">
                    <select name="department" class="form-select" id="department">
                        <option selected value="">القسم</option>
                        <option value="accountingDepartment">قسم المحاسبة</option>
                        <option value="managementDepartment">قسم إدارة الأعمال</option>
                        <option value="economics&foreignTradeDepartment">قسم الاقتصاد والتجارة الخارجية</option>
                        <option value="statisticalDepartment">قسم الإحصاء</option>
                        <option value="politicalScienceDepartment">قسم العلوم السياسية</option>
                        <option value="informationSystemsDepartment">قسم نظم المعلومات</option>
                        <option value="generalMajor">شعبه عامه</option>
                    </select>
                </div>
            </div>
            <div class="row my-2">
                <div class="col-md-4">
                    <select name="job" class="form-select" id="job">
                        <option selected value="">الدرجة الوظيفية الحالية</option>
                        <option value="professor">استاذ</option>
                        <option value="associateProfessor">استاذ مساعد</option>
                        <option value="lecturer">مدرس</option>
                        <option value="lecturerAssistant">مدرس مساعد</option>
                        <option value="teachingAssistant">معيد</option>
                        <option value="freeProfessor">استاذ متفرغ</option>
                        <option value="freeAssociateProfessor">استاذ مساعد متفرغ</option>
                        <option value="freeLecturer">مدرس متفرغ</option>
                    </select>
                </div>
            </div>
            <div class="row my-2">
                <div class="col-md-12">
                    <textarea name="notes" id="notes" rows="5"  placeholder="إضافة ملاحظة..." class="form-control fs-4"></textarea>
                </div>
            </div>
            <div class="row my-2 justify-content-end">
                <div class="col-md-2">
                    <button type="submit" class="addMemberBtn rounded-pill border-0 w-100 my-3" id="addBtn">إضافة</button>
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
    <script src="../js/main.js"></script>
</body>
</html>