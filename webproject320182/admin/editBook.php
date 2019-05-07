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
$idTruyen = $_GET["idTruyen"];
if (isset($_POST["btnEdit"])) {
    $tenTruyen = $_POST["name"];
    $img = $_POST["image"];
    $tacGia = $_POST["author"];
    $idTL = $_POST["categoryName"];
    $tomTat = $_POST["summary"];
    $trangThai = $_POST["status"];
    editBook($idTruyen, $tenTruyen, $tacGia, $img, $tomTat, $idTL, $trangThai);
    header("location:bookManager.php");
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
            <div id="page-wrapper">
                <?php
                $truyen = truyen($idTruyen);
                $row_truyen = mysqli_fetch_array($truyen);
                ?>
                <form role="form" method="post">
                    <div class="col-sm-6 col-xs-12 col-md-6">
                        <div class="form-group">
                            <label for="idTruyen">ID</label>
                            <input type="text" class="form-control" id="idTruyen" name="idTruyen" readonly="true" value="<?= $row_truyen['idTruyen'] ?>">
                        </div>
                        <div class="form-group">
                            <label for="name">Tên truyện</label>
                            <input type="text" class="form-control" id="name" name="name" value="<?= $row_truyen['tieuDe'] ?>">
                        </div>
                        <div class="form-group">
                            <label for="image">Hình ảnh</label>
                            <input type="text" class="form-control" id="image" name="image" value="<?= $row_truyen['urlHinh'] ?>">
                        </div>
                        <div class="form-group">
                            <label for="date">Ngày đăng</label>
                            <input type="text" class="form-control" id="date" name="date" readonly="true" value="<?= $row_truyen['ngay'] ?>">
                        </div>

                        <div class="form-group">
                            <label for="author">Tác giả</label>
                            <input type="text" class="form-control" id="author" name="author" value="<?= $row_truyen['tacGia'] ?>">
                        </div>



                    </div>
                    <div class="col-sm-6 col-xs-12 col-md-6">
                        <div class="form-group">
                            <label for="summary">Tóm tắt</label>
                            <textarea rows = "7" class="form-control"cols = "81%" name = "summary" id="summary" >
                                <?php echo $row_truyen['tomTat'] ?>
                            </textarea>
                        </div>
                        <div class="form-group">
                            <label for="view">Lượt xem</label>
                            <input type="text" class="form-control" id="view" name="view" readonly="true" value="<?= $row_truyen['soLanXem'] ?>">
                        </div>
                        <div class="form-group" style="margin-top:30px">
                            <select  class="form-control" id="categoryName" name="categoryName">
                                <option disabled selected>Thể loại</option>
                                <?php
                                $theLoai = theLoai();
                                while ($row_theloai = mysqli_fetch_array($theLoai)) {
                                    ?>
                                    <option value="<?= $row_theloai['idTL'] ?>" <?php if ($row_theloai['idTL'] == $row_truyen['idTL']) echo 'selected'; ?>>
                                        <?= $row_theloai['tenTL'] ?>
                                    </option>
                                    <?php
                                }
                                ?>
                            </select>
                        </div>
                        <div class="form-group">

                            <select  class="form-control" id="status" name="status">
                                <option  disabled selected>Trạng thái</option>
                                <option value="0" <?php
                                if ($row_truyen['trangThai'] == 0)
                                    echo 'selected';
                                else
                                    echo '';
                                ?>>Up load</option>
                                <option value="1"  <?php
                                if ($row_truyen['trangThai'] == 1)
                                    echo 'selected';
                                else
                                    echo '';
                                ?>> Full</option>
                            </select>
                        </div>

                        <input type="submit" id="btnEdit" name="btnEdit" class="btn btn-default" value="Lưu">
                    </div>
                </form>
            </div>
        </div>


        <!-- /#wrapper -->

       
    </body>
</html>



