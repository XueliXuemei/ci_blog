<?php

function check_already_login()
{
	$ci = &get_instance();
	$user_session = $ci->session->userdata('idadmin');
	if ($user_session) {
		$url = 'admin/dashboard';
		redirect($url);
	}
}

function check_not_login()
{
	$ci = &get_instance();
	$user_session = $ci->session->userdata('masuk');
	if (!$user_session) {

		$url = base_url('admin');
		redirect($url);
	}
}

function check_admin()

{
	$ci = &get_instance();
	$ci->load->library('fungsi');
	if ($ci->fungsi->user_login()->pengguna_level != 1) {
		$url = base_url('admin');
		redirect($url);
	}
}
