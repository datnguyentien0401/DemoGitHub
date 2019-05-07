<?php
require 'lib/dbCon.php';
require 'lib/trangChu.php';
?><!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <link rel="stylesheet" href="css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="css/main.css">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/bootstrap.css">
        <script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
        <style>

            .title-aria-background{
                padding: 25px;
                background: url(img/tngh.jpg);
                background-repeat: no-repeat;
                background-size: cover;
                background-position: center center; 
                position: relative;
            }           
        </style>
    </head>
    <body>
        <nav class="navbar navbar-inverse" style="border-radius: 0px;">
            <div class="container">
                <div class="title-aria-background">
                    <h1 class="bright-text">UNOVEL</h1>
                </div>
                <div class="container-fluid">
                    <div class="navbar-header">
                        <a class="navbar-brand bright-text" href="index.php?p=">UNOVEL</a>
                    </div>
                    <ul class="nav navbar-nav">
                        <li><a class="bright-text" href="index.php?p=">Trang chủ</a></li>
                        <li class="dropdown">
                            <a class="dropdown-toggle bright-text" data-toggle="dropdown" href="#">Thể loại
                            </a>
                            <ul class="dropdown-menu" >                               
                                <?php
                                $theLoai = theLoai();
                                while ($row_theLoai = mysqli_fetch_array($theLoai)) {
                                    ?>
                                    <li><a  href="index.php?p=truyenTrongLoai&idTL=<?php echo $row_theLoai['idTL'] ?>"><?php echo $row_theLoai['tenTL'] ?></a></li>
                                    <?php
                                }
                                ?>
                            </ul>
                        </li>
                        <li><a class="bright-text" href="index.php?p=truyenMoi">Truyện mới đăng</a></li>
                        <li><a class="bright-text" href="index.php?p=truyenHay">Truyện hay</a></li>
                        <li><a class="bright-text" href="index.php?p=listTruyen">List truyện</a></li>
                    </ul>
                    <div class="col-md-5">                      
                        <form class="navbar-form">
                            <div >s
                                <input type="search" style="width:80%;height:40px;border-radius: 0" class="form-control" placeholder="Tìm kiếm tên truyện, tiểu thuyết, tác giả">
                                <button class="btn btn-fix" type="submit">
                                    <i class="glyphicon glyphicon-search" style="height:40px;border-radius: 0"></i>
                                </button>
                            </div>
                        </form>
                    </div> 
                </div>
            </div>
        </nav>
        <div style="margin-bottom: 20px;">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">  
                        <?php
                        $idTruyen = $_GET["idTruyen"];
                        settype($idTruyen, "int");
                        $truyen = truyen($idTruyen);
                        while ($row_truyen = mysqli_fetch_array($truyen)) {
                            ?>
                            <div class="title-aria">                        
                                <h1 class="bright-text"><?php echo $row_truyen['tieuDe_khongDau'] ?></h1>                                
                            </div>
                            <div class="novel-thumbnail">
                                <img width="750" height="450" src="<?php echo $row_truyen['urlHinh'] ?>" alt="blank" style="object-fit: cover"/>
                            </div>
                            <div class="novel-tab">
                                <div class="chapter-box">
                                    <h3 class="chapter-title">Sơ lược</h3>
                                </div>
                                <div class="chapter-tab">
                                    <p>
                                        <?php echo $row_truyen['tomTat'] ?>
                                    </p>
                                </div>
                            </div>
                            <div class="novel-tab">
                                <div class="chapter-box">
                                    <h3 class="chapter-title">Các chương</h3>
                                </div>
                                <div class="chapter-tab">
                                    <?php
                                    $chuongTheoTruyen = chuongTheoTruyen($idTruyen);
                                    while ($row_chuongTheoTruyen = mysqli_fetch_array($chuongTheoTruyen)) {
                                        ?>
                                        <a href="index.php?p=chuongTrongTruyen&idChuong=<?php echo $row_chuongTheoTruyen['idChuong'] ?>"><?php echo $row_truyen['tieuDe_khongDau'] ?> <?php echo $row_chuongTheoTruyen['tenChuong'] ?></a><hr>

                                        <?php
                                    }
                                    ?>
                                </div>
                            </div>
                            <?php
                        }
                        ?>
                    </div>
                    <div class="col-md-4">
                        <div>
                            <div class="title-aria">
                                <h4 class="bright-text">TRUYỆN HAY</h4>
                            </div>
                            <div class="widget">
                                <?php
                                $truyenHay_namTruyen = truyenHay_namTruyen();
                                while ($row_truyenHay_namTruyen = mysqli_fetch_array($truyenHay_namTruyen)) {
                                    ?>
                                    <div class="row newNovel-group">
                                        <div class="col-sm-4">
                                            <img src="<?php echo $row_truyenHay_namTruyen['urlHinh']?>" alt="" class="new-novel-image"/>   
                                        </div>
                                        <div class="col-sm-8">
                                            <p class="novel-name">
                                                <a class="header-link" href="index.php?p=chiTietTruyen&idTruyen=<?php echo $row_truyenHay_namTruyen['idTruyen'] ;?>"><?php echo $row_truyenHay_namTruyen['tieuDe']?></a>                                    
                                            </p>
                                            <p class="small-text"><span class="glyphicon glyphicon-eye-open"></span> <?php echo $row_truyenHay_namTruyen['soLanXem']?> lượt xem</p>
                                        </div>
                                    </div>
                                    <?php
                                }
                                ?>
                            </div>
                            <div class="title-aria">
                                <h4 class="bright-text">TRUYỆN MỚI ĐĂNG</h4>
                            </div>
                            <div class="widget">
                                <?php
                                $truyenMoi_namTruyen = truyenMoi_namTruyen();
                                while ($row_truyenMoi_namTruyen = mysqli_fetch_array($truyenMoi_namTruyen)) {
                                    ?>
                                    <div class="row newNovel-group">
                                        <div class="col-sm-4">
                                            <img src="<?php echo $row_truyenMoi_namTruyen['urlHinh']
                                    ?>" alt="" class="new-novel-image"/>   
                                        </div>
                                        <div class="col-sm-8">
                                            <p class="novel-name">
                                                <a class="header-link" href="index.php?p=chiTietTruyen&idTruyen=<?php echo $row_truyenMoi_namTruyen['idTruyen'] ;?>"><?php echo $row_truyenMoi_namTruyen['tieuDe']
                                    ?></a>                                    
                                            </p>
                                            <p class="small-text"><span class="glyphicon glyphicon-eye-open"></span> <?php echo $row_truyenMoi_namTruyen['soLanXem']
                                    ?> lượt xem</p>
                                        </div>
                                    </div>
                                    <?php
                                }
                                ?>
                            </div>
                        </div>
                        <div>
                            <div class="title-aria">
                                <h4 class="bright-text">THỂ LOẠI</h4>
                            </div>
                            <div class="widget">
                                <ul>
                                    <?php
                                    $theLoai2 = theLoai();
                                    while ($row_theLoai = mysqli_fetch_array($theLoai2)) {
                                        ?>
                                        <li class="list-group-item" style="padding-left: 0;border: 0;">
                                            <a href="index.php?p=truyenTrongLoai&idTL=<?php echo $row_theLoai['idTL'] ;?>" class="header-link-color" style="font-weight: 500;">
                                                <span class="glyphicon glyphicon-tag" style="margin-right:20px;"></span><?php echo $row_theLoai['tenTL'] ?>
                                            </a>
                                        </li>
                                        <?php
                                    }
                                    ?>
                                </ul>
                            </div>
                        </div>                        
                    </div>
                </div>
            </div>
        </div>
        <footer class="black-page">
            <div class="container" >
                <div class="row">
                    <div class="col-md-4">
                        <h1 class="bright-text" style="font-weight:800">UNOVEL</h1>
                    </div>
                    <div class="col-md-4" style="padding-top: 20px;">
                        <h4 class="bright-text">MENU</h4>
                        <hr>
                        <div class="col-sm-6">
                            <ul class="list-group">
                                <li class="list-group-item list-group-item-fix"><a class="link-color" href="#">Trang chủ</a></li>
                                <li class="list-group-item list-group-item-fix"><a class="link-color" href="#">Thể loại</a></li>
                                <li class="list-group-item list-group-item-fix"><a class="link-color" href="#">Truyện hay</a></li>
                            </ul>
                        </div>
                        <div class="col-sm-6">
                            <ul class="list-group">
                                <li class="list-group-item list-group-item-fix"><a class="link-color" href="#">Truyện mới</a></li>
                                <li class="list-group-item list-group-item-fix"><a class="link-color" href="#">List truyện</a></li>

                            </ul>
                        </div>
                    </div>
                    <div class="col-md-4" style="padding-top: 20px;">
                        <h4 class="bright-text">CONTACT</h4>
                        <hr>
                        <ul class="list-group">
                            <li class="list-group-item list-group-item-fix"><a class="link-color" href="#">Điện thoại</a></li>
                            <li class="list-group-item list-group-item-fix"><a class="link-color" href="#">Địa chỉ</a></li>
                            <li class="list-group-item list-group-item-fix"><a class="link-color" href="#">Email</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </footer>
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.2.min.js"><\/script>')</script>
        <script src="js/vendor/bootstrap.min.js"></script>
        <script src="js/main.js"></script>
        <script language="javascript">
            $(function () {
                $('.dropdown').hover(function () {
                    $(this).addClass('open');
                },
                        function () {
                            $(this).removeClass('open');
                        });
            });
        </script>
    </body>
</html>