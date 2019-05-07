<?php

function theLoai() {
    $con = mysqli_connect("localhost", "root", "", "project3");
    $qr = "SELECT * FROM `theloai`";
    return mysqli_query($con, $qr);
}

function truyenMoi() {
    $con = mysqli_connect("localhost", "root", "", "project3");
    $qr = "SELECT * FROM `truyen` ORDER BY idTruyen DESC";
    return mysqli_query($con, $qr);
}

function truyenMoi_baTruyen() {
    $con = mysqli_connect("localhost", "root", "", "project3");
    $qr = "SELECT * FROM `truyen` ORDER BY idTruyen DESC LIMIT 0,3";
    return mysqli_query($con, $qr);
}

function truyenMoi_baTruyen_tiepTheo() {
    $con = mysqli_connect("localhost", "root", "", "project3");
    $qr = "SELECT * FROM `truyen` ORDER BY idTruyen DESC LIMIT 3,3";
    return mysqli_query($con, $qr);
}

function truyenMoi_namTruyen() {
    $con = mysqli_connect("localhost", "root", "", "project3");
    $qr = "SELECT * FROM `truyen` ORDER BY idTruyen DESC LIMIT 0,5";
    return mysqli_query($con, $qr);
}

function truyenHay() {
    $con = mysqli_connect("localhost", "root", "", "project3");
    $qr = "SELECT * FROM `truyen` ORDER BY soLanXem DESC";
    return mysqli_query($con, $qr);
}
function truyenHay_namTruyen() {
    $con = mysqli_connect("localhost", "root", "", "project3");
    $qr = "SELECT * FROM `truyen` ORDER BY soLanXem DESC LIMIT 0,5";
    return mysqli_query($con, $qr);
}

function truyenTheoLoai($idTL) {
    $con = mysqli_connect("localhost", "root", "", "project3");
    $qr = "SELECT * FROM `truyen` WHERE idTL=$idTL ORDER BY idTruyen DESC";
    return mysqli_query($con, $qr);
}

function truyen($idTruyen) {
    $con = mysqli_connect("localhost", "root", "", "project3");
    $qr = "SELECT * FROM `truyen` WHERE idTruyen=$idTruyen";
    return mysqli_query($con, $qr);
}

function danhSachTruyen() {
    $con = mysqli_connect("localhost", "root", "", "project3");
    $qr = "SELECT * FROM `truyen` ";
    return mysqli_query($con, $qr);
}
function chuongTheoTruyen($idTruyen) {
    $con = mysqli_connect("localhost", "root", "", "project3");
    $qr = "SELECT * FROM chuong WHERE idTruyen=$idTruyen";
    return mysqli_query($con, $qr);
}

function soChuongCuaTruyen($idTruyen){
    $con = mysqli_connect("localhost", "root", "", "project3");
    $qr = "SELECT COUNT(idChuong) AS 'soChuong' FROM chuong WHERE idTruyen=$idTruyen";
    return mysqli_query($con, $qr);
}
function noiDungChuong($idChuong) {
    $con = mysqli_connect("localhost", "root", "", "project3");
    $qr = "SELECT * FROM chuong WHERE idChuong= $idChuong";
    return mysqli_query($con, $qr);
}
function timKiem($q){
    $con = mysqli_connect("localhost", "root", "", "project3");
    $qr = "SELECT * FROM truyen WHERE tieuDe_khongDau REGEXP '$q' ";
    return mysqli_query($con, $qr);
}
?>
