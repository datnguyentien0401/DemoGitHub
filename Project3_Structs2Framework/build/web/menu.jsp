<%@ taglib prefix="c" uri="http://java.sun.com/jsp/jstl/core" %>
<%@taglib prefix="s" uri="/struts-tags" %>
<%@page contentType="text/html" pageEncoding="UTF-8"%>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>JSP Page</title>
    </head>
    <body>


        <div class="title-aria-background">
            <div class="container">

                <p class="contact">
                    <span class="glyphicon glyphicon-earphone"></span> (+84)981067269     
                    <span class="glyphicon glyphicon-envelope"></span> dat.nt0401@gmail.com 
                    <span class="glyphicon glyphicon-map-marker"></span> Đại học Bách Khoa Hà Nội     
                </p>


                <p class="login-link">


                </p>


                <h1 class="bright-text"><span class="glyphicon glyphicon-book"></span> UNOVEL</h1>

            </div>
        </div> 
        <div class="container"> 
            <nav class="navbar navbar-inverse navbar-override" >
                <div class="container-fluid">                 
                    <ul class="nav navbar-nav"> 
                        <li><a class="bright-text" href="index.html?p=home"><span class="glyphicon glyphicon-home"></span> Trang chủ</a></li>
                        <li class="dropdown">
                            <a class="dropdown-toggle bright-text" data-toggle="dropdown" href="#" action="menu">Thể loại</a>
                            <ul class="dropdown-menu" >                               
                                <c:forEach var="theloai" items="${listCategories}">
                                    <s:url id="truyenTrongLoai" action="truyenTrongLoai">
                                        <s:param name="idTL">${theloai.idTL}</s:param>
                                    </s:url>
                                    <li class="dorpdown-menu-content"><a href="index.html?p=truyenTrongLoai&idTL=${theloai.idTL}">${theloai.tenTheLoai}</a></li>
                                    </c:forEach>
                            </ul>
                        </li>
                        <li><a class="bright-text" href="index.html?p=truyenTrongLoai&idTL=7">Truyện Việt Nam</a></li>
                        <li class="dropdown"><a class="dropdown-toggle bright-text" data-toggle="dropdown" href="#">Truyện hay</a>
                            <ul class="dropdown-menu" > 
                                <li class="dorpdown-menu-content"><a href="index.html?p=truyenHay_topWeek" >Top tuần</a></li>
                                <li class="dorpdown-menu-content"><a href="index.html?p=truyenHay_topThang" >Top tháng</a></li>
                                <li class="dorpdown-menu-content"><a href="index.html?p=truyenHay" >Top all</a></li>
                            </ul>
                        </li>
                        <li class="dropdown"><a class="dropdown-toggle bright-text" data-toggle="dropdown" href="#">List truyện</a>
                            <ul class="dropdown-menu" >                               
                                <li class="dorpdown-menu-content"><a href="index.html?p=truyenMoi" >Truyện mới đăng</a></li>
                                <li class="dorpdown-menu-content"><a href="index.html?p=truyenFull" >Truyện full</a></li>
                                <li class="dorpdown-menu-content"><a href="index.html?p=listTruyen" >Tất cả</a></li>
                            </ul>
                        </li>  
                        <li>
                            <a class="bright-text" data-toggle="dropdown" href="index.html?p=">Viết ngắn</a>                    
                        </li>  
                        <li>
                            <a class="bright-text" href="index.html?p=contact">liên hệ</a>                    
                        </li>                       
                    </ul>                                        
                    <form class="navbar-form">
                        <input name="q" type="search"  class="form-control" style="border-radius: 0px" width="80%" method="get" placeholder="Tìm kiếm tên truyện, tiểu thuyết">
                        <button class="btn btn-success btn-success-override" type="submit" style="border-radius: 0px">
                            tìm kiếm
                        </button>
                        <input name="p" type="hidden" value="timkiem"/>
                    </form>                    
                </div>
            </nav>
        </div>
    </body>
    <script>
        $(function () {
            $('.dropdown').hover(function () {
                $(this).addClass('open');
            },
                    function () {
                        $(this).removeClass('open');
                    });
        });
        </script>
</html>
