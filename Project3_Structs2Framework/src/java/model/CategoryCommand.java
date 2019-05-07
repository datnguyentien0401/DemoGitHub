
package model;

import java.sql.Connection;
import java.sql.PreparedStatement;
import java.sql.ResultSet;
import java.sql.SQLException;
import java.util.ArrayList;
import java.util.List;
import java.util.logging.Level;
import java.util.logging.Logger;


public class CategoryCommand {

    public static List<TheLoai> getListCategories() throws ClassNotFoundException {
        List<TheLoai> listCategories = new ArrayList<>();

        Connection cn = dbCon.openConnect();
        PreparedStatement ps = null;
        ResultSet rs = null;
        if (cn != null) {
            try {
                ps = cn.prepareStatement("select * from theloai");
                rs = ps.executeQuery();
                while (rs.next()) {
                    TheLoai theloai = new TheLoai();
                    theloai.setTenTheLoai(rs.getString("tenTL"));  
                    theloai.setIdTL(rs.getInt("idTL"));
                    listCategories.add(theloai);
                }
            } catch (SQLException ex) {
                Logger.getLogger(bookCommand.class.getName()).log(Level.SEVERE, null, ex);
            }
        }
        return listCategories;
    }
    
}
