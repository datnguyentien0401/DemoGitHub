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
$idUser = $_SESSION["idUser"];
settype($idUser, "int");
if (isset($_POST["btnAdd"])) {
    $firstname = $_POST["firstname"];
    $lastname = $_POST["lastname"];
    $summary = $_POST["summary"];
    if ($_FILES['avatar']['size'] != '') {
        $avatarFileName = $_FILES['avatar']['name'];
        $linkAvatarFile = 'upload/' . $avatarFileName;
        echo $linkAvatarFile;
        move_uploaded_file($_FILES['avatar']['tmp_name'], "../upload/" . $avatarFileName);
        updateAvt($idUser, $linkAvatarFile);
    }
    editUser($idUser, $firstname, $lastname, $summary);

    header("location:admin.php");
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
                <h3 style="text-align: center">Thông tin cá nhân</h3>
                <p style="text-align: center">Cập nhật thông tin cá nhân</p>
                <div class="col-sm-3 col-xs-12 col-md-3">
                    <img src="<?php echo "../" . $row_acc['urlAvt']; ?>" width="100%" height="200" class="img-circle">
                    <h3  style="text-align: center;"><?php echo $row_acc['firstName'] . " " . $row_acc['lastName'] ?></h3>
                </div>
                <div class="col-sm-6 col-xs-12 col-md-6">

                    <form role="form" method="post" enctype="multipart/form-data">


                        <div class="form-group">

                            <input type="text" class="form-control" id="firstname" name="firstname" value="<?php echo $row_acc['firstName'] ?>">
                        </div>
                        <hr>
                        <div class="form-group">

                            <input type="text" class="form-control" id="lastname" name="lastname" value="<?php echo $row_acc['lastName'] ?>">
                        </div>
                        <div class="form-group">
                            <label for="summary">Tiểu sử</label>
                            <textarea rows = "7" class="form-control" cols = "81%" name = "summary" id="summary">
                                <?php echo $row_acc['summary'] ?>
                            </textarea>
                        </div>
                        <hr>
                        <div class="form-group">
                            <label for="avatar">Thay đổi avatar</label>
                            <input type="file"  id="avatar" name="avatar" style="color:#ddd">
                        </div>
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

