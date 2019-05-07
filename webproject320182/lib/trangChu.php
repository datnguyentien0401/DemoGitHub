<?php

function theLoai() {
    $con = mysqli_connect("localhost", "root", "", "project3");
    mysqli_set_charset($con, "utf8");
    $qr = "SELECT * FROM `theloai` order by thuTu";
    return mysqli_query($con, $qr);
}

function getCategoryById($idTL) {
    $con = mysqli_connect("localhost", "root", "", "project3");
    mysqli_set_charset($con, "utf8");
    $qr = "SELECT * FROM `theloai` where idTL='$idTL'";
    return mysqli_query($con, $qr);
}

function truyenMoi() {
    $con = mysqli_connect("localhost", "root", "", "project3");
    mysqli_set_charset($con, "utf8");
    $qr = "SELECT * FROM `truyen` ORDER BY idTruyen DESC";
    return mysqli_query($con, $qr);
}

function truyenMoi_phanTrang($from, $numOfPage) {
    $con = mysqli_connect("localhost", "root", "", "project3");
    mysqli_set_charset($con, "utf8");
    $qr = "SELECT * FROM `truyen` ORDER BY idTruyen DESC limit $from, $numOfPage";
    return mysqli_query($con, $qr);
}

function truyenMoi_baTruyen() {
    $con = mysqli_connect("localhost", "root", "", "project3");
    mysqli_set_charset($con, "utf8");
    $qr = "SELECT * FROM `truyen` ORDER BY idTruyen DESC LIMIT 0,3";
    return mysqli_query($con, $qr);
}

function truyenMoi_baTruyen_tiepTheo() {
    $con = mysqli_connect("localhost", "root", "", "project3");
    mysqli_set_charset($con, "utf8");
    $qr = "SELECT * FROM `truyen` ORDER BY idTruyen DESC LIMIT 3,3";
    return mysqli_query($con, $qr);
}

function truyenMoi_namTruyen() {
    $con = mysqli_connect("localhost", "root", "", "project3");
    mysqli_set_charset($con, "utf8");
    $qr = "SELECT * FROM `truyen` ORDER BY idTruyen DESC LIMIT 0,5";
    return mysqli_query($con, $qr);
}

function truyenMoi_sauTruyen() {
    $con = mysqli_connect("localhost", "root", "", "project3");
    mysqli_set_charset($con, "utf8");
    $qr = "SELECT * FROM `truyen` ORDER BY idTruyen DESC LIMIT 0,6";
    return mysqli_query($con, $qr);
}

function truyenHay_all() {
    $con = mysqli_connect("localhost", "root", "", "project3");
    mysqli_set_charset($con, "utf8");
    $qr = "SELECT * FROM `truyen` ORDER BY soLanXem DESC";
    return mysqli_query($con, $qr);
}

function truyenHay_namTruyen() {
    $con = mysqli_connect("localhost", "root", "", "project3");
    mysqli_set_charset($con, "utf8");
    $qr = "SELECT * FROM `truyen` ORDER BY soLanXem DESC LIMIT 0,5";
    return mysqli_query($con, $qr);
}

function truyenHay_topWeek() {
    $con = mysqli_connect("localhost", "root", "", "project3");
    mysqli_set_charset($con, "utf8");
    $qr = "SELECT * FROM `truyen` WHERE ngay>=SUBDATE(CURRENT_DATE, INTERVAL 7 DAY) ORDER BY soLanXem DESC";
    return mysqli_query($con, $qr);
}

function truyenHay_topWeek_namTruyen() {
    $con = mysqli_connect("localhost", "root", "", "project3");
    mysqli_set_charset($con, "utf8");
    $qr = "SELECT * FROM `truyen` WHERE ngay>=SUBDATE(CURRENT_DATE, INTERVAL 7 DAY) ORDER BY soLanXem DESC LIMIT 0,5";
    return mysqli_query($con, $qr);
}

function truyenHay_topThang() {
    $con = mysqli_connect("localhost", "root", "", "project3");
    mysqli_set_charset($con, "utf8");
    $qr = "SELECT * FROM `truyen` WHERE MONTH(ngay)=MONTH(CURRENT_DATE()) ORDER BY soLanXem DESC";
    return mysqli_query($con, $qr);
}

function truyenHay_topThang_namTruyen() {
    $con = mysqli_connect("localhost", "root", "", "project3");
    mysqli_set_charset($con, "utf8");
    $qr = "SELECT * FROM `truyen` WHERE MONTH(ngay)=MONTH(CURRENT_DATE()) ORDER BY soLanXem DESC LIMIT 0,5";
    return mysqli_query($con, $qr);
}

function truyenFull() {
    $con = mysqli_connect("localhost", "root", "", "project3");
    mysqli_set_charset($con, "utf8");
    $qr = "SELECT * FROM `truyen` WHERE trangThai='1'";
    return mysqli_query($con, $qr);
}

function truyenTheoLoai($idTL) {
    $con = mysqli_connect("localhost", "root", "", "project3");
    mysqli_set_charset($con, "utf8");
    $qr = "SELECT * FROM `truyen` WHERE idTL=$idTL ORDER BY idTruyen DESC";
    return mysqli_query($con, $qr);
}

function truyen($idTruyen) {
    $con = mysqli_connect("localhost", "root", "", "project3");
    mysqli_set_charset($con, "utf8");
    $qr = "SELECT * FROM `truyen`,theloai WHERE truyen.idTL=theloai.idTL AND idTruyen=$idTruyen";
    return mysqli_query($con, $qr);
}

function danhSachTruyen() {
    $con = mysqli_connect("localhost", "root", "", "project3");
    mysqli_set_charset($con, "utf8");
    $qr = "SELECT * FROM `truyen` ";
    return mysqli_query($con, $qr);
}

function chuongTheoTruyen($idTruyen) {
    $con = mysqli_connect("localhost", "root", "", "project3");
    mysqli_set_charset($con, "utf8");
    $qr = "SELECT * FROM chuong WHERE idTruyen=$idTruyen";
    return mysqli_query($con, $qr);
}

function soChuongCuaTruyen($idTruyen) {
    $con = mysqli_connect("localhost", "root", "", "project3");
    mysqli_set_charset($con, "utf8");
    $qr = "SELECT COUNT(idChuong) AS 'soChuong' FROM chuong WHERE idTruyen=$idTruyen";
    return mysqli_query($con, $qr);
}

function noiDungChuong($idChuong) {
    $con = mysqli_connect("localhost", "root", "", "project3");
    mysqli_set_charset($con, "utf8");
    $qr = "SELECT * FROM chuong WHERE idChuong= $idChuong";
    return mysqli_query($con, $qr);
}

function chuong_admin() {
    $con = mysqli_connect("localhost", "root", "", "project3");
    mysqli_set_charset($con, "utf8");
    $qr = "SELECT * FROM chuong, truyen WHERE chuong.idTruyen=truyen.idTruyen order by tieuDe";
    return mysqli_query($con, $qr);
}

function chuong_admin_default($idUser) {
    $con = mysqli_connect("localhost", "root", "", "project3");
    mysqli_set_charset($con, "utf8");
    $qr = "SELECT * FROM chuong, truyen WHERE chuong.idTruyen=truyen.idTruyen and truyen.idUser=$idUser order by tieuDe";
    return mysqli_query($con, $qr);
}

function truyen_admin() {
    $con = mysqli_connect("localhost", "root", "", "project3");
    mysqli_set_charset($con, "utf8");
    $qr = "SELECT * FROM theloai, truyen, user WHERE theloai.idTl=truyen.idTl and truyen.idUser=user.idUser order by idTruyen";
    return mysqli_query($con, $qr);
}

function truyen_admin_default($idUser) {
    $con = mysqli_connect("localhost", "root", "", "project3");
    mysqli_set_charset($con, "utf8");
    $qr = "SELECT * FROM theloai, truyen, user WHERE theloai.idTl=truyen.idTl and truyen.idUser=user.idUser and truyen.idUser=$idUser order by idTruyen";
    return mysqli_query($con, $qr);
}

function timKiem($q) {
    $con = mysqli_connect("localhost", "root", "", "project3");
    mysqli_set_charset($con, "utf8");
    $qr = "SELECT * FROM truyen WHERE tieuDe REGEXP '$q' ";
    return mysqli_query($con, $qr);
}

function capNhapSoLanXemTruyen($idTruyen) {
    $con = mysqli_connect("localhost", "root", "", "project3");
    mysqli_set_charset($con, "utf8");
    $qr = "UPDATE truyen SET soLanXem= soLanXem+1 WHERE idTruyen=$idTruyen";
    mysqli_query($con, $qr);
}

function addCategory($tenTL, $thuTu) {
    $con = mysqli_connect("localhost", "root", "", "project3");
    mysqli_set_charset($con, "utf8");
    $qr = "insert into theloai values(null,'$tenTL','$thuTu')";
    mysqli_query($con, $qr);
}

function editCategory($idTL, $tenTL, $thuTu) {
    $con = mysqli_connect("localhost", "root", "", "project3");
    mysqli_set_charset($con, "utf8");
    $qr = "update theloai set tenTL='$tenTL', thuTu='$thuTu' where idTL=$idTL";
    mysqli_query($con, $qr);
}

function deleteCategory($idTL) {
    $con = mysqli_connect("localhost", "root", "", "project3");
    mysqli_set_charset($con, "utf8");
    $qr = "delete from theloai where idTL=$idTL";
    mysqli_query($con, $qr);
}

function addBook($tenTruyen, $tacGia, $img, $tomTat, $idTL, $trangThai) {
    $con = mysqli_connect("localhost", "root", "", "project3");
    mysqli_set_charset($con, "utf8");
    $qr = "insert into truyen (tieuDe,tacGia,ngay,urlHinh,tomTat,soLanXem,idTL,trangThai) values('$tenTruyen','$tacGia',CURRENT_DATE(),'$img','$tomTat','0','$idTL','$trangThai')";
    mysqli_query($con, $qr);
}

function editBook($idTruyen, $tenTruyen, $tacGia, $img, $tomTat, $idTL, $trangThai) {
    $con = mysqli_connect("localhost", "root", "", "project3");
    mysqli_set_charset($con, "utf8");
    $qr = "update truyen set tieuDe='$tenTruyen',tacGia='$tacGia',urlHinh='$img',tomTat='$tomTat',idTL='$idTL',trangThai='$trangThai' where idTruyen=$idTruyen";
    mysqli_query($con, $qr);
}

function deleteBook($idTL) {
    $con = mysqli_connect("localhost", "root", "", "project3");
    mysqli_set_charset($con, "utf8");
    $qr = "delete from truyen where idTruyen=$idTL";
    mysqli_query($con, $qr);
}

function addChapter($chapter, $book, $content) {
    $con = mysqli_connect("localhost", "root", "", "project3");
    mysqli_set_charset($con, "utf8");
    $qr = "insert into chuong  values(null,'$chapter','$book', '$content')";
    mysqli_query($con, $qr);
}

function editChapter($idChuong, $chapter, $book) {
    $con = mysqli_connect("localhost", "root", "", "project3");
    mysqli_set_charset($con, "utf8");
    $qr = "update chuong set  tenChuong='$chapter', idTruyen='$book'  where idChuong=$idChuong";
    mysqli_query($con, $qr);
}

function updateContent($idChuong, $content) {
    $con = mysqli_connect("localhost", "root", "", "project3");
    mysqli_set_charset($con, "utf8");
    $qr = "update chuong set noiDung='$content' where idChuong=$idChuong";
    mysqli_query($con, $qr);
}

function deleteChapter($idChuong) {
    $con = mysqli_connect("localhost", "root", "", "project3");
    mysqli_set_charset($con, "utf8");
    $qr = "delete from chuong where idChuong=$idChuong";
    mysqli_query($con, $qr);
}

function addUser($username, $pass) {
    $con = mysqli_connect("localhost", "root", "", "project3");
    mysqli_set_charset($con, "utf8");
    $qr = "INSERT into `user`(username,password,idGroup) values ('$username', '$pass','0') ";
    mysqli_query($con, $qr);
}

function getUserById($idUser) {
    $con = mysqli_connect("localhost", "root", "", "project3");
    mysqli_set_charset($con, "utf8");
    $qr = "select * from user where idUser=$idUser";
    return mysqli_query($con, $qr);
}

function getAllUser() {
    $con = mysqli_connect("localhost", "root", "", "project3");
    mysqli_set_charset($con, "utf8");
    $qr = "select * from user";
    return mysqli_query($con, $qr);
}

function deleteUser($idChuong) {
    $con = mysqli_connect("localhost", "root", "", "project3");
    mysqli_set_charset($con, "utf8");
    $qr = "delete from user where idUser=$idChuong";
    mysqli_query($con, $qr);
}

function editUser($idUser, $firstname, $lastname, $summary) {
    $con = mysqli_connect("localhost", "root", "", "project3");
    mysqli_set_charset($con, "utf8");
    $qr = "update user set firstName='$firstname',lastName='$lastname', summary='$summary' where idUser=$idUser ";
    mysqli_query($con, $qr);
}

function updateAvt($idUser, $linkAvatarFile) {
    $con = mysqli_connect("localhost", "root", "", "project3");
    mysqli_set_charset($con, "utf8");
    $qr = "update user set urlHinh='$linkAvatarFile' where idUser=$idUser ";
    mysqli_query($con, $qr);
}

function updatePassword($idUser, $curpass) {
    $con = mysqli_connect("localhost", "root", "", "project3");
    mysqli_set_charset($con, "utf8");
    $qr = "update user set password='$curpass' where idUser=$idUser ";
    mysqli_query($con, $qr);
}
?>

