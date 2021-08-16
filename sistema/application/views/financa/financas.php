<?php
$this->load->view('/templates/header');
?>
<section class="container">
  <h3 class="mt-3"><?php echo $titulo; ?></h3>
  <div>
    <a href="<?php echo base_url('financa/salvar') ?>"><button class="btn btn-primary btn-lg" id="novo">+ Nova finança</button></a>
  </div>
  <div class="table-responsive">
  <table class="table table-striped table-bordered table-hover mt-3">
    <thead>
      <tr>
        <th>Descrição</th>
        <th>Data</th>
        <th>Valor</th>
        <th>Categoria</th>
        <th>Entrada/saída</th>
        <th>Ações</th>
      </tr>
    </thead>
    <tbody>
      <?php
      $financas_model = new FinancaModel();
      $financas = $financas_model->listar();

      // echo "<pre>";
      // print_r($produtos);
      // echo "</pre>";
      if ($financas != null) {
        foreach ($financas as $financa) {
      ?>
          <tr>
            <td><?php echo $financa->nome; ?></td>
            <td><?php echo date("d/m/Y", strtotime($financa->data)); ?></td>
            <td><?php echo "R$ " . number_format($financa->valor, 2); ?></td>
            <td><?php echo $financa->descricao; ?></td>
            <td><?php echo $financa->tipo; ?></td>
            <td><a href="<?php echo base_url('financa/salvar/') . $financa->id; ?>" class="btn btn-warning btn-sm"><span class="fa fa-pencil-square-o fa-lg"></span> Editar</a>
              | <a href="<?php echo base_url('financa/excluir/') . $financa->id; ?>" onClick="return confirm('Confirma exclusão do registro de <?php echo $financa->nome; ?>?');" class="btn btn-danger btn-sm"><span class="fa fa-times fa-lg"></span> Excluir</a></td>
          </tr>
      <?php }
      } ?>
    </tbody>
    <tfoot>
    </tfoot>
  </table>
  </div>
</section>
<?php
$this->load->view('/templates/footer');
?>