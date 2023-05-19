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