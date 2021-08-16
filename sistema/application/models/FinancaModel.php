<?php
defined('BASEPATH') or exit('Acesso RESTRITO');
class FinancaModel extends CI_Model
{

  function __construct()
  {
    parent::__construct();
  }

  public function listar()
  {
    // $query = $this->db->where('f.idUsuario', $this->session->userdata('id'));
    $query = $this->db->select('f.id as id, f.nome, f.data, f.valor, c.nome as descricao, f.tipo')->order_by('f.data desc')->join("categoria c", "c.id=f.idCategoria", "inner")
      ->join("usuario u", "u.id=f.idUsuario", "inner")->get('financa f');
    if ($query->num_rows() > 0) {
      return $query->result();
    } else {
      return null;
    }
  }

  public function inserir($financa)
  {
    $query = $this->db->insert('financa', $financa);
    if ($this->db->affected_rows() == 1) {
      return TRUE;
    } else {
      return FALSE;
    }
  }

  public function editar($financa)
  {
    $query = $this->db->where('id', $financa['id']);
    $query = $this->db->update('financa', $financa);
    if ($this->db->affected_rows() == 1) {
      return TRUE;
    } else {
      return FALSE;
    }
  }

  public function pesquisarId($id)
  {
    $query = $this->db->where('id', $id);
    $query = $this->db->get('financa', 1);
    if ($query->num_rows() == 1) {
      return $query->row();
    } else {
      return null;
    }
  }

  public function excluir($id)
  {
    $query = $this->db->where('id', $id);
    $query = $this->db->delete('financa');
    if ($this->db->affected_rows() == 1) {
      return TRUE;
    } else {
      return FALSE;
    }
  }
}
