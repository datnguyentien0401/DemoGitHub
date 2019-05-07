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
    $chapter = $_POST["chapterName"];
    $book = $_POST["bookName"];
    $contentFileName = $_FILES['content']['name'];
    $linkContentFile ='upload/'.$contentFileName;
    move_uploaded_file($_FILES['content']['tmp_name'], "../upload/".$contentFileName);
    $contentFile=fopen("../upload/".$contentFileName,'r');
    $content= fread($contentFile, filesize("../upload/".$contentFileName));
    fclose($contentFile);
    addChapter($chapter, $book, $content);
    header("location:chapterManager.php");
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

                <form role="form" method="post" enctype="multipart/form-data">
                    <div class="col-sm-6 col-xs-12 col-md-6">

                        <div class="form-group">
                            <label for="chapterName">Tên chương</label>
                            <input type="text" class="form-control" id="chapterName" name="chapterName" placeholder="Nhập tên chương">
                        </div>
                        <div class="form-group" style="margin-top:30px">
                            <select  class="form-control" id="bookName" name="bookName">
                                <option disabled selected>Truyện</option>
                                <?php
                                $truyen = truyenMoi();
                                while ($row_truyen = mysqli_fetch_array($truyen)) {
                                    ?>
                                    <option value="<?= $row_truyen['idTruyen'] ?>"><?= $row_truyen['tieuDe'] ?></option>
                                    <?php
                                }
                                ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="content">Nội dung</label>
                            <input type="file"  id="content" name="content" >
                        </div>

                        <input type="submit" id="btnAdd" name="btnAdd" class="btn btn-default" value="Thêm mới">

                        </form>
                    </div>
            </div>
        </div>

        <!-- /#wrapper -->

        
    </body>
</html>

