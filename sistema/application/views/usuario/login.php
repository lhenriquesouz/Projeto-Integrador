<?php $this->load->view('/templates/header.php'); ?>

<section class="container">
    <div class="row mt-4 justify-content-center">
        <div class="col-md-5 card">
            <?php echo form_open('usuario/login'); ?>
            <div class="card-header w-100 bg-white">
                <h3 class="text-center mt-2"><?php echo $titulo; ?></h3>
            </div>
            <div class="card-body">
                <div class="form-group m-2">
                    <label for="">Usuário: </label>
                    <input type="email" name="usuario" class="form-control" required placeholder="digite seu e-mail">
                </div>
                <div class="form-group m-2">
                    <label for="">Senha: </label>
                    <input type="password" name="senha" class="form-control" required placeholder="digite sua senha">
                </div>

                <div class="form-group mt-3 text-center">
                    <input type="submit" class="btn btn-primary btn-lg btn-block" value="Entrar">
                </div>
            </div>
            <?php echo form_close(); ?>
            <div class="card-footer text-center bg-white">
                <button id="botao" type="button" class="btn btn-outline-primary btn-sm" data-toggle="modal" data-target="#exampleModal">
                    Esqueci a senha!
                </button>
                <a href="<?php echo base_url('usuario/cadastro'); ?>" class="btn btn-secondary btn-sm">Criar uma conta</a>
            </div>
        </div>
    </div>
</section>
<?php
$this->load->view('/templates/footer.php');
?>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Recuperar senha</h5>
                <button type="button" class="close" style="background-color: transparent; border: none;" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <?php echo form_open('usuario/recuperarSenha'); ?>
            <div class="modal-body">
                <div class="form-group">
                    <label for="">E-mail: </label>
                    <input type="email" name="email" class="form-control" required placeholder="digite o e-mail do usuário">
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                <input type="submit" class="btn btn-primary" value="Alterar senha">
            </div>
            <?php echo form_close(); ?>
        </div>
    </div>
</div>
<!-- jquery -->
<script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
<!-- bootstrap -->
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script type="text/javascript">
    $("#botao").click(function() {
        $("#exampleModal").modal('show');
    });
</script>