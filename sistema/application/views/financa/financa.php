<?php
$this->load->view('/templates/header.php');

$categoria_model = new CategoriaModel();
$categorias = $categoria_model->listar();
?>

<section class="container">
  <h2 class="mt-4"><?php echo $titulo; ?></h2>
  <h3 class="text-center mt-2"><?php echo isset($financa) ? $financa->nome : ""; ?></h3>
  <div class="row mt-2">
    <?php echo form_open('financa/salvar'); ?>
    <input type="hidden" value="<?php echo isset($financa) ? $financa->id : ""; ?>" name="id">
    <input type="hidden" value="<?php echo $this->session->userdata('id'); ?>" name="idUsuario">
    <div class="form-group mb-2">
      <label for="">Descrição: </label>
      <textarea name="nome" class="form-control" value="<?php echo isset($financa) ? $financa->nome : ""; ?>" required placeholder="digite a descrição da finança" style="resize: none;"><?php echo isset($financa) ? $financa->nome : ""; ?></textarea>
    </div>
    <div class="form-group mb-2">
      <label for="">Data: </label>
      <input type="date" name="data" class="form-control" value="<?php echo isset($financa) ? $financa->data : ""; ?>" required placeholder="digite seu nome completo">
    </div>
    <div class="form-group mb-2">
      <label for="">Entrada/saída: </label>
      <div class="row" style="padding-left: 8px;">
        <div class="col-md-2" style="border: 1px solid #808088; margin: 5px; padding: 10px;">
          <input type="radio" name="tipo" value="entrada">
          <label for="html">Entrada</label>
        </div>
        <div class="col-md-2" style="border: 1px solid #808088; margin: 5px; padding: 10px;">
          <input type="radio" name="tipo" value="saida"></input>
          <label for="html">Saída</label>
        </div>
      </div>
      <!-- <select class="form-control" name="tipo" id="tipo" placeholder="Categoria">
        <option selected="true" disabled="disabled">Selecione</option>
        <option value="entrada">Entrada</option>
        <option value="saida">Saída</option>
      </select> -->
      <!-- <input type="text" name="nome" class="form-control" value="<?php echo isset($financa) ? $financa->nome : ""; ?>" required placeholder="digite seu nome completo"> -->
    </div>
    <?php echo $this->session->userdata('idUsuario'); ?>
    <section class="row" style="padding: 10px !important;">
      <div class="form-group col-md-6">
        <label for="">Categoria: </label>
        <div class="input-group">
          <div class="input-group-prepend">
            <label class="input-group-text" for="inputGroupSelect01">Opções</label>
          </div>
          <select class="form-select" name="idCategoria" placeholder="Categoria">
            <option selected="true" disabled="disabled">Selecione a categoria</option>
            <?php if ($categorias != null) {
              foreach ($categorias as $categoria) {
            ?>
                <option value="<?php echo $categoria->id; ?>"><?php echo $categoria->nome; ?></option>
            <?php }
            } ?> ?>
          </select>
        </div>
        <!-- <input type="text" name="nome" class="form-control" value="<?php echo isset($financa) ? $financa->nome : ""; ?>" required placeholder="digite seu nome completo"> -->
      </div>
      <div class="form-group col-md-6">
        <label for="">Valor: </label>
        <div class="input-group">
          <span class="input-group-text">R$</span>
          <input type="number" step="0.01" class="form-control" name="valor" aria-label="Amount (to the nearest dollar)" value="<?php echo isset($financa) ? $financa->valor : ""; ?>" required placeholder="digite o valor">
          <span class="input-group-text">.00</span>
        </div>
      </div>
    </section>
    <div class="text-center mt-3">
      <input type="submit" class="btn btn-success btn-lg" value="Salvar">
    </div>
    <?php echo form_close(); ?>
  </div>
</section>
<?php
$this->load->view('/templates/footer.php');
?>