
<div class="container">
    <div class="row">
        <div class="col-sm-8">                  
            <?php
            $idTL = $_GET["idTL"];
            settype($idTL, "int");
            $truyenTheoLoai = truyenTheoLoai($idTL);
            while ($row_truyenTheoLoai = mysqli_fetch_array($truyenTheoLoai)) {
                ?>
                <img src="<?php echo $row_truyenTheoLoai['urlHinh'] ?>" alt="blank" width="100%" height= "330" />
                <div class="widget">
                    <div class="row novel-wrap">

                        <div style="padding:0 5px">
                            <h3 class="novel-name"><?php echo $row_truyenTheoLoai['tieuDe'] ?></h3>
                            <div  class="card-info-text">
                                <?php echo $row_truyenTheoLoai['tomTat'] ?>
                            </div>
                            <div style="padding: 20px 0 20px">
                                <span class="small-text"><span class="glyphicon glyphicon-eye-open"></span> <?php echo $row_truyenTheoLoai['soLanXem'] ?></span>
                                <span class="small-text" style="padding-left: 7px"><span class="glyphicon glyphicon-calendar"></span> <?php echo $row_truyenTheoLoai['ngay'] ?></span>
                                <span class="small-text" style="padding-left: 7px"><span class="glyphicon glyphicon-user"></span> <?php echo $row_truyenTheoLoai['tacGia'] ?></span>
                            </div>
                            <a href="index.php?p=chiTietTruyen&idTruyen=<?php echo $row_truyenTheoLoai['idTruyen'] ?>"><p class="btn btn-success" style="border-radius:0px">Đọc truyện</p></a>
                        </div>
                    </div>
                </div>

                <?php
            }
            ?>                        
        </div>                
        <div class="col-sm-4">          
            <div class="widget-override">
                <h4><b>Truyện hay</b></h4><hr>
                <ul class="nav nav-tabs nav-tabs-override">
                    <li class="active"><a data-toggle="tab" href="#top-all"><p style="letter-spacing: 1.5px">Top all</p></a></li>
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
</div>


