<?php
ob_start();
session_start();
require '../lib/dbCon.php';
require '../lib/trangChu.php';
if (!(isset($_SESSION["idUser"]))) {
    header("location:../index.php");
}
?>
<?php
$idUser = $_SESSION["idUser"];
settype($idUser, "int");
$acc = getUserById($idUser);
$row_acc = mysqli_fetch_array($acc);
?>
<?php
$errConfirmPass = 0;
$errCurPass = 0;
$errPassLen = 0;
if (isset($_POST["btnAdd"])) {
    $curpass = $_POST["curpass"];
    settype($curpass, "String");
    $oldpass = $row_acc['password'];
    settype($oldpass, "String");
    $newpass = $_POST["newpass"];
    $confirmpass = $_POST["confirmpass"];
    if ($curpass == $oldpass) {
        if ($newpass == $confirmpass) {
            if (strlen($newpass) < 8)
                $errPassLen = 1;
            else
                updatePassword($idUser, $newpass);
        } else
            $errConfirmPass = 1;
    } else
        $errCurPass = 1;
}
?>
<html>

    <body>
        <div id="wrapper">
             <?php
            if ($_SESSION["idGroup"] == 1)
                require'../admin/menuAdmin.php';
            else
                require'../admin/menuAdminDefault.php';
            ?>
            <div id="page-wrapper" >
                <h3 style="text-align: center">Cài đặt tài khoản</h3>
                <p style="text-align: center">Chỉnh sửa tài khoản và thay đổi mật khẩu</p>
                <div class="col-sm-6 col-xs-12 col-sm-offset-3">

                    <form role="form" method="post">


                        <div class="form-group">
                            <label for="curpass">Mật khẩu hiện tại</label>
                            <input type="password" class="form-control" id="curpass" name="curpass" >
                            <p style="color:red"><?php if ($errCurPass == 1) echo "Mật khẩu hiện tại chưa chính xác" ?></p>
                        </div>
                        <hr>
                        <div class="form-group">
                            <label for="newpass">Mật khẩu mới</label>

                            <input type="password" class="form-control" id="newpass" name="newpass" >
                        </div>

                        <hr>
                        <div class="form-group">
                            <label for="confirmpass">Nhập lại mật khẩu mới</label>

                            <input type="password" class="form-control" id="confirmpass" name="confirmpass" >
                            <p style="color:red">
                                <?php
                                if ($errConfirmPass == 1)
                                    echo "Mật khẩu nhập lại và mật khẩu mới khác nhau";
                                else if ($errPassLen == 1)
                                    echo "Mật khẩu phải có độ dài từ 8 ký tự";
                                ?>
                            </p>
                        </div>
                        <ul style="color: #007bff; font-size: 17px;">
                            <li>Mật khẩu của bạn không được quá giống với thông tin cá nhân khác của bạn.</li>
                            <li>Mật khẩu của bạn phải chứa ít nhất 8 ký tự.</li>
                            <li>Mật khẩu của bạn không thể là mật khẩu thường được sử dụng.</li>
                            <li>Mật khẩu của bạn không thể hoàn toàn là số.</li>
                        </ul>
                        <hr>
                        <div style="text-align: center">
                            <input type="submit" id="btnAdd" name="btnAdd" class="btn btn-default" value="Cập nhật">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>

