<?php
defined('BASEPATH') or exit('Acesso RESTRITO');

class Usuario extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('usuarioModel', 'usuario');
	}

	public function index()
	{
		$dados['titulo'] = "LOGIN";
		$this->load->view('usuario/login', $dados);
	}

	public function cadastro()
	{
		if ($registro = $this->input->post()) {
			if ($registro["senha"] == $registro["senhaC"]) {
				$registro["senha"] = password_hash($registro["senha"], PASSWORD_DEFAULT);
				unset($registro["senhaC"]);

				if ($this->usuario->inserir($registro)) {
					$this->session->set_flashdata('sucesso', 'Registro salvo com sucesso!');
					redirect('usuario', 'refresh');
				} else {
					$this->session->set_flashdata('falha', 'Usuário já cadastrado no sistema!');
					redirect('usuario/cadastro', 'refresh');
				}
			} else {
				$this->session->set_flashdata('aviso', 'Senha não confere');
				redirect('usuario/cadastro', 'refresh');
			}
		}

		$dados['titulo'] = "Cadastro de Usuário";
		$this->load->view('usuario/cadastro', $dados);
	}

	public function salvar()
	{
		if (($id = $this->uri->segment(3)) > 0) {
			if ($produto = $this->produto->pesquisarId($id)) {
				$dados['usuario'] = $produto;
			}
		}

		if ($registro = $this->input->post()) {
			if (isset($registro["id"]) && $registro["id"] > 0) {
				if ($this->produto->editar($registro)) {
					$this->session->set_flashdata('sucesso', 'Registro editado com sucesso!');
				} else {
					$this->session->set_flashdata('falha', 'Não foi possível editar o registro!');
				}
			} else {
				if ($this->produto->inserir($registro)) {
					$this->session->set_flashdata('sucesso', 'Registro salvo com sucesso!');
				} else {
					$this->session->set_flashdata('falha', 'Não foi possível salvar o registro!');
				}
			}
			redirect('usuario', 'refresh');
		}

		$dados['titulo'] = "Cadastro de Usuário";
		$this->load->view('usuario/cadastro', $dados);
	}

	public function login()
	{
		$usuario = $this->input->post();

		if ($usuario) {

			if (isset($usuario['usuario']) && isset($usuario['senha'])) {
				$login = $this->usuario->login($usuario['usuario']);
			}

			if ($login) {
				if (password_verify($usuario['senha'], $login->senha)) {
					$this->session->set_userdata('logado', TRUE);
					$this->session->set_userdata('nome', $login->nome);
					$this->session->set_userdata('id', $login->id);
					$this->session->set_flashdata('sucesso', 'Bem vindo: ' . $login->nome);
					// echo "<pre>";
					// print_r($login);
					// echo "</pre>";
					// echo "<pre>";
					// print_r($this->session->userdata());
					// echo "</pre>";
					redirect('dashboard', 'refresh');
				} else {
					$this->session->set_flashdata('falha', 'Senha inválida!');
					redirect('usuario', 'refresh');
				}
			} else {
				$this->session->set_flashdata('falha', 'Usuário não cadastrado no sistema!');
				redirect('usuario', 'refresh');
			}
		} else {
			$dados['titulo'] = "Login";
			$this->load->view('usuario/login', $dados);
		}
	}

	public function logout()
	{
		$this->session->unset_userdata($this->session->set_userdata('logado', FALSE));
		$this->session->sess_destroy();
		redirect('usuario', 'refresh');
	}

	public function recuperarSenha()
	{
		if ($email = $this->input->post()) {
			$usuario =  $this->usuario->pesquisarEmail($email['email']);
			if ($usuario == null) {
				$this->session->set_flashdata('falha', 'Email não cadastrado!!!');
			} else {
				$maiusculas = implode('', range('A', 'Z'));
				$minusculas = implode('', range('a', 'z'));
				$numericos = implode('', range(0, 9));
				$alfanumerico = $maiusculas . $minusculas . $numericos;
				$senha = '';
				$tamanhoSenha = 6;

				for ($i = 0; $i < $tamanhoSenha; $i++) {
					$senha .= $alfanumerico[rand(0, strlen($alfanumerico) - 1)];
				}
				// criar função para gerar senha

				$usuario->senha = password_hash($senha, PASSWORD_DEFAULT);

				if ($this->usuario->editar($usuario)) {
					$mensagem = 'Prezado(a): <br><br>';
					$mensagem .= 'Sua senha provisória é <b>' . $senha . '</b><br>';
					$mensagem .= 'Orientameos que a troque logo no primeiro acesso<br>';
					$mensagem .= 'Obrigado!<br>';
					$mensagem .= 'Equipe de desenvolvimento!';

					$config = array(
						'protocol' => 'smtp',
						'smtp_host' => 'ssl://mail.supermidiaalfenas.com.br',
						'smtp_port' => 465,
						'smtp_user' => 'denis@supermidiaalfenas.com.br',
						'smtp_pass' => 'sISTEMa10!',
						'mailtype' => 'html',
						'charset' => 'utf8'
					);
					$this->email->initialize($config);
					$this->email->to($usuario->email);
					$this->email->from('denis@supermidiaalfenas.com.br');
					$this->email->subject('Recuperação de senha!');
					$this->email->message($mensagem);

					if ($this->email->send()) {
						$this->session->set_flashdata('sucesso', 'Uma nova senha foi enviada para seu e-mail!');
					} else {
						$this->session->set_flashdata('falha', 'Não foi possível enviar uma nova senha para o seu e-mail!');
					}
					redirect('usuario', 'refresh');
				} else {
					$this->session->set_flashdata('falha', 'Não foi possível recuperar a senha!');
					redirect('usuario', 'refresh');
				}
			}
		}
		$dados['titulo'] = "Recuperar senha";
		$this->load->view('usuario/senha', $dados);
	}
}
