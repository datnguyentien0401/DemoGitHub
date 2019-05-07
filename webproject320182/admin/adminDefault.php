<?php
ob_start();
session_start();
require '../lib/dbCon.php';
require '../lib/trangChu.php';
if (!(isset($_SESSION["idUser"]) && $_SESSION["idGroup"] == 0)) {
    header("location:../index.php");
}
?>

<html>
    <body>
        <div id="wrapper">
            <?php
            require'../admin/menuAdminDefault.php';
            ?>
            <div id="page-wrapper" >
                <div class="col-sm-6">
                    <table class="table table-bordered table-dark ">
                        <thead>
                            <tr>
                                <th scope="col">Apps
                                </th>

                            </tr>
                        </thead>
                        <tbody>                          
                            <tr>
                                <td scope="row"><a href="bookManager.php">Books</a>
                                    <a href="addCategory.php"><i style="float:right; position: relative" class="fa fa-plus-circle"></i></a>

                                </td>
                            </tr>
                            <tr>
                                <td scope="row"><a href="chapterManager.php">Chapters</a>
                                    <a href="addCategory.php"><i style="float:right; position: relative" class="fa fa-plus-circle"></i></a>

                                </td>
                            </tr>

                        </tbody>
                    </table>
                </div>
                <div class="col-sm-6">
                    <table class="table table-bordered table-dark ">
                        <thead>
                            <tr>
                                <th scope="col">Quick links
                                </th>

                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td scope="row">
                                    <a href="../index.php">Home</a>
                                </td>
                            </tr>
                            <tr>
                                <td scope="row"><a href="settings.php">Change password</a>

                                </td>
                            </tr>
                            <tr>
                                <td scope="row"><a href="logout.php">Log out</a>

                                </td>
                            </tr>

                        </tbody>
                    </table>
                </div>

            </div>

        </div>
    </body>
</html>



