<?php
defined('BASEPATH') or exit('Acesso RESTRITO');
class CategoriaModel extends CI_Model
{

	function __construct()
	{
		parent::__construct();
	}

	public function listar()
	{
		// $query = $this->db->get('categoria');

		// $query = $this->db->where('f.idUsuario', $this->session->userdata('id'));
		// $query = $this->db->select('f.id, f.nome, f.data, f.valor, c.nome as nome, f.tipo, c.id')->order_by('c.id desc')->join("financa f", "c.id=f.idCategoria", "inner")
		// 	->join("usuario u", "u.id=f.idUsuario", "inner")->get('categoria c');
		$query = $this->db->get('categoria');
		if ($query->num_rows() > 0) {
			return $query->result();
		} else {
			return null;
		}
	}

	public function inserir($categoria)
	{
		$query = $this->db->insert('categoria', $categoria);
		if ($this->db->affected_rows() == 1) {
			return TRUE;
		} else {
			return FALSE;
		}
	}

	public function editar($categoria)
	{
		$query = $this->db->where('id', $categoria['id']);
		$query = $this->db->update('categoria', $categoria);
		if ($this->db->affected_rows() == 1) {
			return TRUE;
		} else {
			return FALSE;
		}
	}

	public function pesquisarId($id)
	{
		$query = $this->db->where('id', $id);
		$query = $this->db->get('categoria', 1);
		if ($query->num_rows() == 1) {
			return $query->row();
		} else {
			return null;
		}
	}

	public function excluir($id)
	{
		$query = $this->db->where('id', $id);
		$query = $this->db->delete('categoria');
		if ($this->db->affected_rows() == 1) {
			return TRUE;
		} else {
			return FALSE;
		}
	}
}
