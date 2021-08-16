<?php
defined('BASEPATH') or exit('Acesso RESTRITO');
class DashboardModel extends CI_Model
{

  function __construct()
  {
    parent::__construct();
  }

  // public function dashboard()
  // {
  //   $query = $this->db->select('count(id)')
  //     ->from('categoria')
  //     ->get();
  //   if ($query->num_rows() > 0) {
  //     return (int)$query->result();
  //   } else {
  //     return null;
  //   }
  // }

  public function contaRegistros()
  {
    $query = $this->db->get('categoria');

    return $query->num_rows();
  }

  public function entrada()
  {
    $query = $this->db->select('sum(valor) as soma');
    // $query = $this->db->where('idUsuario', $this->session->userdata('id'));
    $query = $this->db->where('tipo', "entrada");
    $query = $this->db->get('financa');

    return $query->row();
  }

  public function saida()
  {
    $query = $this->db->select('sum(valor) as soma');
    // $query = $this->db->where('idUsuario', $this->session->userdata('id'));
    $query = $this->db->where('tipo', "saida");
    $query = $this->db->get('financa');

    return $query->row();
  }
}
