<?php $this->load->view('/templates/header.php'); ?>
<?php $this->load->view('templates/mensagem'); ?>
<section class="container">
  <?php echo form_open('usuario/cadastro'); ?>
  <div class="row mt-2 justify-content-center">
    <h3 class="text-center mt-2"><?php echo $titulo; ?></h3>
    <div class="form-group col-md-6">
      <label for="">Nome: </label>
      <input type="text" name="nome" class="form-control m-1" required placeholder="digite seu nome completo">
    </div>
    <div class="form-group col-md-6">
      <label for="">CPF: </label>
      <input type="text" name="cpf" class="form-control m-1" required placeholder="digite o seu cpf">
    </div>
    <div class="form-group col-md-6">
      <label for="">Telefone: </label>
      <input type="text" name="telefone" class="form-control m-1" required placeholder="Ex: (xx) xxxxx-xxxx">
    </div>
    <div class="form-group col-md-6">
      <label for="">Email: </label>
      <input type="email" name="email" class="form-control m-1" required placeholder="digite o seu email">
    </div>
    <div class="form-group col-md-6">
      <label for="">Senha: </label>
      <input type="password" name="senha" class="form-control m-1" required placeholder="crie uma senha">
    </div>
    <div class="form-group col-md-6">
      <label for="">Confirme sua senha: </label>
      <input type="password" name="senhaC" class="form-control m-1" required placeholder="confirme sua senha">
    </div>

    <div class="text-center mt-3">
      <input type="reset" class="btn btn-outline-danger btn-lg" value="limpar">
      <input type="submit" class="btn btn-primary btn-lg" value="Cadastrar"><br>
      <a href="<?php echo base_url('usuario/login'); ?>" class="btn btn-success mt-2">Possuo conta</a>
    </div>
  </div>
  <?php echo form_close(); ?>
</section>
<?php
$this->load->view('/templates/footer.php');
?>