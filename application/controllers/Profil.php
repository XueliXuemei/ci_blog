<?php
class Profil extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('m_halamanstatis');
		$this->load->model('m_identitas');
	}
	function halamanstatis($kode)
	{
		$kode = 1;
		$kode1 = $this->uri->segment(3);
		$x['identias'] = $this->m_identitas->get_identitas($kode);
		$x['menu'] = $this->m_halamanstatis->get_menu_halamanstatis();
		$x['data'] = $this->m_halamanstatis->get_halamanstatis($kode1);
		$this->template->load('template', 'depan/v_profil', $x);
	}
}
