<!-- Begin Page Content -->
<div class="container-fluid">

	<!-- Page Heading -->
	<h1 class="h3 mb-4 text-gray-800"><?= $title ?></h1>

	<div class="row">
		<div class="col-lg-6">
			<!-- Failed alert -->
			<?= form_error('menu','<div class="alert alert-danger" role="alert">', '</div>'); ?>

			<!-- Success alert -->
			<?= $this->session->flashdata('message'); ?>

			<a href="" class="btn btn-primary mb-3" data-toggle="modal" data-target="#newModal">Add New Menu</a>

			<table class="table table-hover">
				<thead>
					<tr>
						<th scope="col">#</th>
						<th scope="col">Menu</th>
						<th scope="col">Action</th>
					</tr>
				</thead>
				<tbody>
					<?php $i = 1 ?>

					<?php foreach($menu as $m) : ?>
					<tr>
						<th scope="row"><?= $i ?></th>
						<td><?= $m['menu']?></td>
						<td>
							<a class="badge badge-success" href="">Edit</a>
							<a class="badge badge-danger" href="">Delete</a>
						</td>
					</tr>
					<?php $i = $i + 1 ?>

					<?php endforeach; ?>
				</tbody>
			</table>
		</div>
	</div>

</div>
<!-- /.container-fluid -->

<!-- Button trigger modal -->

<!-- Modal -->
<div class="modal fade" id="newModal" tabindex="-1" role="dialog" aria-labelledby="Modal" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Add New Menu</h5>
			</div>
			<form action="<?= base_url('menu') ?>" method="POST">
				<div class="modal-body">
					<div class="form-group">
						<input type="text" id="menu" name="menu" placeholder="Menu Name" class="form-control">
					</div>
				</div>
				<div class="modal-footer">
					<button type="submit" class="btn btn-primary">Save Menu</button>
				</div>
			</form>
		</div>
	</div>
</div>

</div>
<!-- End of Main Content -->
