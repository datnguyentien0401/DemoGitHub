/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package model;

/**
 *
 * @author admin
 */
public class TheLoai {

    private String tenTheLoai;
    private int idTL;

    public TheLoai() {
    }

    public TheLoai(int idTL, String tenTheLoai) {
        this.tenTheLoai = tenTheLoai;
        this.idTL = idTL;
    }

    public int getIdTL() {
        return idTL;
    }

    public void setIdTL(int idTL) {
        this.idTL = idTL;
    }

    public String getTenTheLoai() {
        return tenTheLoai;
    }

    public void setTenTheLoai(String tenTheLoai) {
        this.tenTheLoai = tenTheLoai;
    }

}
