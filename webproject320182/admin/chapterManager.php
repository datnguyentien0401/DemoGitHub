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
?>
<!DOCTYPE html>
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
                <h2 style="text-align: center; ">Danh sách các chương</h2>
                <table class="table table-bordered table-dark">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Tên chương</th>
                            <th scope="col">Tên truyện</th>

                            <th scope="col"><a href="addChapter.php">Thêm mới</a></th>

                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        if ($_SESSION["idGroup"] == 1)
                            $chuong = chuong_admin();
                        else
                            $chuong = chuong_admin_default($idUser);

                        while ($row_chuong = mysqli_fetch_array($chuong)) {
                            ?>
                            <tr>
                                <th scope="row"><?= $row_chuong['idChuong']; ?></th>
                                <td><?= $row_chuong['tenChuong']; ?></td>
                                <td><?= $row_chuong['tieuDe']; ?></td>
                                <td><a href="editChapter.php?idChuong=<?= $row_chuong['idChuong']; ?>">Sửa</a> |   <a onclick="return confirm('Bạn có chắc chắn muốn xóa không?')" href="del.php?idChuong=<?= $row_chuong['idChuong']; ?>">Xóa</a></td>
                            </tr>
                            <?php
                        }
                        ?>

                    </tbody>
                </table>
            </div>

        </div>
        <!-- /#wrapper -->


    </body>
</html>


