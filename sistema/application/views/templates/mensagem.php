<?php if ($this->session->flashdata('sucesso') || $this->session->flashdata('falha') || $this->session->flashdata('aviso')) { ?>
	<div id="myModal" class="modal" tabindex="-1" role="dialog">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<?php if ($this->session->flashdata('sucesso')) { ?>
					<div class="modal-header bg-success">
						<h5 class="modal-title text-light">Sucesso </h5>
					<?php 	} ?>
					<?php if ($this->session->flashdata('falha')) { ?>
						<div class="modal-header bg-danger">
							<h5 class="modal-title text-light">Falha </h5>
						<?php 	} ?>
						<?php if ($this->session->flashdata('aviso')) { ?>
							<div class="modal-header bg-warning">
								<h5 class="modal-title text-dark">Aviso </h5>
							<?php 	} ?>
							<button type="button" class="close" style="background-color: transparent; border: none;" data-bs-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
							</div>
							<div class="modal-body text-dark">
								<?php if ($this->session->flashdata('sucesso')) { ?>
									<?php echo $this->session->flashdata('sucesso'); ?>
								<?php 	} ?>

								<?php if ($this->session->flashdata('falha')) { ?>
									<?php echo $this->session->flashdata('falha'); ?>
								<?php 	} ?>

								<?php if ($this->session->flashdata('aviso')) { ?>
									<?php echo $this->session->flashdata('aviso'); ?>
								<?php 	} ?>
							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
							</div>
						</div>
					</div>
			</div>

			<!-- jquery -->
			<script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
			<!-- bootstrap -->
			<!-- JavaScript Bundle with Popper -->
			<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
			<script type="text/javascript">
				$(window).load(function() {
					$('#myModal').modal('show');
				});
			</script>

		<?php } ?>