<?php
defined('BASEPATH') or exit('Acesso RESTRITO');

class Categoria extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		validarLogin();
		$this->load->model('categoriaModel', 'categoria');
	}

	public function index()
	{
		$dados['titulo'] = "Listagem de Categorias";
		$dados['categorias'] = $this->categoria->listar();
		$this->load->view('categoria/categorias', $dados);
	}

	public function salvar()
	{
		if (($id = $this->uri->segment(3)) > 0) {
			if ($categoria = $this->categoria->pesquisarId($id)) {
				$dados['categoria'] = $categoria;
			}
		}


		if ($registro = $this->input->post()) {
			// echo "pre";
			// print_r($registro);
			// echo "</pre>";
			if (isset($registro["id"]) && $registro["id"] > 0) {
				if ($this->categoria->editar($registro)) {
					$this->session->set_flashdata('sucesso', 'Registro editado com sucesso!');
				} else {
					$this->session->set_flashdata('falha', 'Não foi possível editar o registro!');
				}
			} else {
				if ($this->categoria->inserir($registro)) {
					$this->session->set_flashdata('sucesso', 'Registro salvo com sucesso!');
				} else {
					$this->session->set_flashdata('falha', 'Não foi possível salvar o registro!');
				}
			}
			redirect('categoria', 'refresh');
		}

		$dados['titulo'] = "Categoria";
		$this->load->view('categoria/categoria', $dados);
	}

	public function excluir()
	{
		if (($id = $this->uri->segment(3)) > 0) {
			if ($this->categoria->excluir($id)) {
				$this->session->set_flashdata('sucesso', 'Registro excluído com sucesso!');
			} else {
				$this->session->set_flashdata('falha', 'Não foi possível excluir esta categoria, pois ela está relacionada com uma finança sua, por favor, exclua as finanças que se relacionam com esta categoria!');
			}
		}

		redirect('categoria', 'refresh');
	}
}
