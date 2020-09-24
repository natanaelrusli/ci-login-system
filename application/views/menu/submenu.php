<!-- Begin Page Content -->
<div class="container-fluid">

	<!-- Page Heading -->
	<h1 class="h3 mb-4 text-gray-800"><?= $title ?></h1>

	<div class="row">
		<div class="col-lg">
			<!-- Failed alert -->
			<?php if(validation_errors()) : ?>
			<div class="alert alert-danger pb-0" role="alert">
				<?= validation_errors(); ?>
			</div>
			<?php endif; ?>

			<!-- Success alert -->
			<?= $this->session->flashdata('message'); ?>

			<a href="" class="btn btn-primary mb-3" data-toggle="modal" data-target="#newSubMenuModal">Add New
				Submenu</a>

			<table class="table table-hover">
				<thead>
					<tr>
						<th scope="col">#</th>
						<th scope="col">Title</th>
						<th scope="col">Privelage</th>
						<th scope="col">URL</th>
						<th scope="col">Icon</th>
						<th scope="col">Active</th>
						<th scope="col">Action</th>
					</tr>
				</thead>
				<tbody>
					<?php $i = 1 ?>

					<?php foreach($submenu as $sm) : ?>
					<tr>
						<th scope="row"><?= $i ?></th>
						<td><?= $sm['title']?></td>
						<td><?= $sm['menu']?></td>
						<td><?= $sm['url']?></td>
						<td><?= $sm['icon']?></td>
						<td><?= $sm['is_active']?></td>
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
<div class="modal fade" id="newSubMenuModal" tabindex="-1" role="dialog" aria-labelledby="Modal" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Add New Submenu</h5>
			</div>
			<form action="<?= base_url('menu/submenu') ?>" method="POST">
				<div class="modal-body">
					<div class="form-group">
						<input type="text" id="title" name="title" placeholder="Title" class="form-control">
					</div>
					<div class="form-group">
						<select name="menu_id" id="menu_id" class="form-control">
							<option value="">Select Menu</option>
							<?php foreach($menu as $m) : ?>
							<option value="<?= $m['id']; ?>"><?= $m['menu']; ?></option>
							<?php endforeach; ?>
						</select>
					</div>
					<div class="form-group">
						<input type="text" id="url" name="url" placeholder="Submenu URL" class="form-control">
					</div>
					<div class="form-group">
						<input type="text" id="icon" name="icon" placeholder="Submenu icon" class="form-control">
					</div>
					<div class="form-group">
						<div class="form-check">
							<input type="checkbox" class="form-check-input" value="1" name="is_active" id="is_active"
								checked>
							<label for="is_active" class="form-check-label">Active?</label>
						</div>
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
