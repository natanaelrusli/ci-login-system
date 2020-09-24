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

			<a href="" class="btn btn-primary mb-3" data-toggle="modal" data-target="#newRoleModal">Add New Menu</a>

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

					<?php foreach($role as $r) : ?>
					<tr>
						<th scope="row"><?= $i ?></th>
						<td><?= $r['role']?></td>
						<td>
							<a class="badge badge-warning" href="<?= base_url('admin/roleaccess/') . $r['id'] ?>">Access</a>
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
<div class="modal fade" id="newRoleModal" tabindex="-1" role="dialog" aria-labelledby="newRoleModal" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="newRoleModal">Add New Role</h5>
			</div>
			<form action="<?= base_url('admin/role') ?>" method="POST">
				<div class="modal-body">
					<div class="form-group">
						<input type="text" id="role" name="role" placeholder="Role Name" class="form-control">
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
