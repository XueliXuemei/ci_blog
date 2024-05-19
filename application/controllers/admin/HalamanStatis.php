<?php
class HalamanStatis extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        check_not_login();
        check_admin();
        $this->load->library('upload');
        $this->load->model('m_halamanstatis');
    }


    function index()
    {
        $x['identias'] = $this->m_identitas->get_identitas($kode = 1);
        $x['data'] = $this->m_halamanstatis->get_all_halamanstatis();
        $this->load->view('admin/halamanstatis', $x);
        // $this->template->load('templeteadmin', 'admin/v_halamanstatis', $x);
    }
    function edit_halamanstatis()
    {
        $x['identias'] = $this->m_identitas->get_identitas($kode = 1);
        $kode = $this->uri->segment(4);
        $x['data'] = $this->m_halamanstatis->get_halamanstatis($kode);
        $this->load->view('admin/edit_halamanstatis', $x);
    }
    function add_halamanstatis()
    {
        $x['identias'] = $this->m_identitas->get_identitas($kode = 1);
        $this->load->view('admin/add_halamanstatis', $x);
    }
    function simpan_halamanstatis()
    {
        $config['upload_path'] = './assets/images/'; //path folder
        $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
        $config['encrypt_name'] = TRUE; //nama yang terupload nantinya

        $this->upload->initialize($config);
        if (empty($_FILES['filefoto']['name'])) {

            $gbr = $this->upload->data();
            //Compress Image
            $config['image_library'] = 'gd2';
            $config['source_image'] = './assets/images/' . $gbr['file_name'];
            $config['create_thumb'] = FALSE;
            $config['maintain_ratio'] = FALSE;
            $config['quality'] = '60%';
            $config['width'] = 710;
            $config['height'] = 460;
            $config['new_image'] = './assets/images/' . $gbr['file_name'];

            $gambar = $gbr['file_name'];
            $judul = strip_tags($this->input->post('xjudul'));
            $isi = $this->input->post('xisi');
            $this->m_halamanstatis->simpan_halamanstatis($judul, $isi, $gambar);
            echo $this->session->set_flashdata('msg', 'success');
            redirect('admin/halamanstatis');
        } else {
            if ($this->upload->do_upload('filefoto')) {

                $gbr = $this->upload->data();
                //Compress Image
                $config['image_library'] = 'gd2';
                $config['source_image'] = './assets/images/' . $gbr['file_name'];
                $config['create_thumb'] = FALSE;
                $config['maintain_ratio'] = FALSE;
                $config['quality'] = '60%';
                $config['width'] = 710;
                $config['height'] = 460;
                $config['new_image'] = './assets/images/' . $gbr['file_name'];
                $gambar = $gbr['file_name'];
                $judul = strip_tags($this->input->post('xjudul'));
                $isi = $this->input->post('xisi');
                $this->m_halamanstatis->simpan_halamanstatis($judul, $isi, $gambar);
                echo $this->session->set_flashdata('msg', 'success');
                echo $this->session->set_flashdata('msg', 'success');
                redirect('admin/halamanstatis');
            } else {
                echo $this->session->set_flashdata('msg', 'warning');
                redirect('admin/halamanstatis');
            }
        }
    }


    function halamanstatis_edit()
    {
        $config['upload_path'] = './assets/images/'; //path folder
        $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
        $config['encrypt_name'] = TRUE; //nama yang terupload nantinya

        $this->upload->initialize($config);
        if (empty($_FILES['filefoto']['name'])) {
            $id_halaman = $this->input->post('kode');
            $judul = strip_tags($this->input->post('xjudul'));
            $isi = $this->input->post('xisi');
            $this->m_halamanstatis->edit_halamanstatis_tanpagamabar($id_halaman, $judul, $isi);
            echo $this->session->set_flashdata('msg', 'info');
            redirect('admin/halamanstatis');
        } else {
            if ($this->upload->do_upload('filefoto')) {

                $gbr = $this->upload->data();
                //Compress Image
                $config['image_library'] = 'gd2';
                $config['source_image'] = './assets/images/' . $gbr['file_name'];
                $config['create_thumb'] = FALSE;
                $config['maintain_ratio'] = FALSE;
                $config['quality'] = '60%';
                $config['width'] = 710;
                $config['height'] = 460;
                $config['new_image'] = './assets/images/' . $gbr['file_name'];
                $gambar = $gbr['file_name'];
                $id_halaman = $this->input->post('kode');
                $judul = strip_tags($this->input->post('xjudul'));
                $isi = $this->input->post('xisi');
                $this->m_halamanstatis->edit_halamanstatis($id_halaman, $judul, $isi, $gambar);
                echo $this->session->set_flashdata('msg', 'info');
                redirect('admin/halamanstatis');
            } else {
                echo $this->session->set_flashdata('msg', 'warning');
                redirect('admin/halamanstatis');
            }
        }
    }
    function hapus_halamanstatis()
    {
        $kode = $this->input->post('kode');
        // $gambar = $this->input->post('gambar');
        // $path = './assets/images/' . $gambar;
        // unlink($path);
        $this->m_halamanstatis->hapus_halamanstatis($kode);
        echo $this->session->set_flashdata('msg', 'success-hapus');
        redirect('admin/halamanstatis');
    }
}
