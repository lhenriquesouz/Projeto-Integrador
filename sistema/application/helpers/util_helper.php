<?php
defined('BASEPATH') or exit('Acesso RESTRITO');

if (!function_exists('validarLogin')) {
	function validarLogin()
	{
		$ci = &get_instance();
		if (isset($ci->session)) {
			if (!$ci->session->userdata('logado')) {
				redirect('usuario', 'refresh');
			}
		} else {
			redirect('usuario', 'refresh');
		}
	}
}
