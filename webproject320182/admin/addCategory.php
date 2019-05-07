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
if (isset($_POST["btnAdd"])) {
    $tenTL = $_POST["categoryName"];
    $thuTu = $_POST["categorySTT"];
    settype($thuTu, "int");
    addCategory($tenTL, $thuTu);
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
                            <label for="categoryName">Tên thể loại</label>
                            <input type="text" class="form-control" id="categoryName" name="categoryName" placeholder="Nhập tên thể loại">
                        </div>
                        <div class="form-group">
                            <label for="categorySTT">Thứ tự</label>
                            <input type="text" class="form-control" id="categorySTT" name="categorySTT" placeholder="Nhập thứ tự">
                        </div>

                        <input type="submit" id="btnAdd" name="btnAdd" class="btn btn-default" value="Thêm mới">
                    </form>
                </div>
            </div>

        </div>
        <!-- /#wrapper -->

        
    </body>
</html>

