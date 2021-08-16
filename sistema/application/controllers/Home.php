<?php
defined('BASEPATH') or exit('Acesso RESTRITO');

class Home extends CI_Controller
{

	public function __construct()
	{

		parent::__construct();
	}

	public function index()
	{
		$this->load->view('home/index');
	}
}
