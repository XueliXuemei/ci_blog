<?php
class Dashboard extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		check_not_login();
		check_admin();
		$this->load->model('m_pengunjung');
	}
	function index()
	{
		if ($this->session->userdata('akses') == '1') {
			$x['visitor'] = $this->m_pengunjung->statistik_pengujung();
			$x['identias'] = $this->m_identitas->get_identitas($kode = 1);
			$this->load->view('admin/v_dashboard', $x);
			// $this->template->load('templeteadmin', 'admin/v_dashboard', $x);
		} else {
			redirect('admin');
		}
	}
}
