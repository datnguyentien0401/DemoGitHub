/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package model;

import java.sql.Connection;
import java.sql.PreparedStatement;
import java.sql.ResultSet;
import java.sql.SQLException;
import java.util.ArrayList;
import java.util.List;
import java.util.logging.Level;
import java.util.logging.Logger;

/**
 *
 * @author admin
 */
public class ChapterCommand {
    public static List<Chuong> getListChapter(int idTruyen) throws ClassNotFoundException {
        List<Chuong> listChapter = new ArrayList<>();

        Connection cn = dbCon.openConnect();
        PreparedStatement ps = null;
        ResultSet rs = null;
        if (cn != null) {
            try {
                ps = cn.prepareStatement("SELECT * FROM `chuong` where idTruyen=?");
                ps.setInt(1, idTruyen);
                rs = ps.executeQuery();
                while (rs.next()) {
                    Chuong chapter = new Chuong();
                    chapter.setIdChuong(rs.getInt("idChuong"));
                    chapter.setTenChuong(rs.getString("tenChuong"));
                    chapter.setIdTruyen(rs.getInt("idTruyen"));
                    chapter.setNoiDung(rs.getString("noiDung"));
                    listChapter.add(chapter);
                }
            } catch (SQLException ex) {
                Logger.getLogger(bookCommand.class.getName()).log(Level.SEVERE, null, ex);
            }
        }
        return listChapter;
    }
    public static Chuong getChapterById(int idChuong) throws ClassNotFoundException {
        Chuong chapter = new Chuong();

        Connection cn = dbCon.openConnect();
        PreparedStatement ps = null;
        ResultSet rs = null;
        if (cn != null) {
            try {
                ps = cn.prepareStatement("SELECT * FROM `chuong` where idChuong=?");
                ps.setInt(1, idChuong);
                rs = ps.executeQuery();
                while (rs.next()) {
                    
                    chapter.setIdChuong(rs.getInt("idChuong"));
                    chapter.setTenChuong(rs.getString("tenChuong"));
                    chapter.setIdTruyen(rs.getInt("idTruyen"));
                    chapter.setNoiDung(rs.getString("noiDung"));
                    
                }
            } catch (SQLException ex) {
                Logger.getLogger(bookCommand.class.getName()).log(Level.SEVERE, null, ex);
            }
        }
        return chapter;
    }
}
