<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html, charset=utf-8">
	<title>CodeIgniter Uniga</title>

	<link rel="stylesheet" type="text/css" href="<?= base_url();?>bootstrap/css/bootstrap.css">
	
	<script type="text/javascript" src="<?= base_url();?>bootstrap/js/bootstrap.js"></script>
</head>
<body>
	<div class="container">
		<h1 class="page-header text-center">Belajar Framework CI [uniga]</h1>
		<div class="row">
			<div class="col-sm-8 col-sm-offset-2">
				<a href="<?= base_url('user/addnew'); ?>" class="btn btn-primary">
					<span class="glyphicon glyphicon-plus"></span> Add New
				</a>
				<br>
				<br>
				<table class="table table-bordered table-striped">
					<thead>
						<tr>
							<th>ID</th>
							<th>Nama</th>
							<th>NIM</th>
							<th>JURUSAN</th>
							<th>ALAMAT</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
						<?php $i = 1;
						foreach ($mahasiswa as $mhs) {
							?>
							<tr>
								<td><?= $i; ?></td>
								<td><?= $mhs['nama']; ?></td>
								<td><?= $mhs['nim']; ?></td>
								<td><?= $mhs['jurusan']; ?></td>
								<td><?= $mhs['alamat']; ?></td>
								<td>
									<a href="<?= base_url('user/edit/'. $mhs['id']); ?>" class="btn btn-success">
										<span class="glyphicon glyphicon-edit"></span> Edit
									</a> 
									<a href="<?= base_url('user/delete/'. $mhs['id']); ?>" class="btn btn-danger">
										<span class="glyphicon glyphicon-trash"></span> Delete
									</a>
								</td>
							</tr>
						<?php
							$i++;
							}
						?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</body>
</html>