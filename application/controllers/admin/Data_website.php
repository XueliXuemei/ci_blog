<?php

class Data_website extends CI_Controller

{

    function __construct()

    {

        parent::__construct();

        check_not_login();

        check_admin();

        $this->load->model('m_datawebsite');

    }

    function slider()

    {

        $x['identias'] = $this->m_identitas->get_identitas($kode = 1);

        $x['data'] = $this->m_datawebsite->getdata_slider();

        $this->load->view('admin/v_slider', $x);

         //$this->template->load('templeteadmin', 'admin/v_halamanStatis', $x);

    }

    function add_slider()

    {



        if (isset($_POST['submit'])) {

            $config['upload_path']      = './theme/images/slider/';

            $config['allowed_types']    = 'gif|jpg|png';

            $config['max_size']          = 2048;

            $this->load->library('upload', $config);

            if (!empty($_FILES['filefoto']['name'])) {

                if ($this->upload->do_upload('filefoto')) {

                    $gambar = $this->upload->data('file_name');

                    $id = $this->input->post('id');

                    $title = $this->input->post('a');

                    $this->m_datawebsite->simpan_slider($title, $gambar, $id);

                    echo $this->session->set_flashdata('msg', 'info');

                    redirect('admin/data_website/slider');

                }

            } else {

                $id = $this->input->post('id');

                $title = $this->input->post('a');

                $this->m_datawebsite->simpan_slider($title, $gambar = null);

                echo $this->session->set_flashdata('msg', 'info');

                redirect('admin/data_website/slider');

            }

        } else {

            $x['identias'] = $this->m_identitas->get_identitas($kode = 1);

            $this->load->view('admin/v_tambah_slider', $x);

        }

    }

    function edit_slider()

    {



        if (isset($_POST['submit'])) {

            $config['upload_path']      = './theme/images/slider/';

            $config['allowed_types']    = 'gif|jpg|png';

            $config['max_size']          = 2048;

            $this->load->library('upload', $config);

            if (!empty($_FILES['filefoto']['name'])) {

                if ($this->upload->do_upload('filefoto')) {

                    $gambar = $this->upload->data('file_name');

                    $id = $this->input->post('id');

                    $title = $this->input->post('a');

                    $this->m_datawebsite->edit_slider($title, $gambar, $id);

                    echo $this->session->set_flashdata('msg', 'info');

                    redirect('admin/data_website/slider');

                }

            } else {

                $id = $this->input->post('id');

                $title = $this->input->post('a');

                $this->m_datawebsite->edit_slider_tanpagambar($title, $id);



                echo $this->session->set_flashdata('msg', 'info');

                redirect('admin/data_website/slider');

            }

        } else {

            $kode = $this->uri->segment(4);

            $x['identias'] = $this->m_identitas->get_identitas($kode = 1);

            $x['data'] = $this->m_datawebsite->get_slider($kode);

            $this->load->view('admin/v_edit_slider', $x);

        }

    }

}

