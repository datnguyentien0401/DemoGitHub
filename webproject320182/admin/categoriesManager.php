<?php
ob_start();
session_start();
require '../lib/dbCon.php';
    require '../lib/trangChu.php';
if (!(isset($_SESSION["idUser"]) && $_SESSION["idGroup"] == 1)) {
    header("location:../index.php");
    
}
?>
<!DOCTYPE html>
<html lang="en">
    
    <body>
        <div id="wrapper">
            <?php
            require'../admin/menuAdmin.php';
            ?>
            <div id="page-wrapper">
                <h2 style="text-align: center; ">Danh sách thể loại</h2>
                <table class="table table-bordered table-dark">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Tên thể loại</th>
                            <th scope="col">Thứ tự</th>
                            <th scope="col"><a href="addCategory.php">Thêm mới</a></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $theLoai = theLoai();
                        while ($row_theloai = mysqli_fetch_array($theLoai)) {
                            ?>
                            <tr>
                                <th scope="row"><?=$row_theloai['idTL'];?></th>
                                <td><?=$row_theloai['tenTL'];?></td>
                                <td><?=$row_theloai['thuTu'];?></td>
                                <td><a href="editCategory.php?idTL=<?=$row_theloai['idTL'];?>">Sửa</a> | <a onclick="return confirm('Bạn có chắc chắn muốn xóa không?')" href="del.php?idTL=<?=$row_theloai['idTL'];?>">Xóa</a></td>
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

