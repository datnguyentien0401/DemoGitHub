<%@ taglib prefix="c" uri="http://java.sun.com/jsp/jstl/core" %>
<%@taglib prefix="s" uri="/struts-tags" %>
<%@page contentType="text/html" pageEncoding="UTF-8"%>

<div class="container">
            <div class="top-aria">
                <div class="row">
                    <div class="col-sm-4">
                        <c:forEach var="book" items="${listBookSixBooks}">
                        <div class="focus-novel-box" id="${book.idTruyen}">

                            <img src="${book.urlHinh}" height="270" width="100%" alt="blank">

                            <a  href="index.html?p=chiTietTruyen&idTruyen=${book.idTruyen}"><h3 class="header-link">${book.tenTruyen}</h3></a>
                            <div class="card-info-text" style=" -webkit-line-clamp: 3 !important; height: 60px; ">
                                ${book.tomTat}
                            </div>

                        </div>  
                        </c:forEach>                   
                    </div>
                    <div class="col-sm-4">
                        <div class="focus-novel-aria">
                            <h4><b>Tiêu điểm truyện hôm nay</b></h4><hr>
                            <div class="row">
                                <div id="myCarousel" class="carousel slide">
                                    <div class="carousel-inner">
                                        <div class="item active">                                           
                                            <c:forEach var="book" items="${listBookThreeBooks}">
                                            <div class="focus-novel" onmouseover="openNovel(event, '${book.idTruyen}')">
                                                <div class="row">
                                                    <div class="col-sm-4">
                                                        <img src="${book.urlHinh}" width="100%" height="90" alt="blank"  style="object-fit: cover;" />
                                                    </div>
                                                    <div class="col-sm-8" style="max-height:90px">

                                                        <a class="novel-name" href="index.html?p=chiTietTruyen&idTruyen=${book.idTruyen}">
                                                            <p class="header-link">${book.tenTruyen}</p>
                                                        </a>
                                                        <div class="card-info-text" style=" -webkit-line-clamp: 2 !important; height: 40px;">
                                                            ${book.tomTat}
                                                        </div>

                                                    </div> 
                                                </div>
                                            </div>
                                           </c:forEach>   
                                        </div>
                                        <div class="item">
                                           <c:forEach var="book" items="${listBookThreeBooksNext}">
                                            <div class="focus-novel" onmouseover="openNovel(event, '${book.idTruyen}')">
                                                <div class="row">
                                                    <div class="col-sm-4">
                                                        <img src="${book.urlHinh}" width="100%" height="90" alt="blank"  style="object-fit: cover;" />
                                                    </div>
                                                    <div class="col-sm-8" style="max-height:90px">

                                                        <a class="novel-name" href="index.html?p=chiTietTruyen&idTruyen=${book.idTruyen}">
                                                            <p class="header-link">${book.tenTruyen}</p>
                                                        </a>
                                                        <div class="card-info-text" style=" -webkit-line-clamp: 2 !important; height: 40px;">
                                                            ${book.tomTat}
                                                        </div>

                                                    </div> 
                                                </div>
                                            </div>
                                           </c:forEach> 
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
                    <c:forEach var="book" items="${listBook}">
                        
                        <img src="${book.urlHinh}" alt="blank" width="100%" height= "330" />
                    <div class="widget">
                        <div class="novel-wrap">
                            <div style="padding:0 5px">
                                <h3 ><b>${book.tenTruyen}</b></h3>
                                <div  class="card-info-text">
                                    ${book.tomTat}
                                </div>
                                <div style="padding: 20px 0 20px">
                                    <span class="small-text" style="margin-right: 5px"><span class="glyphicon glyphicon-eye-open"></span> ${book.soLanXem}</span>
                                    
                                    <span class="small-text" style="margin-right: 5px"><span class="glyphicon glyphicon-calendar"></span>${book.ngay}</span>
                                    <span class="small-text" style="margin-right: 5px"><span class="glyphicon glyphicon-user"></span> ${book.tacGia}</span>
                                </div>
                                <a href="index.html?p=chiTietTruyen&idTruyen=${book.idTruyen}" ><p class="btn btn-success" style="border-radius:0px">Đọc truyện</p></a>
                            </div>
                        </div>
                    </div>
                    </c:forEach> 
                    <nav class="blog-pagination">
                        <ul class="pagination pagination-override">
                            <li class="page-item">
                                <a href="index.php?p=&page=<?=($page<=1?1:$page-1)?>" class="page-link " aria-label="Previous">
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
                                <c:forEach var="book" items="${hotListBook}">
                                <div class="row newNovel-group">
                                    <div class="col-sm-4">
                                        <img src="${book.urlHinh} " alt="" class="new-novel-image"/>   
                                    </div>
                                    <div class="col-sm-8">
                                        <p class="novel-name">
                                            <a class="header-link" href="index.html?p=chiTietTruyen&idTruyen=${book.idTruyen}">${book.tenTruyen} </a>                                    
                                        </p>
                                        <div style="margin-top: 25px">
                                            <p class="small-text"><span class="glyphicon glyphicon-eye-open"></span> ${book.soLanXem} lượt xem</p>
                                        </div>
                                    </div>
                                </div>
                            </c:forEach>
                            </div>
                            <div class=" tab-pane fade" id="top-week" >
                                <c:forEach var="book" items="${hotListBookTopWeek}">
                                <div class="row newNovel-group">
                                    <div class="col-sm-4">
                                        <img src="${book.urlHinh} " alt="" class="new-novel-image"/>   
                                    </div>
                                    <div class="col-sm-8">
                                        <p class="novel-name">
                                            <a class="header-link" href="index.html?p=chiTietTruyen&idTruyen=${book.idTruyen}">${book.tenTruyen} </a>                                    
                                        </p>
                                        <div style="margin-top: 25px">
                                            <p class="small-text"><span class="glyphicon glyphicon-eye-open"></span> ${book.soLanXem} lượt xem</p>
                                        </div>
                                    </div>
                                </div>
                            </c:forEach>
                            </div>
                            <div class="tab-pane fade" id="top-month">
                                <c:forEach var="book" items="${hotListBookTopMonth}">
                                <div class="row newNovel-group">
                                    <div class="col-sm-4">
                                        <img src="${book.urlHinh} " alt="" class="new-novel-image"/>   
                                    </div>
                                    <div class="col-sm-8">
                                        <p class="novel-name">
                                            <a class="header-link" href="index.html?p=chiTietTruyen&idTruyen=${book.idTruyen}">${book.tenTruyen} </a>                                    
                                        </p>
                                        <div style="margin-top: 25px">
                                            <p class="small-text"><span class="glyphicon glyphicon-eye-open"></span> ${book.soLanXem} lượt xem</p>
                                        </div>
                                    </div>
                                </div>
                            </c:forEach>
                            </div>
                        </div>
                    </div>
                    <div class="widget-override">
                        <h4><b>Truyện mới đăng</b></h4><hr>
                        <c:forEach var="book" items="${newListBookFiveBooks}">
                                <div class="row newNovel-group">
                                    <div class="col-sm-4">
                                        <img src="${book.urlHinh} " alt="" class="new-novel-image"/>   
                                    </div>
                                    <div class="col-sm-8">
                                        <p class="novel-name">
                                            <a class="header-link" href="index.html?p=chiTietTruyen&idTruyen=${book.idTruyen}">${book.tenTruyen} </a>                                    
                                        </p>
                                        <div style="margin-top: 25px">
                                            <p class="small-text"><span class="glyphicon glyphicon-eye-open"></span> ${book.soLanXem} lượt xem</p>
                                        </div>
                                    </div>
                                </div>
                            </c:forEach>
                    </div>
                    <div class="widget-override">
                        <h4><b>Thể loại </b></h4><hr>
                        <div class="link-categories-aria">
                            <ul>
                                 <c:forEach var="category" items="${listCategories}">
                                <li>
                                    <a href="index.html?p=truyenTrongLoai&idTL=${theloai.idTL}" class="link-categories">
                                        ${category.tenTheLoai}
                                    </a>
                                </li>

                                 </c:forEach>
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






