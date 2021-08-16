<?php
$this->load->view('/templates/header.php');
?>

<section class="container">
    <h2 class="mt-5"><?php echo $titulo; ?></h2>
    <h3 class="text-center mt-2"><?php echo isset($categoria) ? $categoria->nome : ""; ?></h3>
    <div class="row mt-2">
        <?php echo form_open('categoria/salvar'); ?>
        <div class="col-md-5">
            <input type="hidden" value="<?php echo isset($categoria) ? $categoria->id : ""; ?>" name="id">
            <div class="form-group">
                <label for="">Nome: </label>
                <input type="text" name="nome" class="form-control" value="<?php echo isset($categoria) ? $categoria->nome : ""; ?>" required placeholder="digite o nome da categoria">
            </div>
            <div class="text-center mt-3">
                <input type="submit" class="btn btn-success btn-lg" value="Salvar">
            </div>
        </div>
        <?php echo form_close(); ?>
    </div>
</section>
<?php
$this->load->view('/templates/footer.php');
?>