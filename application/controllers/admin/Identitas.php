<?php
class Identitas extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        check_not_login();
        check_admin();
        $this->load->model('m_identitas');
    }


    function index()
    {
        $x['identias'] = $this->m_identitas->get_identitas($kode = 1);
        $x['data'] = $this->m_identitas->get_all_indentitas();
        $this->load->view('admin/v_identitas', $x);
        // $this->template->load('templeteadmin', 'admin/v_halamanstatis', $x);
    }
    function edit_indentitas()
    {
        $kode = $this->uri->segment(4);
        $x['identias'] = $this->m_identitas->get_identitas($kode = 1);
        $x['data'] = $this->m_identitas->get_identitas($kode);
        $this->load->view('admin/v_edit_identitas', $x);
    }

    function identitas_edit()
    {
        $config['upload_path']      = './theme/images/icon/';
        $config['allowed_types']    = 'gif|jpg|png';
        $config['max_size']          = 2048;
        $this->load->library('upload', $config);
        if (empty($_FILES['filefoto']['name'])) {
            $id_identitas = $this->input->post('kode');
            $nama_website = strip_tags($this->input->post('xnamaweb'));
            $alamat_website = strip_tags($this->input->post('xalamatweb'));
            $meta_deskripsi = strip_tags($this->input->post('xmeta_deskripsi'));
            $meta_keyword = strip_tags($this->input->post('xmeta_keyword'));
            $this->m_identitas->edit_identitas_tanpagamabar($id_identitas, $nama_website, $alamat_website, $meta_deskripsi, $meta_keyword);
            echo $this->session->set_flashdata('msg', 'info');
            redirect('admin/identitas');
        } else {
            $kode = $this->input->post('kode');
            $item = $this->m_identitas->get_identitas($kode)->row();
            if ($item->favicon != null) {
                $target_file = './theme/images/icon/' . $item->favicon;
                unlink($target_file);
            }
            if ($this->upload->do_upload('filefoto')) {
                $gambar = $this->upload->data('file_name');
                $id_identitas = $this->input->post('kode');
                $nama_website = strip_tags($this->input->post('xnamaweb'));
                $alamat_website = strip_tags($this->input->post('xalamatweb'));
                $meta_deskripsi = strip_tags($this->input->post('xmeta_deskripsi'));
                $meta_keyword = strip_tags($this->input->post('xmeta_keyword'));
                $item = $this->m_identitas->get_identitas($id_identitas)->row();
                //Compress Image
                $this->m_identitas->edit_identitas($id_identitas, $nama_website, $alamat_website, $meta_deskripsi, $meta_keyword, $gambar);
                echo $this->session->set_flashdata('msg', 'info');
                redirect('admin/identitas');
            } else {
                echo $this->session->set_flashdata('msg', 'warning');
                redirect('admin/identitas');
            }
        }
    }
}
