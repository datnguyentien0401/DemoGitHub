<?php
session_start();
require 'lib/dbCon.php';
require 'lib/trangChu.php';
if (isset($_GET["p"]))
    $p = $_GET["p"];
else
    $p = "";
?>
<?php
if (isset($_GET["logout"])) {
    unset($_SESSION["idUser"]);
    unset($_SESSION["username"]);
    unset($_SESSION["idGroup"]);
}
?>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>UNovel</title>

        <link href="css/style.css" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" href="css/main.css">
        <link rel="stylesheet" href="css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/bootstrap.css">

        <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>

        <script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.2.min.js"><\/script>')</script>
        <script src="js/vendor/bootstrap.min.js"></script>
        <script src="js/main.js"></script>
    </head>
    <body>
        <div >

            <div class="title-aria-background">
                <div class="container">

                    <p class="contact">
                        <span class="glyphicon glyphicon-earphone"></span> (+84)981067269     
                        <span class="glyphicon glyphicon-envelope" style="padding-left: 5px"></span> dat.nt0401@gmail.com 
                        <span class="glyphicon glyphicon-map-marker" style="padding-left: 5px"></span> Đại học Bách Khoa Hà Nội     
                    </p>


                    <p class="login-link">
                        <?php
                        if (isset($_SESSION["idUser"])) {
                            if ($_SESSION["idUser"] == 1)
                                require 'Block/adminlink.php';
                            else
                                require 'Block/admindefaultlink.php';
                        } else
                            require 'Block/loginLink.php';
                        ?>
                    </p>


                    <h1 class="bright-text"><span class="glyphicon glyphicon-book"></span> UNOVEL</h1>

                </div>
            </div> 
<?php
require 'Block/menu.php';
switch ($p) {

    case "truyenTrongLoai":
        require 'page/truyenTrongLoai.php';
        break;
    case "chiTietTruyen":
        require 'page/chiTietTruyen.php';
        break;
    case "chuongTrongTruyen":
        require 'page/chuongTrongTruyen.php';
        break;
    case "lienhe":
        require 'page/contact.php';
        break;
    case "timkiem":
        require 'page/timkiem.php';
        break;
    case "truyenMoi":
        require 'page/listTruyen.php';
        break;
    case "truyenHay":
        require 'page/listTruyen.php';
        break;
    case "truyenHay_topWeek":
        require 'page/listTruyen.php';
        break;
    case "truyenHay_topThang":
        require 'page/listTruyen.php';
        break;
    case "listTruyen":
        require 'page/listTruyen.php';
        break;
    case "truyenFull":
        require 'page/listTruyen.php';
        break;
    default :
        require 'page/home.php';
        break;
}
require 'Block/footer.php';
?>
        </div>

        <script language="javascript">
            $(function () {
                $('.dropdown').hover(function () {
                    $(this).addClass('open');
                },
                        function () {
                            $(this).removeClass('open');
                        });
            });

            function openNovel(evt, idTruyen) {
                var i, focusNovelBox, focusNovel;
                focusNovelBox = document.getElementsByClassName("focus-novel-box");
                for (i = 0; i < focusNovelBox.length; i++) {
                    focusNovelBox[i].style.display = "none";
                }
                focusNovel = document.getElementsByClassName("focus-novel");
                for (i = 0; i < focusNovel.length; i++) {
                    focusNovel[i].className = focusNovel[i].className.replace(" active", "");
                }
                document.getElementById(idTruyen).style.display = "block";
                evt.currentTarget.className += " active";
            }
        </script>
    </body>
</html>



