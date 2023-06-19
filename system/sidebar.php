<!DOCTYPE html>
<html lang="ar">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>النظام الإلكترونى لإدارة شئون أعضاء هيئة التدريس</title>
</head>

<body>

    <div class="sidebar py-3" id="sidebar">
        <button class="sidebarButton d-flex align-items-center border-0" id="openBtn">
            <i class="fa-solid fa-bars fa-xl mx-auto" style="color: #ffffff;"></i>
        </button>
        <button class="sidebarButton d-flex align-items-center border-0 d-none" id="closeBtn">
            <i class="fa-solid fa-xmark fa-xl mx-auto" style="color: #ffffff;"></i>
        </button>
        <ul>
            <?php
            $user_type_id = $_SESSION['user_type_id'];
            if ($user_type_id == "1") { ?>
                <li>
                    <a href="dashboard.php" class="text-decoration-none pe-3">
                        <i class="fa-solid fa-desktop fa-xl sidebarIcon" style="color: #ffffff;"></i>
                        <span class="fs-3 text-white">لوحة التحكم</span>
                        <div class="line mb-1"></div>
                    </a>
                </li>
            <?php }
            $user_type_id = $_SESSION['user_type_id'];
            if ($user_type_id == "1") { ?>
                <li>
                    <a href="users.php" class="text-decoration-none pe-3">
                        <i class="fa-solid fa-users fa-xl sidebarIcon" style="color: #ffffff;"></i>
                        <span class="fs-3 text-white">المستخدمون</span>
                        <div class="line mb-1"></div>
                    </a>
                </li>
            <?php } ?>
            <li>
                <a href="addMember.php" class="text-decoration-none pe-3">
                    <i class="fa-solid fa-user-plus fa-xl sidebarIcon" style="color: #ffffff;"></i>
                    <span class="fs-3 text-white">إضافة عضو جديد</span>
                    <div class="line mb-1"></div>
                </a>
            </li>
            <li>
                <a href="completeData.php" class="text-decoration-none pe-3">
                    <i class="fa-solid fa-pen-to-square fa-xl sidebarIcon" style="color: #ffffff;"></i>
                    <span class="fs-3 text-white">استكمال بيانات</span>
                    <div class="line mb-1"></div>
                </a>
            </li>
            <li>
                <a href="updateJobGrade.php" class="text-decoration-none pe-3">
                    <i class="fa-solid fa-user-tie fa-xl sidebarIcon" style="color: #ffffff;"></i>
                    <span class="fs-3 text-white">تحديث الدرجة الوظيفية</span>
                    <div class="line mb-1"></div>
                </a>
            </li>
            <li>
                <a href="addPenalty.php" class="text-decoration-none pe-3">
                    <i class="fa-solid fa-scale-balanced fa-xl sidebarIcon" style="color: #ffffff;"></i>
                    <span class="fs-3 text-white">إضافة العقوبات أو الجزاءات</span>
                    <div class="line mb-1"></div>
                </a>
            </li>
            <li>
                <a href="addVacation.php" class="text-decoration-none pe-3">
                    <i class="fa-solid fa-house-user fa-xl sidebarIcon" style="color: #ffffff;"></i>
                    <span class="fs-3 text-white">إضافة الأجازات</span>
                    <div class="line mb-1"></div>
                </a>
            </li>
            <li>
                <a href="addSecondment.php" class="text-decoration-none pe-3">
                    <i class="fa-solid fa-plane-up fa-xl sidebarIcon" style="color: #ffffff;"></i>
                    <span class="fs-3 text-white">إضافة الإعارات</span>
                    <div class="line mb-1"></div>
                </a>
            </li>
            
            <li>
                <a href="#" class="text-decoration-none pe-3">
                    <i class="fa-solid fa-business-time fa-xl sidebarIcon" style="color: #ffffff;"></i>
                    <span class="fs-3 text-white">إضافة الإنتدابات</span>
                    <div class="line mb-1"></div>
                </a>
            </li>

            <li>
                <a href="#" class="text-decoration-none pe-3">
                    <i class="fa-solid fa-plane-departure fa-xl sidebarIcon" style="color: #ffffff;"></i>
                    <span class="fs-3 text-white">إضافة البعثات</span>
                    <div class="line mb-1"></div>
                </a>
            </li>
            
            <li>
                <a href="statement.php" class="text-decoration-none pe-3">
                    <i class="fa-solid fa-clipboard-user fa-xl sidebarIcon" style="color: #ffffff;"></i>
                    <span class="fs-3 text-white">عرض بيان حالة شامل</span>
                    <div class="line my-2"></div>
                </a>
            </li>
            <li>
                <a href="reports.php" class="text-decoration-none pe-3">
                    <i class="fa-solid fa-file-lines fa-xl sidebarIcon" style="color: #ffffff;"></i>
                    <span class="fs-3 text-white">تقارير</span>
                </a>
            </li>
        </ul>
    </div>

</body>

</html>