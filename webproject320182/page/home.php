
<div class="container">
    <div class="top-aria">
        <div class="row">
            <div class="col-sm-4">
                <?php
                $truyenMoi_motTruyen = truyenMoi_sauTruyen();
                while ($row_truyenMoi_motTruyen = mysqli_fetch_array($truyenMoi_motTruyen)) {
                    ?>
                    <div class="focus-novel-box" id="<?php echo $row_truyenMoi_motTruyen['idTruyen'] ?>">

                        <img src="<?php echo $row_truyenMoi_motTruyen['urlHinh'] ?>" height="270" width="100%" alt="blank">

                        <a  href="index.php?p=chiTietTruyen&idTruyen=<?php echo $row_truyenMoi_motTruyen['idTruyen'] ?>"><h3 class="header-link"><?php echo $row_truyenMoi_motTruyen['tieuDe'] ?></h3></a>
                        <div class="card-info-text" style=" -webkit-line-clamp: 3 !important; height: 60px; ">
                            <?php echo $row_truyenMoi_motTruyen['tomTat'] ?>
                        </div>

                    </div>  
                    <?php
                }
                ?>                    
            </div>
            <div class="col-sm-4">
                <div class="focus-novel-aria">
                    <h4><b>Tiêu điểm truyện hôm nay</b></h4><hr>
                    <div class="row">
                        <div id="myCarousel" class="carousel slide">
                            <div class="carousel-inner">
                                <div class="item active">                                           
                                    <?php
                                    $truyenMoi_baTruyen = truyenMoi_baTruyen();
                                    while ($row_truyenMoi_baTruyen = mysqli_fetch_array($truyenMoi_baTruyen)) {
                                        ?> 
                                        <div class="focus-novel" onmouseover="openNovel(event, '<?php echo $row_truyenMoi_baTruyen['idTruyen'] ?>')">
                                            <div class="row">
                                                <div class="col-sm-4">
                                                    <img src="<?php echo $row_truyenMoi_baTruyen['urlHinh'] ?>" width="100%" height="90" alt="blank"  style="object-fit: cover;" />
                                                </div>
                                                <div class="col-sm-8" style="max-height:90px">

                                                    <a class="novel-name" href="index.php?p=chiTietTruyen&idTruyen=<?php echo $row_truyenMoi_baTruyen['idTruyen'] ?>">
                                                        <p class="header-link"><?php echo $row_truyenMoi_baTruyen['tieuDe'] ?></p>
                                                    </a>
                                                    <div class="card-info-text" style=" -webkit-line-clamp: 2 !important; height: 40px;">
                                                        <?php echo $row_truyenMoi_baTruyen['tomTat'] ?>
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
                                        <div class="focus-novel" onmouseover="openNovel(event, '<?php echo $row_truyenMoi_baTruyen_tiepTheo['idTruyen'] ?>')">
                                            <div class="row">
                                                <div class="col-sm-4">
                                                    <img src="<?php echo $row_truyenMoi_baTruyen_tiepTheo['urlHinh'] ?>" width="100%" height="90px" alt="blank"  style="object-fit: cover;" />
                                                </div>
                                                <div class="col-sm-8">

                                                    <a class="novel-name" href="index.php?p=chiTietTruyen&idTruyen=<?php echo $row_truyenMoi_baTruyen_tiepTheo['idTruyen'] ?>"><p class="header-link"><?php echo $row_truyenMoi_baTruyen_tiepTheo['tieuDe'] ?></p></a>
                                                    <div class="card-info-text" style=" -webkit-line-clamp: 2 !important; height: 40px; ">
                                                        <?php echo $row_truyenMoi_baTruyen_tiepTheo['tomTat'] ?>
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

                                <a class="carousel-control-color" href="#myCarousel" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>

                                <a class="carousel-control-color" href="#myCarousel" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>   
            <div class="col-sm-4">
                <div style="width: 100%">
                    <div style="padding-bottom: 10px">
                        <a href="#"><img src="img/qc1.gif" width="100%" height="120px"></a>
                    </div>
                    <div style="padding-bottom: 10px">
                        <a href="#"><img src="img/qc2.gif" width="100%" height="120px"></a>
                    </div>
                    <div >
                        <a href="#"><img src="img/qc1.jpg" width="100%" height="120px  "></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-8">             
            <?php
            $numOfPage = 5;
            if (isset($_GET["page"])) {
                $page = $_GET["page"];
                settype($page, "int");
            } else {
                $page = 1;
            }
            $from = ($page - 1) * $numOfPage;
            $truyenMoi = truyenMoi_phanTrang($from, $numOfPage);
            while ($row_truyenMoi = mysqli_fetch_array($truyenMoi)) {
                ?>
                <img src="<?php echo $row_truyenMoi['urlHinh'] ?>" alt="blank" width="100%" height= "330" />
                <div class="widget">
                    <div class="novel-wrap">
                        <div style="padding:0 5px">
                            <h3 ><b><?php echo $row_truyenMoi['tieuDe'] ?></b></h3>
                            <div  class="card-info-text">
                                <?php echo $row_truyenMoi['tomTat'] ?>
                            </div>
                            <div style="padding: 20px 0 20px">
                                <span class="small-text"><span class="glyphicon glyphicon-eye-open"></span> <?php echo $row_truyenMoi['soLanXem'] ?></span>
                                <span class="small-text" style="padding-left: 7px"><span class="glyphicon glyphicon-calendar"></span> <?php echo $row_truyenMoi['ngay'] ?></span>
                                <span class="small-text" style="padding-left: 7px"><span class="glyphicon glyphicon-user"></span> <?php echo $row_truyenMoi['tacGia'] ?></span>
                            </div>
                            <a href="index.php?p=chiTietTruyen&idTruyen=<?php echo $row_truyenMoi['idTruyen'] ?>" ><p class="btn btn-success" style="border-radius:0px">Đọc truyện</p></a>
                        </div>
                    </div>
                </div>
                <?php
            }
            ?>   
            <nav class="blog-pagination">
                <ul class="pagination pagination-override">
                    <li class="page-item">
                        <a href="index.php?p=&page=<?=($page<=1?1:$page-1)?>"" class="page-link " aria-label="Previous">
                            <i class="ti-angle-left"><</i>
                        </a>
                    </li>
                    <?php
                    $tongSoTruyen = mysqli_num_rows(truyenMoi());
                    $tongSoTrang = ceil($tongSoTruyen / $numOfPage);
                    for ($i = 1; $i <= $tongSoTrang; $i++) {
                        ?>
                        <li class="page-item">
                            <a href="index.php?p=&page=<?= $i ?>" class="page-link"><?= $i ?></a>
                        </li>
                        <?php
                    }
                    ?>
                    <li class="page-item">
                        <a href="index.php?p=&page=<?=($page>=$tongSoTrang?$page:$page+1)?>" class="page-link" aria-label="Next">
                            <i class="ti-angle-right">></i>
                        </a>
                    </li>

                </ul>
            </nav>
        </div>
        <div class="col-sm-4">          
            <div class="widget-override">
                <h4><b>Truyện hay</b></h4><hr>
                <ul class="nav nav-tabs nav-tabs-override">
                    <li class="active "><a data-toggle="tab" href="#top-all"><p style="letter-spacing: 1.5px">Top all</p></a></li>
                    <li><a data-toggle="tab" href="#top-week"><p style="letter-spacing: 1.5px">Top tuần</p></a></li>
                    <li><a data-toggle="tab" href="#top-month"><p style="letter-spacing: 1.5px">Top tháng</p></a></li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane fade in active" id="top-all">
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
                                    <div style="margin-top: 25px">
                                        <p class="small-text"><span class="glyphicon glyphicon-eye-open"></span> <?php echo $row_truyenHay_namTruyen['soLanXem'] ?> lượt xem</p>
                                    </div>
                                </div>
                            </div>
                            <?php
                        }
                        ?>
                    </div>
                    <div class=" tab-pane fade" id="top-week" >
                        <?php
                        $truyenHay_topWeek = truyenHay_topWeek_namTruyen();
                        while ($row_truyenHay_topWeek = mysqli_fetch_array($truyenHay_topWeek)) {
                            ?>
                            <div class="row newNovel-group">
                                <div class="col-sm-4">
                                    <img src="<?php echo $row_truyenHay_topWeek['urlHinh'] ?>" alt="" class="new-novel-image"/>   
                                </div>
                                <div class="col-sm-8">
                                    <p class="novel-name">
                                        <a class="header-link" href="index.php?p=chiTietTruyen&idTruyen=<?php echo $row_truyenHay_topWeek['idTruyen'] ?>"><?php echo $row_truyenHay_topWeek['tieuDe'] ?></a>                                    
                                    </p>
                                    <div style="margin-top: 25px">
                                        <p class="small-text"><span class="glyphicon glyphicon-eye-open"></span> <?php echo $row_truyenHay_topWeek['soLanXem'] ?> lượt xem</p>
                                    </div>
                                </div>
                            </div>
                            <?php
                        }
                        ?>
                    </div>
                    <div class="tab-pane fade" id="top-month">
                        <?php
                        $truyenHay_topThang = truyenHay_topThang_namTruyen();
                        while ($row_truyenHay_topThang = mysqli_fetch_array($truyenHay_topThang)) {
                            ?>
                            <div class="row newNovel-group">
                                <div class="col-sm-4">
                                    <img src="<?php echo $row_truyenHay_topThang['urlHinh'] ?>" alt="" class="new-novel-image"/>   
                                </div>
                                <div class="col-sm-8">
                                    <p class="novel-name">
                                        <a class="header-link" href="index.php?p=chiTietTruyen&idTruyen=<?php echo $row_truyenHay_topThang['idTruyen'] ?>"><?php echo $row_truyenHay_topThang['tieuDe'] ?></a>                                    
                                    </p>
                                    <div style="margin-top: 30px">
                                        <p class="small-text"><span class="glyphicon glyphicon-eye-open"></span> <?php echo $row_truyenHay_topThang['soLanXem'] ?> lượt xem</p>
                                    </div>
                                </div>
                            </div>
                            <?php
                        }
                        ?>
                    </div>
                </div>
            </div>
            <div class="widget-override">
                <h4><b>Truyện mới đăng</b></h4><hr>
                <?php
                $truyenMoi_namTruyen = truyenMoi_namTruyen();
                while ($row_truyenMoi_namTruyen = mysqli_fetch_array($truyenMoi_namTruyen)) {
                    ?>
                    <div class="row newNovel-group">
                        <div class="col-sm-4">
                            <img src="<?php echo $row_truyenMoi_namTruyen['urlHinh'] ?>" alt="" class="new-novel-image"/>   
                        </div>
                        <div class="col-sm-8">
                            <p class="novel-name">
                                <a class="header-link" href="index.php?p=chiTietTruyen&idTruyen=<?php echo $row_truyenMoi_namTruyen['idTruyen'] ?>"><?php echo $row_truyenMoi_namTruyen['tieuDe'] ?></a>                                    
                            </p>
                            <div style="margin-top: 30px">
                                <p class="small-text"><span class="glyphicon glyphicon-eye-open"></span> <?php echo $row_truyenMoi_namTruyen['soLanXem'] ?> lượt xem</p>
                            </div>
                        </div>
                    </div>
                    <?php
                }
                ?>
            </div>
            <div class="widget-override">
                <h4><b>Thể loại </b></h4><hr>
                <div class="link-categories-aria">
                    <ul>
                        <?php
                        $theLoai2 = theLoai();
                        while ($row_theLoai = mysqli_fetch_array($theLoai2)) {
                            ?>
                            <li>
                                <a href="index.php?p=truyenTrongLoai&idTL= <?php echo $row_theLoai['idTL']; ?>" class="link-categories">
                                    <?php echo $row_theLoai['tenTL'] ?>
                                </a>
                            </li>

                            <?php
                        }
                        ?>
                    </ul>
                </div>
            </div>
            <div class="widget-override">
                <h4><b>Thống kê</b></h4><hr>
                <p class="statistical"><span class="glyphicon glyphicon-ok"></span> Số truyện: 14</p>
                <p class="statistical"><span class="glyphicon glyphicon-ok"></span> Số lượt xem: 1670</p>              
            </div>
        </div>
    </div>

    <div class="photostory-aria">
        <h2 class="photostory-title"><span class="glyphicon glyphicon-film"></span> Photostory</h2>
        <div id="myCarousel1" class="carousel slide">
            <ol class="carousel-indicators">
                <li data-target="#myCarousel1" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel1" data-slide-to="1"></li>
                <li data-target="#myCarousel1" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="item row active">                                           
                    <?php
                    $photo1 = truyenMoi_baTruyen();
                    while ($row_photo1 = mysqli_fetch_array($photo1)) {
                        ?>
                        <div class="col-sm-4">
                            <div class="view">
                                <img width="100%" height="200" src="<?php echo $row_photo1['urlHinh']; ?>" alt="Second slide">

                            </div>                                    

                        </div>
                        <?php
                    }
                    ?>
                </div>
                <div class="item row">
                    <?php
                    $photo2 = truyenMoi_baTruyen_tiepTheo();
                    while ($row_photo2 = mysqli_fetch_array($photo2)) {
                        ?>
                        <div class="col-sm-4">
                            <div class="view">
                                <img  width="100%" height="200" src="<?php echo $row_photo2['urlHinh']; ?>" alt="Second slide">
                                <div class="mask rgba-black-strong"></div>
                            </div>

                        </div>
                        <?php
                    }
                    ?>
                </div>
                <div class="item row">

                    <?php
                    $photo3 = truyenMoi_baTruyen();
                    while ($row_photo3 = mysqli_fetch_array($photo3)) {
                        ?>
                        <div class="col-sm-4">
                            <div class="view">
                                <img width="100%" height="200" src="<?php echo $row_photo3['urlHinh']; ?>" alt="Second slide">
                                <div class="mask rgba-black-strong"></div>
                            </div>

                        </div>
                        <?php
                    }
                    ?>

                </div>
            </div>
            <a class="carousel-control left" style="color: #fff; filter: 0!important"  href="#myCarousel1" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control right" style="color: #fff"  href="#myCarousel1" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
</div>





