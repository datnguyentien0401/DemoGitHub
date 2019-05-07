
package model;

public class Chuong {
private int idChuong;
    private String tenChuong;
    private int idTruyen;
    private String noiDung;

    public Chuong() {
    }

    public Chuong(int idChuong, String tenChuong, int idTruyen, String noiDung) {
        this.idChuong=idChuong;
        this.tenChuong = tenChuong;
        this.idTruyen = idTruyen;
        this.noiDung = noiDung;
    }

    public int getIdChuong() {
        return idChuong;
    }

    public void setIdChuong(int idChuong) {
        this.idChuong = idChuong;
    }

    public String getTenChuong() {
        return tenChuong;
    }

    public void setTenChuong(String tenChuong) {
        this.tenChuong = tenChuong;
    }

    public int getIdTruyen() {
        return idTruyen;
    }

    public void setIdTruyen(int idTruyen) {
        this.idTruyen = idTruyen;
    }

    public String getNoiDung() {
        return noiDung;
    }

    public void setNoiDung(String noiDung) {
        this.noiDung = noiDung;
    }

}
