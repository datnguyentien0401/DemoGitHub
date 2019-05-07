package controller;

import org.apache.struts2.convention.annotation.*;
import static com.opensymphony.xwork2.Action.SUCCESS;
import com.opensymphony.xwork2.ActionSupport;
import java.util.*;
import java.util.logging.Logger;

import model.*;

public class CategoriesActionSupport extends ActionSupport {

    private List<TheLoai> listCategories = new ArrayList<>();
    private List<Truyen> listBook = new ArrayList<>();
    private List<Truyen> listBookSixBooks = new ArrayList<>();
    private List<Truyen> listBookThreeBooks = new ArrayList<>();
    private List<Truyen> listBookThreeBooksNext = new ArrayList<>();
    private List<Truyen> hotListBookTopWeek = new ArrayList<>();
    private List<Truyen> newListBookFiveBooks = new ArrayList<>();
    private List<Truyen> hotListBookTopMonth = new ArrayList<>();
    private List<Truyen> hotListBook = new ArrayList<>();
    private List<Chuong> listChapter = new ArrayList<>();
    private TheLoai category = new TheLoai();
    private List<Truyen> listBookCategory;
    private Truyen book;
    private Chuong chapter;
    private int idTL;
    private int idTruyen;
    private int idChuong;
    
    public CategoriesActionSupport() {
    }

    public Chuong getChapter() {
        return chapter;
    }

    public void setChapter(Chuong chapter) {
        this.chapter = chapter;
    }

    public List<Chuong> getListChapter() {
        return listChapter;
    }

    public void setListChapter(List<Chuong> listChapter) {
        this.listChapter = listChapter;
    }

    public int getIdTruyen() {
        return idTruyen;
    }

    public void setIdTruyen(int idTruyen) {
        this.idTruyen = idTruyen;
    }

    public int getIdChuong() {
        return idChuong;
    }

    public void setIdChuong(int idChuong) {
        this.idChuong = idChuong;
    }

    
    public Truyen getBook() {
        return book;
    }

    public void setBook(Truyen book) {
        this.book = book;
    }

    public List<Truyen> getListBookCategory() {
        return listBookCategory;
    }

    public void setListBookCategory(List<Truyen> listBookCategory) {
        this.listBookCategory = listBookCategory;
    }

    public int getIdTL() {
        return idTL;
    }

    public void setIdTL(int idTL) {
        this.idTL = idTL;
    }

    public List<Truyen> getHotListBookTopWeek() {
        return hotListBookTopWeek;
    }

    public void setHotListBookTopWeek(List<Truyen> hotListBookTopWeek) {
        this.hotListBookTopWeek = hotListBookTopWeek;
    }

    public List<Truyen> getNewListBookFiveBooks() {
        return newListBookFiveBooks;
    }

    public void setNewListBookFiveBooks(List<Truyen> newListBookFiveBooks) {
        this.newListBookFiveBooks = newListBookFiveBooks;
    }

    public List<Truyen> getHotListBookTopMonth() {
        return hotListBookTopMonth;
    }

    public void setHotListBookTopMonth(List<Truyen> hotListBookTopMonth) {
        this.hotListBookTopMonth = hotListBookTopMonth;
    }

    public List<Truyen> getHotListBook() {
        return hotListBook;
    }

    public void setHotListBook(List<Truyen> hotListBook) {
        this.hotListBook = hotListBook;
    }

    public List<Truyen> getListBookThreeBooksNext() {
        return listBookThreeBooksNext;
    }

    public void setListBookThreeBooksNext(List<Truyen> listBookThreeBooksNext) {
        this.listBookThreeBooksNext = listBookThreeBooksNext;
    }

    public List<Truyen> getListBookSixBooks() {
        return listBookSixBooks;
    }

    public void setListBookSixBooks(List<Truyen> listBookSixBooks) {
        this.listBookSixBooks = listBookSixBooks;
    }

    public List<Truyen> getListBookThreeBooks() {
        return listBookThreeBooks;
    }

    public void setListBookThreeBooks(List<Truyen> listBookThreeBooks) {
        this.listBookThreeBooks = listBookThreeBooks;
    }

    public List<TheLoai> getListCategories() {
        return listCategories;
    }

    public List<Truyen> getListBook() {
        return listBook;
    }

    public void setListBook(List<Truyen> listBook) {
        this.listBook = listBook;
    }

    public void setListCategories(List<TheLoai> listCategories) {
        this.listCategories = listCategories;
    }

    public TheLoai getCategory() {
        return category;
    }

    public void setCategory(TheLoai category) {
        this.category = category;
    }

    @Action(value = "index", results = {
        @Result(name = "success", location = "index.jsp")})
    public String getMenu() throws ClassNotFoundException {

        this.listCategories = CategoryCommand.getListCategories();
        this.listBook = bookCommand.getListBook();
        this.listBookSixBooks = bookCommand.getListBooksSixBooks();
        this.listBookThreeBooks = bookCommand.getListBookThreeBooks();
        this.listBookThreeBooksNext = bookCommand.getListBookThreeBooksNext();
        this.hotListBook = bookCommand.getHotListBook();
        this.hotListBookTopWeek = bookCommand.getHotListBookTopWeek();
        this.hotListBookTopMonth = bookCommand.getHotListBookTopMonth();
        this.newListBookFiveBooks = bookCommand.newListBookFiveBooks();
        this.listBookCategory = bookCommand.truyenTrongLoai(this.idTL);
        this.book = bookCommand.getBookById(this.idTruyen);
        this.listChapter=ChapterCommand.getListChapter(this.idTruyen);
        this.chapter=ChapterCommand.getChapterById(this.idChuong);
        return SUCCESS;
    }

    @Action(value = "truyenTrongLoai", results = {
        @Result(name = "success", location = "truyenTrongLoai.jsp")})
    public String truyenTrongLoai() throws ClassNotFoundException {
        this.listBook = bookCommand.truyenTrongLoai(this.idTL);
        return SUCCESS;
    }
}
