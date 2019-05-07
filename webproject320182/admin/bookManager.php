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
$idUser = $_SESSION["idUser"];
settype($idUser, "int");
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
                <h2 style="text-align: center; ">Danh sách truyện đã đăng</h2>
                <table class="table table-bordered table-dark">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Thông tin</th>
                            <th scope="col">Tác giả</th>
                            <th scope="col">Ngày đăng</th>
                            <th scope="col">Lượt xem</th>
                            <th scope="col">Thể loại</th>
                            <th scope="col">Trạng thái</th>
                            <th scope="col">Người đăng</th>
                            <th scope="col"><a href="addBook.php">Thêm mới</a></th>

                        </tr>
                    </thead>
                    <tbody>
                        <?php
                       
                        if ($_SESSION["idGroup"] == 1)
                            $truyen = truyen_admin();
                        else
                            $truyen = truyen_admin_default($idUser);

                        while ($row_truyen = mysqli_fetch_array($truyen)) {
                            ?>
                            <tr>
                                <th scope="row"><?= $row_truyen['idTruyen']; ?></th>
                                <td>
                                    <p><b><?php echo $row_truyen['tieuDe']; ?></b></p>
                                    <div class="col-sm-1">
                                        <img src="<?php echo "../" . $row_truyen['urlHinh'] ?>" width="100%" height="80" alt="blank">
                                    </div>
                                    <div class="col-sm-11">
                                        <p> <?php echo $row_truyen['tomTat']; ?></p>
                                    </div>
                                </td>
                                <td><?= $row_truyen['tacGia']; ?></td>
                                <td><?= $row_truyen['ngay']; ?></td>
                                <td><?= $row_truyen['soLanXem']; ?></td>
                                <td><?= $row_truyen['tenTL']; ?></td>
                                <td><?php
                                    if ($row_truyen['trangThai'] == 1)
                                        echo 'Full';
                                    else
                                        echo 'Up load'
                                        ?></td>
                                <td><?= $row_truyen['username']; ?></td>
                                <td><a href="editBook.php?idTruyen=<?= $row_truyen['idTruyen'] ?>" >Sửa</a> |   <a onclick="return confirm('Bạn có chắc chắn muốn xóa không?')" href="del.php?idTruyen=<?= $row_truyen['idTruyen']; ?>">Xóa</a></td>
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
