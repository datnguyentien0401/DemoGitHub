<?php
require 'lib/dbCon.php';

if (isset($_GET["p"]))
    $p = $_GET["p"];
else
    $p = "";

switch ($p) {
            case "truyenTrongLoai":
                require 'truyenTrongLoai.php';
                break;
            case "chuongTrongTruyen":
                require 'chuongTrongTruyen.php';
                break;
            case "truyenMoi":
                require 'truyenMoi.php';
                break;
            case "truyenHay":
                require 'truyenHay.php';
                break;
            case "listTruyen":
                require 'listTruyen.php';
                break;
            case "chiTietTruyen":
                require 'chiTietTruyen.php';
                break;
            case "timkiem":
                require 'timkiem.php';
                break;
            default :
                require 'home.php';
                break;
        }
?>   
       