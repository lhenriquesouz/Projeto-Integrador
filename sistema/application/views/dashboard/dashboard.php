<?php
$this->load->view('/templates/header.php');
?>

<?php
$dash = new DashboardModel();
$dashs = $dash->contaRegistros();
?>

<section class="container mt-3">
  <h2 class="mt-3"><?php echo $titulo; ?></h2>
  <div class="row justify-content-center">
    <div class="col-md-3 card">
      <div class="card-header bg-white">
        Quantidade de categorias
      </div>
      <div class="card-body text-center">
        <h2><?php echo $categorias; ?></h2>
      </div>
      <div class="card-footer bg-white">

      </div>
    </div>
    <div class="col-md-3 card">
      <div class="card-header bg-white text-center">
        Entrada
      </div>
      <div class="card-body text-center">
        <h2><?php echo "R$ " . number_format($entrada->soma, 2); ?></h2>
      </div>
      <div class="card-footer bg-white">

      </div>
    </div>

    <div class="col-md-3 card">
      <div class="card-header bg-white text-center">
        Saída
      </div>
      <div class="card-body text-center">
        <h2><?php echo "R$ " . number_format($saida->soma, 2); ?></h2>
      </div>
      <div class="card-footer bg-white">

      </div>
    </div>
    <div class="col-md-3 card">
      <div class="card-header bg-white text-center">
        Saldo
      </div>
      <div class="card-body text-center">
        <h2><?php echo "R$ " . number_format(($entrada->soma - $saida->soma), 2); ?></h2>
      </div>
      <div class="card-footer bg-white">

      </div>
    </div>
  </div>
</section>
<?php
$this->load->view('/templates/footer.php');
?>