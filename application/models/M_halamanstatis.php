<?php
class M_halamanstatis extends CI_Model
{
    function get_all_halamanstatis()
    {
        $hsl = $this->db->query("SELECT * FROM halamanstatis ORDER BY id_halaman DESC");
        return $hsl;
    }
    function get_menu_halamanstatis()
    {
        $hsl = $this->db->query("SELECT judul, id_halaman FROM halamanstatis  where id_halaman !='26' ORDER BY id_halaman DESC ");
        return $hsl;
    }
    function get_halamanstatis($kode)
    {
        $hsl = $this->db->query("SELECT * FROM halamanstatis where id_halaman='$kode'");
        return $hsl;
    }
    function simpan_halamanstatis($judul, $isi, $gambar)
    {
        $hsl = $this->db->query("insert into halamanstatis (judul, isi_halaman,gambar)values ('$judul', '$isi','$gambar')");
        return $hsl;
    }
    function edit_halamanstatis($id_halaman, $judul, $isi, $gambar)
    {
        $hsl = $this->db->query("update halamanstatis set judul='$judul', isi_halaman='$isi', gambar='$gambar' where id_halaman='$id_halaman'");
        return $hsl;
    }
    function edit_halamanstatis_tanpagamabar($id_halaman, $judul, $isi)
    {
        $hsl = $this->db->query("update halamanstatis set judul='$judul', isi_halaman='$isi' where id_halaman='$id_halaman'");
        return $hsl;
    }
    function hapus_halamanstatis($kode)
    {
        $hsl = $this->db->query("delete from halamanstatis where id_halaman='$kode'");
        return $hsl;
    }
}
