<?php
class M_datawebsite extends CI_Model
{
    function getdata_slider()
    {
        $hsl = $this->db->query("SELECT * FROM slider");
        return $hsl;
    }
    function get_slider($kode)
    {
        $hsl = $this->db->query("SELECT * FROM slider where id_slider='$kode'");
        return $hsl;
    }
    function simpan_slider($title, $gambar)
    {
        $hsl = $this->db->query("insert into slider (title,gambar)values ('$title','$gambar')");
        return $hsl;
    }
    function edit_slider($title, $gambar, $kode)
    {
        $hsl = $this->db->query("update slider set title='$title', gambar='$gambar' where id_slider='$kode'");
        return $hsl;
    }
    function edit_slider_tanpagambar($title, $kode)
    {
        $hsl = $this->db->query("update slider set title='$title' where id_slider='$kode'");
        return $hsl;
    }
}
