<?php

$hostname_bis = "localhost";
$database_bis = "staff_affairs";
$username_bis = "root";
$password_bis = "";
$bis = mysqli_connect($hostname_bis, $username_bis, $password_bis, "$database_bis");
$result = mysqli_set_charset($bis, 'utf8'); mysqli_query($bis,"SET CHARACTER SET 'utf8'");
if (!$result) {
die("Charset Failed");
}
?>





