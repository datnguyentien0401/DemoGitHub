package model;

import java.sql.Date;

public class Truyen {

    private int idTruyen;
    private String tenTruyen;
    private String tacGia;
    private Date ngay;
    private String urlHinh;
    private int soLanXem;
    private String tomTat;
    private int idTL;
    private int trangThai;
    private String tenTL;

    public String getTenTL() {
        return tenTL;
    }

    public void setTenTL(String tenTL) {
        this.tenTL = tenTL;
    }

    public Truyen(int idTruyen, String tenTruyen, String tacGia, Date ngay, String urlHinh, int soLanXem, String tomTat, int idTL, int trangThai, String tenTL) {
        this.idTruyen = idTruyen;
        this.tenTruyen = tenTruyen;
        this.tacGia = tacGia;
        this.ngay = ngay;
        this.urlHinh = urlHinh;
        this.soLanXem = soLanXem;
        this.tomTat = tomTat;
        this.idTL = idTL;
        this.trangThai = trangThai;
        this.tenTL = tenTL;
    }

    public Truyen() {
    }

    public int getIdTruyen() {
        return idTruyen;
    }

    public void setIdTruyen(int idTruyen) {
        this.idTruyen = idTruyen;
    }

    public int getIdTL() {
        return idTL;
    }

    public void setIdTL(int idTL) {
        this.idTL = idTL;
    }

    public String getTenTruyen() {
        return tenTruyen;
    }

    public void setTenTruyen(String tenTruyen) {
        this.tenTruyen = tenTruyen;
    }

    public String getTacGia() {
        return tacGia;
    }

    public void setTacGia(String tacGia) {
        this.tacGia = tacGia;
    }

    public Date getNgay() {
        return ngay;
    }

    public void setNgay(Date ngay) {
        this.ngay = ngay;
    }

    public String getUrlHinh() {
        return urlHinh;
    }

    public void setUrlHinh(String urlHinh) {
        this.urlHinh = urlHinh;
    }

    public int getSoLanXem() {
        return soLanXem;
    }

    public void setSoLanXem(int soLanXem) {
        this.soLanXem = soLanXem;
    }

    public String getTomTat() {
        return tomTat;
    }

    public void setTomTat(String tomTat) {
        this.tomTat = tomTat;
    }

    public int getTrangThai() {
        return trangThai;
    }

    public void setTrangThai(int trangThai) {
        this.trangThai = trangThai;
    }

}
