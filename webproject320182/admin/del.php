<?php

ob_start();
session_start();
require '../lib/dbCon.php';
require '../lib/trangChu.php';
if (!(isset($_SESSION["idUser"]) )) {
    header("location:../index.php");
}
?>
<?php

if (isset($_GET["idTL"])) {
    $idTL = $_GET["idTL"];
    settype($idTL, "int");
    deleteCategory($idTL);
    header("location:categoriesManager.php");
}

else if (isset($_GET["idTruyen"])) {
    $idTruyen = $_GET["idTruyen"];
    settype($idTruyen, "int");
    deleteBook($idTruyen);
    header("location:bookManager.php");
}

else if (isset($_GET["idChuong"])) {
    $idChuong = $_GET["idChuong"];
    settype($idChuong, "int");
    deleteChapter($idChuong);
    header("location:chapterManager.php");
}

else if (isset($_GET["idUser"])) {
    $idChuong = $_GET["idUser"];
    settype($idChuong, "int");
    deleteUser($idChuong);
    header("location:userManager.php");
}
?>

