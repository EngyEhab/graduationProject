<?php
include "../Connections/syscon.php";
if (isset($_GET['reportAbout'])) {
    $title = $_GET['reportAbout'];
    echo $title;
}
