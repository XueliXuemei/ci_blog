<?php
class M_identitas extends CI_Model
{
    function get_all_indentitas()
    {
        $hsl = $this->db->query("SELECT * FROM identitas ORDER BY id_identitas DESC");
        return $hsl;
    }

    function get_identitas($kode)
    {
        $hsl = $this->db->query("SELECT * FROM identitas where id_identitas='$kode'");
        return $hsl;
    }

    function edit_identitas_tanpagamabar($id_identitas, $nama_website, $alamat_website, $meta_deskripsi, $meta_keyword)
    {
        $hsl = $this->db->query("update identitas set nama_website='$nama_website', alamat_website='$alamat_website', meta_deskripsi='$meta_deskripsi',  meta_keyword='$meta_keyword' where id_identitas='$id_identitas'");
        return $hsl;
    }

    function edit_identitas($id_identitas, $nama_website, $alamat_website, $meta_deskripsi, $meta_keyword, $gambar)
    {
        $hsl = $this->db->query("update identitas set nama_website='$nama_website', alamat_website='$alamat_website', meta_deskripsi='$meta_deskripsi',  meta_keyword='$meta_keyword', favicon='$gambar' where id_identitas='$id_identitas'");
        return $hsl;
    }
}
