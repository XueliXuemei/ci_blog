<?php
class Contact extends CI_Controller
{
  function __construct()
  {
    parent::__construct();
    $this->load->model('m_kontak');
    $this->load->model('m_halamanstatis');
    $this->load->model('m_identitas');
  }
  function index()
  {

    $x['identias'] = $this->m_identitas->get_identitas($kode = 1);
    $x['menu'] = $this->m_halamanstatis->get_menu_halamanstatis();
    $this->template->load('template', 'depan/v_contact', $x);
  }

  function kirim_pesan()
  {
    $nama = htmlspecialchars($this->input->post('xnama', TRUE), ENT_QUOTES);
    $email = htmlspecialchars($this->input->post('xemail', TRUE), ENT_QUOTES);
    $kontak = htmlspecialchars($this->input->post('xphone', TRUE), ENT_QUOTES);
    $pesan = htmlspecialchars($this->input->post('xmessage', TRUE), ENT_QUOTES);
    $this->m_kontak->kirim_pesan($nama, $email, $kontak, $pesan);
    echo $this->session->set_flashdata('msg', '<p><strong> NB: </strong> Terima Kasih Telah Menghubungi Kami.</p>');
    redirect('contact');
  }
}
