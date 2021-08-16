<?php
$this->load->view('/templates/header');
?>
<section class="container">
    <h3 class="mt-3"><?php echo $titulo; ?></h3>
    <div>
        <a href="<?php echo base_url('categoria/salvar') ?>"><button class="btn btn-primary btn-lg" id="novo">+ Nova categoria</button></a>
    </div>
    <table class="table table-striped table-bordered table-hover mt-3">
        <thead>
            <tr>
                <th>Nome</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $categorias_model = new CategoriaModel();
            $categorias = $categorias_model->listar();

            // echo "<pre>";
            // print_r($produtos);
            // echo "</pre>";
            if ($categorias != null) {
                foreach ($categorias as $categoria) {
            ?>
                    <tr>
                        <td><?php echo $categoria->nome; ?></td>
                        <td><a href="<?php echo base_url('categoria/salvar/') . $categoria->id; ?>" class="btn btn-warning btn-sm"><span class="fa fa-pencil-square-o fa-lg"></span> Editar</a>
                            | <a href="<?php echo base_url('categoria/excluir/') . $categoria->id; ?>" onClick="return confirm('Confirma exclusão do registro de <?php echo $categoria->nome; ?>?');" class="btn btn-danger btn-sm"><span class="fa fa-times fa-lg"></span> Excluir</a></td>
                    </tr>
            <?php }
            } ?>
        </tbody>
        <tfoot>
        </tfoot>
    </table>
</section>
<?php
$this->load->view('/templates/footer');
?>