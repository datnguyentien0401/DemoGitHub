<%@ taglib prefix="c" uri="http://java.sun.com/jsp/jstl/core" %>
<%@taglib prefix="s" uri="/struts-tags" %>
<%@page contentType="text/html" pageEncoding="UTF-8"%>
<!DOCTYPE html>

<div class="container" style="margin-bottom: 20px">

    <div class="row">                                                                      
        <div class="title-aria">
            <div style="text-align: center">
                <h1 class = "bright-text">${chapter.tenChuong}</h1>
            </div>
            <div class="link-chapter-aria">                               
                <a href = "index.html?p=chuongTrongTruyen&idTruyen=${book.idTruyen}&idChuong=${chapter.idChuong-1}"><p class = "btn btn-default">Chương trước</p></a>                               
                <select class="form-control" style="width: 200px" onchange="location = this.options[this.selectedIndex].value;">
                    <option disabled selected>chọn chương</option>
                    <c:forEach var="chapter" items="${listChapter}">
                        <option value="index.html?p=chuongTrongTruyen&idTruyen=${idTruyen}&idChuong=${chapter.idChuong}">${chapter.tenChuong}</option>
                    </c:forEach>
                </select>                                               
                <a href = "index.html?p=chuongTrongTruyen&idTruyen=${book.idTruyen}&idChuong=${chapter.idChuong+1}" class = "btn btn-default">Chương sau</a>
            </div>
        </div>
        <div class="novel-tab">                   
            <div class="chapter-tab">                       
                <p class="chapter-content"> ${chapter.noiDung}</p>                      
            </div>
        </div>
    </div>

    <div class="link-chapter-aria">                               
        <a href = "index.html?p=chuongTrongTruyen&idTruyen=${idTruyen}&idChuong=${chapter.idChuong-1}"><p class = "btn btn-default">Chương trước</p></a>                               
        <select class="form-control" style="width: 200px" onchange="location = this.options[this.selectedIndex].value;">
            <option disabled selected>chọn chương</option>
            <c:forEach var="chapter" items="${listChapter}">
                <option value="index.html?p=chuongTrongTruyen&idTruyen=${idTruyen}&idChuong=${chapter.idChuong}">${chapter.tenChuong}</option>
            </c:forEach>
        </select>                                               
        <a href = "index.html?p=chuongTrongTruyen&idTruyen=${idTruyen}&idChuong=${chapter.idChuong+1}" class = "btn btn-default">Chương sau</a>
    </div>
</div>


