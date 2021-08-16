<?php
defined('BASEPATH') or exit('Acesso RESTRITO');
class UsuarioModel extends CI_Model
{

	function __construct()
	{
		parent::__construct();
	}

	public function login($usuario)
	{
		$consulta = $this->db->where('email', $usuario);
		$consulta = $this->db->get('usuario');
		if ($consulta->num_rows() == 1) {
			return $consulta->row();
		} else {
			return null;
		}
	}

	public function inserir($usuario)
	{
		$query = $this->db->insert('usuario', $usuario);
		if ($this->db->affected_rows() == 1) {
			return TRUE;
		} else {
			return FALSE;
		}
	}

	public function editar($usuario)
	{
		$query = $this->db->where('id', $usuario->id);
		$query = $this->db->update('usuario', $usuario);
		if ($this->db->affected_rows() == 1) {
			return TRUE;
		} else {
			return FALSE;
		}
	}

	public function pesquisarEmail($email)
	{
		$consulta = $this->db->where('email', $email);
		$consulta = $this->db->get('usuario');
		if ($consulta->num_rows() == 1) {
			return $consulta->row();
		} else {
			return null;
		}
	}
}
