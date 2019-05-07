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
                <table class="table table-bordered table-dark">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">User name</th>
                            <th scope="col">Họ</th>
                            <th scope="col">Tên</th>
                            <th scope="col">Tiểu sử</th>
                            <th scope="col">url avatar</th>
                            <th scope="col"><a href="addUser.php">Thêm mới</a></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $user = getAllUser();
                        while ($row_user = mysqli_fetch_array($user)) {
                            ?>
                            <tr>
                                <th scope="row"><?= $row_user['idUser']; ?></th>
                                <td><?= $row_user['username']; ?></td>
                                <td><?= $row_user['firstName']; ?></td>   
                                <td><?= $row_user['lastName']; ?></td>
                                <td><?= $row_user['summary']; ?></td>
                                <td><?= $row_user['urlAvt']; ?></td>
                                <td><a onclick="return confirm('Bạn có chắc chắn muốn xóa không?')" href="del.php?idUser=<?= $row_user['idUser']; ?>">Xóa</a></td>
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

