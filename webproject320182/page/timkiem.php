

        <div class="container" style="margin-bottom: 20px;">
            <div class="row">
                <div class="col-sm-9"> 

                    <div class="title-aria ">
                        <h4 class="bright-text">KẾT QUẢ TÌM KIẾM</h4>
                    </div>
                    <div class="widget">
                        <?php
                        $q = $_GET["q"];
                        settype($q, "string");
                        $ketQuaTimKiem = timKiem($q);
                        while ($row_ketQuaTimKiem = mysqli_fetch_array($ketQuaTimKiem)) {
                            ?>
                            <div class="row novel-wrap">
                                <div class="col-sm-5">
                                    <img src="<?php echo $row_ketQuaTimKiem['urlHinh'] ?>" alt="blank" width="100%" height= "240" />
                                </div>
                                <div class="col-sm-7">
                                    <p class="novel-name"><?php echo $row_ketQuaTimKiem['tieuDe'] ?></p>
                                    <div  class="card-info-text">
                                        <?php echo $row_ketQuaTimKiem['tomTat'] ?>
                                    </div>
                                    <p class="small-text"><span class="glyphicon glyphicon-eye-open"></span> <?php echo $row_ketQuaTimKiem['soLanXem'] ?></p>
                                    <a href="index.php?p=chiTietTruyen&idTruyen=<?php echo $row_ketQuaTimKiem['idTruyen'] ?>" class="btn btn-success btn-success-override">Đọc truyện</a>
                                </div>
                            </div>
                            <?php
                        }
                        ?>                        
                    </div>
                </div>
                <div class="col-sm-3">
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
                                    <img src="<?php echo $row_truyenHay_namTruyen['urlHinh']
                            ?>" alt="" class="new-novel-image"/>   
                                </div>
                                <div class="col-sm-8">
                                    <p class="novel-name">
                                        <a class="header-link" href="index.php?p=chiTietTruyen&idTruyen=<?php echo $row_truyenHay_namTruyen['idTruyen'] ?>"><?php echo $row_truyenHay_namTruyen['tieuDe']
                            ?></a>                                    
                                    </p>
                                    <p class="small-text"><span class="glyphicon glyphicon-eye-open"></span> <?php echo $row_truyenHay_namTruyen['soLanXem']
                            ?> lượt xem</p>
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
        
