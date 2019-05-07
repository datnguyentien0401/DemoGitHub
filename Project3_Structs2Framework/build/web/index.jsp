
<%@ taglib prefix="c" uri="http://java.sun.com/jsp/jstl/core" %>
<%@taglib prefix="s" uri="/struts-tags" %>
<%@page contentType="text/html" pageEncoding="UTF-8"%>
<%
    String p;
    if (request.getParameter("p") != null) {
        p = request.getParameter("p");
    } else {
        p = null;
    }
%>
<html>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>UNovel</title>

    <link href="style.css" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.2.min.js"><\/script>')</script>
    <script src="js/vendor/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
    <body>

        <jsp:include  page="menu.jsp" />
        
        <%if (p.equals("home")) {%>
        <%@include file="home.jsp" %>
        <%}  if (p.equals("truyenTrongLoai")) {%>
        <%@include file="truyenTrongLoai.jsp" %>
        <%} if (p.equals("chiTietTruyen")) {%>
        <%@include file="chiTietTruyen.jsp" %>
        <%} if (p.equals("chuongTrongTruyen")) {%>
        <%@include file="chuongTrongTruyen.jsp" %>
        <%} if (p.equals("timkiem")) {%>
        <%@include file="timkiem.jsp" %>
        <%} if (p.equals("contact")) {%>
        <%@include file="contact.jsp" %>
        <%}%>

        <jsp:include  page="footer.jsp" />
        <script language="javascript">

        function openNovel(evt, idTruyen) {
            var i, focusNovelBox, focusNovel;
            focusNovelBox = document.getElementsByClassName("focus-novel-box");
            for (i = 0; i < focusNovelBox.length; i++) {
                focusNovelBox[i].style.display = "none";
            }
            focusNovel = document.getElementsByClassName("focus-novel");
            for (i = 0; i < focusNovel.length; i++) {
                focusNovel[i].className = focusNovel[i].className.replace(" active", "");
            }
            document.getElementById(idTruyen).style.display = "block";
            evt.currentTarget.className += " active";
        }
        </script>
    </body>
</html>