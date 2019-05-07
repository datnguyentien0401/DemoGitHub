<?php
ob_start();
session_start();
require '../lib/dbCon.php';
require '../lib/trangChu.php';
if (!(isset($_SESSION["idUser"]) && $_SESSION["idGroup"] == 1)) {
    header("location:../index.php");
}
?>
<?php

unset($_SESSION["idUser"]);
unset($_SESSION["username"]);
unset($_SESSION["idGroup"]);
header("location:../index.php");
?>

