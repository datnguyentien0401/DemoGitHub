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
$errConfirmPass = 0;
$errPassLen = 0;
if (isset($_POST["btnAdd"])) {
    $username = $_POST["username"];
    $password = $_POST["pass"];
    $repassword = $_POST["repass"];
    if ($password == $repassword) {
        if (strlen($password) < 8)
            $errPassLen = 1;
        else {
            addUser($username, $password);
            header("location:userManager.php");
        }
    } else
        $errConfirmPass = 1;
}
?>
<html>  
    <body>
        <div id="wrapper">
            <?php
            require'../admin/menuAdmin.php';
            ?>
            <div id="page-wrapper">
                <div class="col-sm-6 col-xs-12 col-md-6">
                    <form role="form" method="post">
                        <div class="form-group">
                            <label for="username">Username</label>
                            <input type="text" class="form-control" id="username" name="username" placeholder="Nhập tên đăng nhập">
                        </div>
                        <div class="form-group">
                            <label for="pass">password</label>
                            <input type="password" class="form-control" id="pass" name="pass" placeholder="Nhập mật khẩu">
                        </div>
                        <div class="form-group">
                            <label for="repass">re-password</label>
                            <input type="password" class="form-control" id="repass" name="repass" placeholder="Nhập lại mật khẩu">
                        </div>
                        <p style="color:red">
                            <?php
                            if ($errConfirmPass == 1)
                                echo "Mật khẩu nhập lại và mật khẩu mới khác nhau";
                            else if ($errPassLen == 1)
                                echo "Mật khẩu phải có độ dài từ 8 ký tự";
                            ?>
                        </p>
                        <input type="submit" id="btnAdd" name="btnAdd" class="btn btn-default" value="Thêm mới">
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>

