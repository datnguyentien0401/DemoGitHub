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
if (isset($_POST["btnAdd"])) {
    $tenTruyen = $_POST["name"];
    $img = $_POST["image"];
    $tacGia = $_POST["author"];
    $idTL = $_POST["categoryName"];
    $tomTat = $_POST["summary"];
    $trangThai = $_POST["status"];
    addBook($tenTruyen, $tacGia, $img, $tomTat, $idTL, $trangThai);
    header("location:bookManager.php");
}
?>
<html lang="en">

    <body>
        <div id="wrapper">
            <?php
            if ($_SESSION["idGroup"] == 1)
                require'../admin/menuAdmin.php';
            else
                require'../admin/menuAdminDefault.php';
            ?>
            <div id="page-wrapper">

                <form role="form" method="post">
                    <div class="col-sm-6 col-xs-12 col-md-6">
                        <div class="form-group">
                            <label for="name">Tên truyện</label>
                            <input type="text" class="form-control" id="name" name="name" placeholder="Nhập tên truyện">
                        </div>
                        <div class="form-group">
                            <label for="image">Hình ảnh</label>
                            <input type="url" class="form-control" id="image" name="image" placeholder="Nhập địa chỉ url của hình ảnh">
                        </div>


                        <div class="form-group">
                            <label for="author">Tác giả</label>
                            <input type="text" class="form-control" id="author" name="author" placeholder="Nhập tên tác giả">
                        </div>

                        <div class="form-group" style="margin-top:30px">
                            <select  class="form-control" id="categoryName" name="categoryName">
                                <option disabled selected>Thể loại</option>
                                <?php
                                $theLoai = theLoai();
                                while ($row_theloai = mysqli_fetch_array($theLoai)) {
                                    ?>
                                    <option value="<?= $row_theloai['idTL'] ?>"><?= $row_theloai['tenTL'] ?></option>
                                    <?php
                                }
                                ?>
                            </select>
                        </div>

                    </div>
                    <div class="col-sm-6 col-xs-12 col-md-6">
                        <div class="form-group">
                            <label for="summary">Tóm tắt</label>
                            <textarea rows = "7" class="form-control" cols = "81%" name = "summary" id="summary">
                               
                            </textarea>
                        </div>


                        <div class="form-group">

                            <select  class="form-control" id="status" name="status">
                                <option  disabled selected>Trạng thái</option>
                                <option value="0">Full</option>
                                <option value="1">Up load</option>
                            </select>
                        </div>

                        <input type="submit" id="btnAdd" name="btnAdd" class="btn btn-default" value="Thêm mới">
                    </div>
                </form>
            </div>
        </div>


        <!-- /#wrapper -->


    </body>
</html>



