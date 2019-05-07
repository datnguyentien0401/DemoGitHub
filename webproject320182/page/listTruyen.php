<div class="container">
    <div class="list-aria">
        <div class="black-page">
            <div class="container">
                <h1 class="title" >DANH SÁCH TRUYỆN</h1>
            </div>
        </div>
        <table class="table table-hover">
            <thead>
                <tr>                            
                    <th scope="col">Tên truyện</th>
                    <th scope="col">Tác giả</th>
                    <th scope="col" style="text-align: center">Số chapter</th>
                    <th scope="col" style="text-align: center">Lượt xem</th>
                </tr>
            </thead>
            <tbody>
                <?php
                if (isset($_GET["p"])) {
                    $p = $_GET["p"];
                }
                switch ($p) {
                    case "truyenMoi":
                        $danhSachTruyen = truyenMoi();
                        break;
                    case "truyenHay":
                        $danhSachTruyen = truyenHay_all();
                        break;
                    case "truyenHay_topWeek":
                        $danhSachTruyen = truyenHay_topWeek();
                        break;
                    case "truyenHay_topThang":
                        $danhSachTruyen = truyenHay_topThang();
                        break;
                    case "listTruyen":
                        $danhSachTruyen = danhSachTruyen();
                        break;
                    case "truyenFull":
                        $danhSachTruyen = truyenFull();
                        break;
                }
                while ($row_danhSachTruyen = mysqli_fetch_array($danhSachTruyen)) {
                    ?>
                    <tr>                                 
                        <td>
                            <a style="color: #333; text-decoration: none" href="index.php?p=chiTietTruyen&idTruyen=<?php echo $row_danhSachTruyen['idTruyen'] ?>">
                                <p><?php echo $row_danhSachTruyen['tieuDe'] ?></p>
                            </a>
                        </td>
                        <td scope="row"><?php echo $row_danhSachTruyen['tacGia'] ?></td>
                        <td style="text-align: center">
                            <?php
                            $idTruyen = $row_danhSachTruyen['idTruyen'];
                            $soChuong = soChuongCuaTruyen($idTruyen);
                            $row_soChuong = mysqli_fetch_array($soChuong);
                            echo $row_soChuong['soChuong'];
                            ?>
                        </td>
                        <td style="text-align: center"><?php echo $row_danhSachTruyen['soLanXem'] ?></td>
                    </tr>
                    <?php
                }
                ?>   
            </tbody>
        </table>
    </div>
</div>
