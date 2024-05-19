<?php
class Home extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('m_identitas');
		$this->load->model('m_tulisan');
		$this->load->model('m_pengguna');
		$this->load->model('m_halamanstatis');
	}
	function index()
	{
		$kode = 1;
		$x['identias'] = $this->m_identitas->get_identitas($kode);
		$x['berita_terkini'] = $this->m_tulisan->berita_terkini();
		$x['berita'] = $this->m_tulisan->get_all_tulisan();
		$x['menu'] = $this->m_halamanstatis->get_menu_halamanstatis();
		$x['sambutan'] = $this->m_halamanstatis->get_halamanstatis($kode = 26);
		$this->template->load('template', 'depan/v_home', $x);
	}
}
