<%@ taglib prefix="c" uri="http://java.sun.com/jsp/jstl/core" %>
<%@taglib prefix="s" uri="/struts-tags" %>
<%@page contentType="text/html" pageEncoding="UTF-8"%>

<div style="margin-bottom: 20px;">
    <div class="container">
        <div class="row">
            <div class="col-sm-8">  
                
                    <div class="title-aria">                        
                        <h2 class="bright-text"${book.tenTruyen}</h2>                                
                    </div>
                    <div class="widget">
                        <div class="novel-thumbnail">
                            <img width="100%" height="450" src="${book.urlHinh}" alt="blank"/>
                        </div>
                        <div class="novel-tab">
                            <div class="chapter-box">
                                <h3 class="chapter-title">Sơ lược</h3>
                            </div>
                            <div class="chapter-tab">
                                <p class="chapter-content">
                                    ${book.tomTat}
                                </p>
                            </div>
                        </div>
                        <div class="novel-info">
                            <p class="chapter-content"><span>Thể loại:</span>${book.tenTL}</p>
                            <p class="chapter-content"><span>Tác giả: </span>${book.tacGia}</p>
                            <p class="chapter-content"><span>Ngày đăng: </span>${book.ngay}</p>
                            <p class="chapter-content"><span>Số lượt xem: </span>${book.soLanXem} </p>
                        </div>
                        <div class="novel-tab">
                            <div class="chapter-box">
                                <h3 class="chapter-title">Các chương</h3>
                            </div>
                            <div class="chapter-tab">
                                <c:forEach var="chapter" items="${listChapter}">
                                    <a href="index.html?p=chuongTrongTruyen&idTruyen=${book.idTruyen}&idChuong=${chapter.idChuong}"><p class="chapter-content">${book.tenTruyen} ${chapter.tenChuong}</p></a><hr>
                                </c:forEach>
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
</div>



