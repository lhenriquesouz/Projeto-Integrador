<?php
defined('BASEPATH') or exit('Acesso RESTRITO');

class Financa extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
    validarLogin();
    $this->load->model('financaModel', 'financa');
    $this->load->model('categoriaModel', 'categoria');
  }

  public function index()
  {
    $dados['titulo'] = "Finanças";
    $dados['financas'] = $this->financa->listar();
    $this->load->view('financa/financas', $dados);
  }

  public function salvar()
  {
    if (($id = $this->uri->segment(3)) > 0) {
      if ($financa = $this->financa->pesquisarId($id)) {
        $dados['financa'] = $financa;
      }
    }


    if ($registro = $this->input->post()) {
      // echo "pre";
      // print_r($registro);
      // echo "</pre>";
      if (isset($registro["id"]) && $registro["id"] > 0) {
        if ($this->financa->editar($registro)) {
          $this->session->set_flashdata('sucesso', 'Registro editado com sucesso!');
        } else {
          $this->session->set_flashdata('falha', 'Não foi possível editar o registro!');
        }
      } else {
        if ($this->financa->inserir($registro)) {
          $this->session->set_flashdata('sucesso', 'Registro salvo com sucesso!');
        } else {
          $this->session->set_flashdata('falha', 'Não foi possível salvar o registro!');
        }
      }
      redirect('financa', 'refresh');
    }

    $dados['titulo'] = "Finança";
    $this->load->view('financa/financa', $dados);
  }

  public function excluir()
  {
    if (($id = $this->uri->segment(3)) > 0) {
      if ($this->financa->excluir($id)) {
        $this->session->set_flashdata('sucesso', 'Registro excluído com sucesso!');
      } else {
        $this->session->set_flashdata('falha', 'Não foi possível excluir o registro!');
      }
    }

    redirect('financa', 'refresh');
  }
}
