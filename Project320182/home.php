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
                            <div >
                                <input name="q" type="search" style="width:80%;height:40px;border-radius: 0" class="form-control" method="get" placeholder="Tìm kiếm tên truyện, tiểu thuyết, tác giả">
                                <button class="btn btn-fix" type="submit">
                                    <i class="glyphicon glyphicon-search" style="height:40px;border-radius: 0"></i>
                                </button>
                                <input name="p" type="hidden" value="timkiem"/>
                            </div>
                        </form>
                    </div> 
                </div>
            </div>
        </nav>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div style="margin-top: 10px">
                        <img src="img/tqdn.jpg" height="250" width="370px" alt="blank">
                    </div>
                    <div style="padding-top:10px">
                        <a class="novel-name" href="#"><p>Tam quốc diễn nghĩa</p></a>
                        <div class="card-info-text" style=" -webkit-line-clamp: 2 !important; height: 40px; ">
                            tom tat tom tat tom tat tom tattom tattom tattom tattom tattom tattom tattom tat
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="title-aria">
                        <h4 class="bright-text">Tiêu điểm truyện hôm nay</h4>
                    </div>
                    <div class="widget" style="box-shadow: 0 0px">
                        <div class="row">
                            <div id="myCarousel" class="carousel slide">
                                <div class="carousel-inner">
                                    <div class="item active">
                                        <?php
                                        $truyenMoi_baTruyen = truyenMoi_baTruyen();
                                        while ($row_truyenMoi_baTruyen = mysqli_fetch_array($truyenMoi_baTruyen)) {
                                            ?>  
                                            <div class="row">
                                                <div class="novel-item" >
                                                    <div class="col-sm-4">
                                                        <img src="<?php echo $row_truyenMoi_baTruyen['urlHinh'] ?>" width="120px" height="90px" alt="blank"  style="object-fit: cover;" />
                                                    </div>
                                                    <div class="col-sm-8">
                                                        <div>
                                                            <a class="novel-name" href="index.php?p=chiTietTruyen&idTruyen=<?php echo $row_truyenMoi_baTruyen['idTruyen'] ?>"><p><?php echo $row_truyenMoi_baTruyen['tieuDe'] ?></p></a>
                                                            <div class="card-info-text" style=" -webkit-line-clamp: 2 !important; height: 40px; ">
                                                                <?php echo $row_truyenMoi_baTruyen['tomTat'] ?>
                                                            </div>
                                                        </div>
                                                    </div> 
                                                </div>
                                            </div>
                                            <?php
                                        }
                                        ?>
                                    </div>
                                    <div class="item">
                                        <?php
                                        $truyenMoi_baTruyen_tiepTheo = truyenMoi_baTruyen_tiepTheo();
                                        while ($row_truyenMoi_baTruyen_tiepTheo = mysqli_fetch_array($truyenMoi_baTruyen_tiepTheo)) {
                                            ?>  
                                            <div class="row">
                                                <div class="novel-item" >
                                                    <div class="col-sm-4">
                                                        <img src="<?php echo $row_truyenMoi_baTruyen_tiepTheo['urlHinh'] ?>" width="120px" height="90px" alt="blank"  style="object-fit: cover;" />
                                                    </div>
                                                    <div class="col-sm-8">
                                                        <div class="">
                                                            <a class="novel-name" href="index.php?p=chiTietTruyen&idTruyen=<?php echo $row_truyenMoi_baTruyen_tiepTheo['idTruyen'] ?>"><p><?php echo $row_truyenMoi_baTruyen_tiepTheo['tieuDe'] ?></p></a>
                                                            <div class="card-info-text" style=" -webkit-line-clamp: 2 !important; height: 40px; ">
                                                                <?php echo $row_truyenMoi_baTruyen_tiepTheo['tomTat'] ?>
                                                            </div>
                                                        </div>
                                                    </div> 
                                                </div>
                                            </div>
                                            <?php
                                        }
                                        ?>
                                    </div>
                                </div>
                                <div class="carousel-control-aria">
                                    <a  style="color: #fff" href="#myCarousel" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
                                    <a  style="color: #fff" href="#myCarousel" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-2">
                    <div style="margin-top: 10px; width: 100%;">
                        <div style="padding-bottom: 5px">
                            <a href="#"><img src="img/qc1.jpg" width="350px" height="120px"></a>
                        </div>
                        <div style="padding-bottom: 5px">
                            <a href="#"><img src="img/qc2.jpg" width="350px" height="120px"></a>
                        </div>
                        <div style="padding-bottom: 5px">
                            <a href="#"><img src="img/qc3.jpg" width="350px" height="120px  "></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container" style="margin-bottom: 20px;">
            <div class="row">
                <div class="col-md-9"> 

                    <div class="title-aria ">
                        <h4 class="bright-text">DANH SÁCH TRUYỆN</h4>
                    </div>
                    <div class="widget">
                        <?php
                        $truyenMoi = truyenMoi();
                        while ($row_truyenMoi = mysqli_fetch_array($truyenMoi)) {
                            ?>
                            <div class="row novel-wrap">
                                <div class="col-sm-5">
                                    <img src="<?php echo $row_truyenMoi['urlHinh'] ?>" alt="blank" width="330" height= "240" />
                                </div>
                                <div class="col-sm-7">
                                    <p class="novel-name"><?php echo $row_truyenMoi['tieuDe'] ?></p>
                                    <div  class="card-info-text">
                                        <?php echo $row_truyenMoi['tomTat'] ?>
                                    </div>
                                    <p class="small-text"><span class="glyphicon glyphicon-eye-open"></span> <?php echo $row_truyenMoi['soLanXem'] ?></p>
                                    <a href="index.php?p=chiTietTruyen&idTruyen=<?php echo $row_truyenMoi['idTruyen'] ?>" class="btn btn-fix ">Đọc truyện</a>
                                </div>
                            </div>
                            <?php
                        }
                        ?>                        
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="title-aria">
                        <h4 class="bright-text">TRUYỆN HAY</h4>
                    </div>
                    <div class="widget" style="box-shadow: 0;">
                        <?php
                        $truyenHay_namTruyen = truyenHay_namTruyen();
                        while ($row_truyenHay_namTruyen = mysqli_fetch_array($truyenHay_namTruyen)) {
                            ?>
                            <div class="row newNovel-group">
                                <div class="col-sm-4">
                                    <img src="<?php echo $row_truyenHay_namTruyen['urlHinh'] ?>" alt="" class="new-novel-image"/>   
                                </div>
                                <div class="col-sm-8">
                                    <p class="novel-name">
                                        <a class="header-link" href="index.php?p=chiTietTruyen&idTruyen=<?php echo $row_truyenHay_namTruyen['idTruyen'] ?>"><?php echo $row_truyenHay_namTruyen['tieuDe'] ?></a>                                    
                                    </p>
                                    <p class="small-text"><span class="glyphicon glyphicon-eye-open"></span> <?php echo $row_truyenHay_namTruyen['soLanXem'] ?> lượt xem</p>
                                </div>

                            </div>
                            <?php
                        }
                        ?>
                    </div>
                    <div>
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
                                            <a class="header-link" href="index.php?p=chiTietTruyen&idTruyen=<?php echo $row_truyenMoi_namTruyen['idTruyen'] ?>"><?php echo $row_truyenMoi_namTruyen['tieuDe']
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
                                        <a href="index.php?p=truyenTrongLoai&idTL= <?php echo $row_theLoai['idTL']; ?>" class="header-link-color" style="font-weight: 500;">
                                            <span class="glyphicon glyphicon-tag" style="margin-right:20px;"></span><?php echo $row_theLoai['tenTL'] ?>
                                        </a>
                                    </li>
                                    <?php
                                }
                                ?>
                            </ul>
                        </div>
                    </div>
                    <div class="title-aria">
                        <h4 class="bright-text">THỐNG KÊ</h4>
                    </div>
                    <div class="widget">

                    </div>
                    <div style="margin-top: 20px;">
                        <img src="img/qc4.gif" alt="gif-quảng-cáo" width="260px;"/>
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
