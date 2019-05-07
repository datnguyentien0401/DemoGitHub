
<div class="container"> 
    <nav class="navbar navbar-inverse navbar-override" >
        <div class="container-fluid">                 
            <ul class="nav navbar-nav"> 
                <li><a class="bright-text" href="index.php?p="><span class="glyphicon glyphicon-home"></span> Trang chủ</a></li>
                <li class="dropdown">
                    <a class="dropdown-toggle bright-text" data-toggle="dropdown" href="#">Thể loại
                    </a>
                    <ul class="dropdown-menu" >                               
                        <?php
                        $theLoai = theLoai();
                        while ($row_theLoai = mysqli_fetch_array($theLoai)) {
                            ?>
                            <li class="dorpdown-menu-content"><a  href="index.php?p=truyenTrongLoai&idTL=<?php echo $row_theLoai['idTL'] ?>"><?php echo $row_theLoai['tenTL'] ?></a></li>
                            <?php
                        }
                        ?>
                    </ul>
                </li>
                <li><a class="bright-text" href="index.php?p=truyenTrongLoai&idTL=7">Truyện Việt Nam</a></li>
                <li class="dropdown"><a class="dropdown-toggle bright-text" data-toggle="dropdown" href="#">Truyện hay</a>
                    <ul class="dropdown-menu" > 
                        <li class="dorpdown-menu-content"><a href="index.php?p=truyenHay_topWeek" >Top tuần</a></li>
                        <li class="dorpdown-menu-content"><a href="index.php?p=truyenHay_topThang" >Top tháng</a></li>
                        <li class="dorpdown-menu-content"><a href="index.php?p=truyenHay" >Top all</a></li>
                    </ul>
                </li>
                <li class="dropdown"><a class="dropdown-toggle bright-text" data-toggle="dropdown" href="#">List truyện</a>
                    <ul class="dropdown-menu" >                               
                        <li class="dorpdown-menu-content"><a href="index.php?p=truyenMoi" >Truyện mới đăng</a></li>
                        <li class="dorpdown-menu-content"><a href="index.php?p=truyenFull" >Truyện full</a></li>
                        <li class="dorpdown-menu-content"><a href="index.php?p=listTruyen" >Tất cả</a></li>
                    </ul>
                </li>
                
                <li>
                    <a class="bright-text" href="index.php?p=lienhe">liên hệ</a>                    
                </li>                       
            </ul>                                        
            <form class="navbar-form" style="float: right">
                <input name="q" type="search"  class="form-control" style="border-radius: 0px" size="35" method="get" placeholder="Tìm kiếm tên truyện, tiểu thuyết">
                <button class="btn btn-success btn-success-override" type="submit" style="border-radius: 0px">
                    tìm kiếm
                </button>
                <input name="p" type="hidden" value="timkiem"/>
            </form>                    
        </div>
    </nav>
</div>

