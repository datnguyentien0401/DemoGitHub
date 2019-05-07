
        <div class="container" style="margin-bottom: 20px">
            <?php
            $idTruyen = $_GET["idTruyen"];
            settype($idTruyen, "int");
            $idChuong = $_GET["idChuong"];
            settype($idChuong, "int");
            $noiDungChuong = noiDungChuong($idChuong);
            while ($row_noiDungChuong = mysqli_fetch_array($noiDungChuong)) {
                ?>
                <div class="row">                                                                      
                    <div class="title-aria">
                        <div style="text-align: center">
                            <h1 class = "bright-text"><?php echo $row_noiDungChuong['tenChuong']; ?></h1>
                        </div>
                        <div class="link-chapter-aria">                               
                            <a href = "index.php?p=chuongTrongTruyen&idTruyen=<?php echo $idTruyen ?>&idChuong=<?php echo $row_noiDungChuong['idChuong'] - 1; ?>"><p class = "btn btn-default">Chương trước</p></a>                               
                            <select class="form-control" style="width: 200px" onchange="location = this.options[this.selectedIndex].value;">
                                <option disabled selected>chọn chương</option>
                                <?php
                                $chuongTheoTruyen = chuongTheoTruyen($idTruyen);
                                while ($row_chuongTheoTruyen = mysqli_fetch_array($chuongTheoTruyen)) {
                                    ?>                                        
                                    <option value="index.php?p=chuongTrongTruyen&idTruyen=<?php echo $idTruyen ?>&idChuong=<?php echo $row_chuongTheoTruyen['idChuong'] ?>"><?php echo $row_chuongTheoTruyen['tenChuong'] ?></option>
                                    <?php
                                }
                                ?>
                            </select>                                               
                            <a href = "index.php?p=chuongTrongTruyen&idTruyen=<?php echo $idTruyen ?>&idChuong=<?php echo $row_noiDungChuong['idChuong'] + 1; ?>" class = "btn btn-default">Chương sau</a>
                        </div>
                    </div>
                    <div class="novel-tab">                   
                        <div class="chapter-tab">                       
                            <p class="chapter-content"> <?php echo $row_noiDungChuong['noiDung']; ?></p>                      
                        </div>
                    </div>
                </div>
                <div class="link-chapter-aria">                               
                    <a href = "index.php?p=chuongTrongTruyen&idTruyen=<?php echo $idTruyen ?>&idChuong=<?php echo $row_noiDungChuong['idChuong'] - 1; ?>"><p class = "btn btn-default">Chương trước</p></a>                               
                    <select class="form-control" style="width: 200px" onchange="location = this.options[this.selectedIndex].value;">
                        <option disabled selected>chọn chương</option>
                        <?php
                        $chuongTheoTruyen = chuongTheoTruyen($idTruyen);
                        while ($row_chuongTheoTruyen = mysqli_fetch_array($chuongTheoTruyen)) {
                            ?>                                        
                            <option value="index.php?p=chuongTrongTruyen&idTruyen=<?php echo $idTruyen ?>&idChuong=<?php echo $row_chuongTheoTruyen['idChuong'] ?>"><?php echo $row_chuongTheoTruyen['tenChuong'] ?></option>
                            <?php
                        }
                        ?>
                    </select>                                               
                    <a href = "index.php?p=chuongTrongTruyen&idTruyen=<?php echo $idTruyen ?>&idChuong=<?php echo $row_noiDungChuong['idChuong'] + 1; ?>" class = "btn btn-default">Chương sau</a>
                </div>
                <?php
            }
            ?>
        </div>
        