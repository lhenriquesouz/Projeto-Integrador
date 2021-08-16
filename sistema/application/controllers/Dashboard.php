<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
    validarLogin();
    $this->load->model('dashboardModel', 'dashboard');
  }

  public function index()
  {
    $dados['titulo'] = "Dashboard";
    $dados['categorias'] = $this->dashboard->contaRegistros();
    $dados['entrada'] = $this->dashboard->entrada();
    $dados['saida'] = $this->dashboard->saida();
    $this->load->view('dashboard/dashboard', $dados);
  }
}
