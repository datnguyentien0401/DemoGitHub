
<div style="margin-bottom: 20px;">
    <div class="container">
        <div class="row">
            <div class="col-sm-8">  
                <?php
                $idTruyen = $_GET["idTruyen"];
                settype($idTruyen, "int");
                capNhapSoLanXemTruyen($idTruyen);
                $truyen = truyen($idTruyen);
                while ($row_truyen = mysqli_fetch_array($truyen)) {
                    ?>
                    <div class="title-aria">                        
                        <h2 class="bright-text"><?php echo $row_truyen['tieuDe'] ?></h2>                                
                    </div>
                    <div class="widget">
                        <div class="novel-thumbnail">
                            <img width="100%" height="450" src="<?php echo $row_truyen['urlHinh'] ?>" alt="blank"/>
                        </div>
                        <div class="novel-tab">
                            <div class="chapter-box">
                                <h3 class="chapter-title">Sơ lược</h3>
                            </div>
                            <div class="chapter-tab">
                                <p class="chapter-content">
                                    <?php echo $row_truyen['tomTat'] ?>
                                </p>
                            </div>
                        </div>
                        <div class="novel-info">
                            <p class="chapter-content"><span>Thể loại:</span><?php echo $row_truyen['tenTL']; ?></p>
                            <p class="chapter-content"><span>Tác giả: </span><?php echo $row_truyen['tacGia']; ?></p>
                            <p class="chapter-content"><span>Ngày đăng: </span><?php echo $row_truyen['ngay']; ?></p>
                            <p class="chapter-content"><span>Số lượt xem: </span><?php echo $row_truyen['soLanXem']; ?> </p>
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
                                    <a href="index.php?p=chuongTrongTruyen&idTruyen=<?php echo $idTruyen ?>&idChuong=<?php echo $row_chuongTheoTruyen['idChuong'] ?>"><p class="chapter-content"><?php echo $row_truyen['tieuDe'] ?> <?php echo $row_chuongTheoTruyen['tenChuong'] ?></p></a><hr>

                                    <?php
                                }
                                ?>
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
</div>


