<?php
defined('BASEPATH') or exit('Acesso RESTRITO');

class Contato extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
  }

  public function index()
  {
    $this->enviarEmail();
  }

  public function enviarEmail()
  {
    if ($usuario = $this->input->post()) {
      // $mensagem = 'Prezado(a): <br><br>';
      // $mensagem .= 'Recebemos um e-mail de contato de <b>' . $usuario['nome'] . '</b><br>';
      // $mensagem .= 'Com e-mail <b>' . $usuario['email'] . '</b><br>';
      // $mensagem .= 'Mandou esta mensagem para você <br> <b>' . $usuario['message'] . '</b><br>';
      // $mensagem .= 'Obrigado!<br>';
      // $mensagem .= '<p style="color:red;"> Equipe de desenvolvimento!</p>';
      $mensagem = '<!doctype html>
      <html>
      
      <head>
          <meta name="viewport" content="width=device-width" />
          <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
      </head>
      
      <body>
          <table style="max-width: 600px !important; margin-left: auto; margin-right: auto; font-family: arial;" border="0"
              cellpadding="20" cellspacing="0">
              <tr style="background-color: #4C6798;">
                  <td align="center" valign="top">
                      <h2 style=" padding: 30px; color: #fff;">SEJA BEM VINDO</h2>
                  </td>
              </tr>
              <tr style="background-color: #fff; ">
      
                  <td align="center" valign="top"  style="padding-bottom: 60px;">
                      
                      <h2 style=" padding: 20px; color: #4C6798;">Recebemos um email de contato de <b> '. $usuario['nome'] .'</b><br>
                      Com o e-mail <b>' . $usuario['email'] . '.</b><br>
                      Mandou esta mensagem: <br> <b>' . $usuario['message'] . '</b><br>
                      Obrigado!</h2>
                    
                  </td>
              </tr>
        
              <tr style="background-color: #4C6798; color: #fff;">
                  <td align="center" valign="top">
                      <p style=" padding: 10px ; font-size:20px;">Central de atendimento:</p>
                      <span>Telefone: (35) 99999-9999 </span>
                      <br>
                      <span>E-mail: 4Team@gmail.com </span>
                      <br>
                      <span>Site: www.4team.com.br </span>
                  </td>
              </tr>
          </table>
      </body>
      
      </html>       ';

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
      $this->email->to('lukesouzaluke@gmail.com');
      $this->email->from('lukesouzaluke@gmail.com');
      $this->email->subject('E-mail de contato!');
      $this->email->message($mensagem);

      if ($this->email->send()) {
        $this->session->set_flashdata('sucesso', 'Obrigado pelo seu contato!');
      } else {
        $this->session->set_flashdata('falha', 'Não foi possível enviar seu contato.');
      }
      redirect('home', 'refresh');
    } else {
      echo "oi";
    }
  }
}
