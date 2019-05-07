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
$idTL = $_GET["idTL"];
settype($idTL, "int");
$theloai = getCategoryById($idTL);
$row_theLoai = mysqli_fetch_array($theloai);
?>
<?php
if (isset($_POST["btnEdit"])) {
    $tenTL = $_POST["categoryName"];
    $thuTu = $_POST["categorySTT"];
    settype($thuTu, "int");
    editCategory($idTL,$tenTL, $thuTu);
    header("location:categoriesManager.php");
}
?>
<html lang="en">
    
    <body>
        <div id="wrapper">
            <?php
            require'../admin/menuAdmin.php';
            ?>
            <div id="page-wrapper">
                <div class="col-sm-6 col-xs-12 col-md-6">
                    <form role="form" method="post">
                        <div class="form-group">
                            <label for="categoryId">ID</label>
                            <input type="text" class="form-control" style="color: #333" id="categoryName" name="categoryId" value="<?php echo $row_theLoai['idTL'] ?>" readonly="true" >
                        </div>
                        <div class="form-group">
                            <label for="categoryName">Tên thể loại</label>
                            <input type="text" class="form-control" style="color: #333" id="categoryName" name="categoryName" value="<?php echo $row_theLoai['tenTL'] ?>">
                        </div>
                        <div class="form-group">
                            <label for="categorySTT">Thứ tự</label>
                            <input type="text" class="form-control" style="color: #333" id="categorySTT" name="categorySTT" value="<?php echo $row_theLoai['thuTu'] ?>">
                        </div>

                        <input type="submit" id="btnEdit" name="btnEdit" class="btn btn-default" value="Lưu">
                    </form>
                </div>
            </div>

        </div>
        <!-- /#wrapper -->

       
    </body>
</html>

