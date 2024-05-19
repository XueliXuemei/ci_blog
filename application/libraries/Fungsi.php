<?php

class Fungsi
{

	protected $ci;

	function __construct()
	{
		$this->ci = &get_instance();
	}

	function user_login()
	{
		$this->ci->load->model('m_pengguna');
		$user_id = $this->ci->session->userdata('idadmin');
		$user_data = $this->ci->m_pengguna->get_pengguna_login($user_id)->row();
		return $user_data;
	}
}
