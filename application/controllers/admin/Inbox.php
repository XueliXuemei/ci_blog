<?php
class Inbox extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		check_not_login();
		check_admin();
		$this->load->model('m_kontak');
	}

	function index()
	{
		$x['identias'] = $this->m_identitas->get_identitas($kode = 1);
		$this->m_kontak->update_status_kontak();
		$x['data'] = $this->m_kontak->get_all_inbox();
		$this->load->view('admin/v_inbox', $x);
	}

	function hapus_inbox()
	{
		$kode = $this->input->post('kode');
		$this->m_kontak->hapus_kontak($kode);
		echo $this->session->set_flashdata('msg', 'success-hapus');
		redirect('admin/inbox');
	}
}
