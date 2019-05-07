package model;

import java.sql.PreparedStatement;
import java.sql.Connection;
import java.sql.ResultSet;
import java.sql.SQLException;
import java.util.ArrayList;
import java.util.List;
import java.util.logging.Level;
import java.util.logging.Logger;

public class bookCommand {

    public static void addBook(Truyen truyen) throws ClassNotFoundException {
        Connection cn = dbCon.openConnect();
        PreparedStatement ps = null;

        if (cn != null) {
            try {
                ps = cn.prepareStatement("insert into truyen (tenTruyen, tacGia) values (?,?)");
                ps.setString(1, truyen.getTenTruyen());
                ps.setString(2, truyen.getTacGia());
                ps.executeUpdate();
            } catch (SQLException ex) {
                Logger.getLogger(bookCommand.class.getName()).log(Level.SEVERE, null, ex);
            }
        }
    }

    public static Truyen findBook(String ten) throws ClassNotFoundException {
        Connection cn = dbCon.openConnect();
        PreparedStatement ps = null;
        ResultSet rs = null;
        Truyen truyen = null;

        if (cn != null) {
            try {
                ps = cn.prepareStatement("select * from truyen where tenTruyen=?");
                ps.setString(1, ten);
                rs = ps.executeQuery();
                while (rs.next()) {
                    truyen = new Truyen();
                    truyen.setTenTruyen(rs.getString("tenTruyen"));
                    truyen.setTacGia(rs.getString("tacGia"));

                }
            } catch (SQLException ex) {
                Logger.getLogger(bookCommand.class.getName()).log(Level.SEVERE, null, ex);
            }
        }
        return truyen;
    }

    public static void updateBook(Truyen truyen) throws ClassNotFoundException {
        Connection cn = dbCon.openConnect();
        PreparedStatement ps = null;

        if (cn != null) {
            try {
                ps = cn.prepareStatement("update truyen set tacGia=? where tenTruyen=?");
                ps.setString(1, truyen.getTacGia());

                ps.setString(2, truyen.getTenTruyen());
                ps.executeUpdate();
            } catch (SQLException ex) {
                Logger.getLogger(bookCommand.class.getName()).log(Level.SEVERE, null, ex);
            }
        }
    }

    public static void delBook(String ten) throws ClassNotFoundException {
        Connection cn = dbCon.openConnect();
        PreparedStatement ps = null;

        if (cn != null) {
            try {
                ps = cn.prepareStatement("delete from truyen where tenTruyen=?");
                ps.setString(1, ten);
                ps.executeUpdate();
            } catch (SQLException ex) {
                Logger.getLogger(bookCommand.class.getName()).log(Level.SEVERE, null, ex);
            }
        }
    }

    public static List<Truyen> getListBook() throws ClassNotFoundException {
        List<Truyen> listBook = new ArrayList<>();

        Connection cn = dbCon.openConnect();
        PreparedStatement ps = null;
        ResultSet rs = null;
        if (cn != null) {
            try {
                ps = cn.prepareStatement("select * from truyen ORDER BY idTruyen DESC");
                rs = ps.executeQuery();
                while (rs.next()) {
                    Truyen truyen = new Truyen();
                    truyen.setIdTruyen(rs.getInt("idTruyen"));
                    truyen.setTenTruyen(rs.getString("tieuDe"));
                    truyen.setTacGia(rs.getString("tacGia"));
                    truyen.setNgay(rs.getDate("ngay"));
                    truyen.setTomTat(rs.getString("tomTat"));
                    truyen.setUrlHinh(rs.getString("urlHinh"));
                    truyen.setIdTL(rs.getInt("idTL"));
                    truyen.setSoLanXem(rs.getInt("soLanXem"));
                    truyen.setTrangThai(rs.getInt("trangThai"));
                    listBook.add(truyen);
                }
            } catch (SQLException ex) {
                Logger.getLogger(bookCommand.class.getName()).log(Level.SEVERE, null, ex);
            }
        }
        return listBook;
    }

    public static List<Truyen> getListBooksSixBooks() throws ClassNotFoundException {
        List<Truyen> listBook = new ArrayList<>();

        Connection cn = dbCon.openConnect();
        PreparedStatement ps = null;
        ResultSet rs = null;
        if (cn != null) {
            try {
                ps = cn.prepareStatement("SELECT * FROM `truyen` ORDER BY idTruyen DESC LIMIT 0,6");
                rs = ps.executeQuery();
                while (rs.next()) {
                    Truyen truyen = new Truyen();
                    truyen.setIdTruyen(rs.getInt("idTruyen"));
                    truyen.setTenTruyen(rs.getString("tieuDe"));
                    truyen.setTacGia(rs.getString("tacGia"));
                    truyen.setNgay(rs.getDate("ngay"));
                    truyen.setTomTat(rs.getString("tomTat"));
                    truyen.setUrlHinh(rs.getString("urlHinh"));
                    truyen.setIdTL(rs.getInt("idTL"));
                    truyen.setSoLanXem(rs.getInt("soLanXem"));
                    truyen.setTrangThai(rs.getInt("trangThai"));
                    listBook.add(truyen);
                }
            } catch (SQLException ex) {
                Logger.getLogger(bookCommand.class.getName()).log(Level.SEVERE, null, ex);
            }
        }
        return listBook;
    }

    public static List<Truyen> getListBookThreeBooks() throws ClassNotFoundException {
        List<Truyen> listBook = new ArrayList<>();

        Connection cn = dbCon.openConnect();
        PreparedStatement ps = null;
        ResultSet rs = null;
        if (cn != null) {
            try {
                ps = cn.prepareStatement("select * from truyen ORDER BY idTruyen DESC LIMIT 0,3");
                rs = ps.executeQuery();
                while (rs.next()) {
                    Truyen truyen = new Truyen();
                    truyen.setIdTruyen(rs.getInt("idTruyen"));
                    truyen.setTenTruyen(rs.getString("tieuDe"));
                    truyen.setTacGia(rs.getString("tacGia"));
                    truyen.setNgay(rs.getDate("ngay"));
                    truyen.setTomTat(rs.getString("tomTat"));
                    truyen.setUrlHinh(rs.getString("urlHinh"));
                    truyen.setIdTL(rs.getInt("idTL"));
                    truyen.setSoLanXem(rs.getInt("soLanXem"));
                    truyen.setTrangThai(rs.getInt("trangThai"));
                    listBook.add(truyen);
                }
            } catch (SQLException ex) {
                Logger.getLogger(bookCommand.class.getName()).log(Level.SEVERE, null, ex);
            }
        }
        return listBook;
    }

    public static List<Truyen> getListBookThreeBooksNext() throws ClassNotFoundException {
        List<Truyen> listBook = new ArrayList<>();

        Connection cn = dbCon.openConnect();
        PreparedStatement ps = null;
        ResultSet rs = null;
        if (cn != null) {
            try {
                ps = cn.prepareStatement("select * from truyen ORDER BY idTruyen DESC LIMIT 3,3");
                rs = ps.executeQuery();
                while (rs.next()) {
                    Truyen truyen = new Truyen();
                    truyen.setIdTruyen(rs.getInt("idTruyen"));
                    truyen.setTenTruyen(rs.getString("tieuDe"));
                    truyen.setTacGia(rs.getString("tacGia"));
                    truyen.setNgay(rs.getDate("ngay"));
                    truyen.setTomTat(rs.getString("tomTat"));
                    truyen.setUrlHinh(rs.getString("urlHinh"));
                    truyen.setIdTL(rs.getInt("idTL"));
                    truyen.setSoLanXem(rs.getInt("soLanXem"));
                    truyen.setTrangThai(rs.getInt("trangThai"));
                    listBook.add(truyen);
                }
            } catch (SQLException ex) {
                Logger.getLogger(bookCommand.class.getName()).log(Level.SEVERE, null, ex);
            }
        }
        return listBook;
    }

    public static List<Truyen> getHotListBook() throws ClassNotFoundException {
        List<Truyen> listBook = new ArrayList<>();

        Connection cn = dbCon.openConnect();
        PreparedStatement ps = null;
        ResultSet rs = null;
        if (cn != null) {
            try {
                ps = cn.prepareStatement("select * from truyen ORDER BY soLanXem DESC LIMIT 0,5");
                rs = ps.executeQuery();
                while (rs.next()) {
                    Truyen truyen = new Truyen();
                    truyen.setIdTruyen(rs.getInt("idTruyen"));
                    truyen.setTenTruyen(rs.getString("tieuDe"));
                    truyen.setTacGia(rs.getString("tacGia"));
                    truyen.setNgay(rs.getDate("ngay"));
                    truyen.setTomTat(rs.getString("tomTat"));
                    truyen.setUrlHinh(rs.getString("urlHinh"));
                    truyen.setIdTL(rs.getInt("idTL"));
                    truyen.setSoLanXem(rs.getInt("soLanXem"));
                    truyen.setTrangThai(rs.getInt("trangThai"));
                    listBook.add(truyen);
                }
            } catch (SQLException ex) {
                Logger.getLogger(bookCommand.class.getName()).log(Level.SEVERE, null, ex);
            }
        }
        return listBook;
    }

    public static List<Truyen> getHotListBookTopWeek() throws ClassNotFoundException {
        List<Truyen> listBook = new ArrayList<>();

        Connection cn = dbCon.openConnect();
        PreparedStatement ps = null;
        ResultSet rs = null;
        if (cn != null) {
            try {
                ps = cn.prepareStatement("SELECT * FROM `truyen` WHERE ngay>=SUBDATE(CURRENT_DATE, INTERVAL 7 DAY) ORDER BY soLanXem DESC LIMIT 0,5");
                rs = ps.executeQuery();
                while (rs.next()) {
                    Truyen truyen = new Truyen();
                    truyen.setIdTruyen(rs.getInt("idTruyen"));
                    truyen.setTenTruyen(rs.getString("tieuDe"));
                    truyen.setTacGia(rs.getString("tacGia"));
                    truyen.setNgay(rs.getDate("ngay"));
                    truyen.setTomTat(rs.getString("tomTat"));
                    truyen.setUrlHinh(rs.getString("urlHinh"));
                    truyen.setIdTL(rs.getInt("idTL"));
                    truyen.setSoLanXem(rs.getInt("soLanXem"));
                    truyen.setTrangThai(rs.getInt("trangThai"));
                    listBook.add(truyen);
                }
            } catch (SQLException ex) {
                Logger.getLogger(bookCommand.class.getName()).log(Level.SEVERE, null, ex);
            }
        }
        return listBook;
    }

    public static List<Truyen> getHotListBookTopMonth() throws ClassNotFoundException {
        List<Truyen> listBook = new ArrayList<>();

        Connection cn = dbCon.openConnect();
        PreparedStatement ps = null;
        ResultSet rs = null;
        if (cn != null) {
            try {
                ps = cn.prepareStatement("SELECT * FROM `truyen` WHERE MONTH(ngay)=MONTH(CURRENT_DATE()) ORDER BY soLanXem DESC");
                rs = ps.executeQuery();
                while (rs.next()) {
                    Truyen truyen = new Truyen();
                    truyen.setIdTruyen(rs.getInt("idTruyen"));
                    truyen.setTenTruyen(rs.getString("tieuDe"));
                    truyen.setTacGia(rs.getString("tacGia"));
                    truyen.setNgay(rs.getDate("ngay"));
                    truyen.setTomTat(rs.getString("tomTat"));
                    truyen.setUrlHinh(rs.getString("urlHinh"));
                    truyen.setIdTL(rs.getInt("idTL"));
                    truyen.setSoLanXem(rs.getInt("soLanXem"));
                    truyen.setTrangThai(rs.getInt("trangThai"));
                    listBook.add(truyen);
                }
            } catch (SQLException ex) {
                Logger.getLogger(bookCommand.class.getName()).log(Level.SEVERE, null, ex);
            }
        }
        return listBook;
    }

    public static List<Truyen> newListBookFiveBooks() throws ClassNotFoundException {
        List<Truyen> listBook = new ArrayList<>();

        Connection cn = dbCon.openConnect();
        PreparedStatement ps = null;
        ResultSet rs = null;
        if (cn != null) {
            try {
                ps = cn.prepareStatement("SELECT * FROM `truyen` ORDER BY idTruyen DESC LIMIT 0,5");
                rs = ps.executeQuery();
                while (rs.next()) {
                    Truyen truyen = new Truyen();
                    truyen.setIdTruyen(rs.getInt("idTruyen"));
                    truyen.setTenTruyen(rs.getString("tieuDe"));
                    truyen.setTacGia(rs.getString("tacGia"));
                    truyen.setNgay(rs.getDate("ngay"));
                    truyen.setTomTat(rs.getString("tomTat"));
                    truyen.setUrlHinh(rs.getString("urlHinh"));
                    truyen.setIdTL(rs.getInt("idTL"));
                    truyen.setSoLanXem(rs.getInt("soLanXem"));
                    truyen.setTrangThai(rs.getInt("trangThai"));
                    listBook.add(truyen);
                }
            } catch (SQLException ex) {
                Logger.getLogger(bookCommand.class.getName()).log(Level.SEVERE, null, ex);
            }
        }
        return listBook;
    }

    public static List<Truyen> truyenTrongLoai(int idTL) throws ClassNotFoundException {
        List<Truyen> listBook = new ArrayList<>();

        Connection cn = dbCon.openConnect();
        PreparedStatement ps = null;
        ResultSet rs = null;
        if (cn != null) {
            try {
                ps = cn.prepareStatement("SELECT * FROM `truyen` where idTL=?");
                ps.setInt(1, idTL);
                rs = ps.executeQuery();
                while (rs.next()) {
                    Truyen truyen = new Truyen();
                    truyen.setIdTruyen(rs.getInt("idTruyen"));
                    truyen.setTenTruyen(rs.getString("tieuDe"));
                    truyen.setTacGia(rs.getString("tacGia"));
                    truyen.setNgay(rs.getDate("ngay"));
                    truyen.setTomTat(rs.getString("tomTat"));
                    truyen.setUrlHinh(rs.getString("urlHinh"));
                    truyen.setIdTL(rs.getInt("idTL"));
                    truyen.setSoLanXem(rs.getInt("soLanXem"));
                    truyen.setTrangThai(rs.getInt("trangThai"));
                    listBook.add(truyen);
                }
            } catch (SQLException ex) {
                Logger.getLogger(bookCommand.class.getName()).log(Level.SEVERE, null, ex);
            }
        }
        return listBook;
    }

    public static Truyen getBookById(int idTruyen) throws ClassNotFoundException {
        Truyen truyen = new Truyen();

        Connection cn = dbCon.openConnect();
        PreparedStatement ps = null;
        ResultSet rs = null;
        if (cn != null) {
            try {
                ps = cn.prepareStatement("SELECT * FROM `truyen`,theloai WHERE truyen.idTL=theloai.idTL AND idTruyen=?");
                ps.setInt(1, idTruyen);
                rs = ps.executeQuery();
                while (rs.next()) {

                    truyen.setIdTruyen(rs.getInt("idTruyen"));
                    truyen.setTenTruyen(rs.getString("tieuDe"));
                    truyen.setTacGia(rs.getString("tacGia"));
                    truyen.setNgay(rs.getDate("ngay"));
                    truyen.setTomTat(rs.getString("tomTat"));
                    truyen.setUrlHinh(rs.getString("urlHinh"));
                    truyen.setIdTL(rs.getInt("idTL"));
                    truyen.setSoLanXem(rs.getInt("soLanXem"));
                    truyen.setTrangThai(rs.getInt("trangThai"));
                    truyen.setTenTL(rs.getString("tenTL"));
                }
            } catch (SQLException ex) {
                Logger.getLogger(bookCommand.class.getName()).log(Level.SEVERE, null, ex);
            }
        }
        return truyen;
    }
}
