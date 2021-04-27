 <!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>CodeIgniter uniga</title>
	<link rel="stylesheet" type="text/css" href="<?= base_url(); ?>bootstrap/css/bootstrap.min.css">
</head>
<body>
<div class="container">
	<h1 class="page-header text-center">Belajar Framework CI [uniga]</h1>
	<div class="row">
		<div class="col-sm-4 col-sm-offset-4">
			<h3>Edit Data
				<span class="pull-right"><a href="<?= base_url(); ?>" class="btn btn-primary"><span class="glyphicon glyphicon-arrow-left"></span> Back</a></span>
			</h3>
			<hr>
			<form method="POST" action="<?= base_url('user/update/'. $editmhs['id']); ?>">
				<div class="form-group">
					<label>Nama:</label>
					<input type="text" class="form-control" name="nama" value="<?= $editmhs['nama']; ?>">
				</div>
				<div class="form-group">
					<label>NIM:</label>
					<input type="text" class="form-control" name="nim" value="<?= $editmhs['nim']; ?>">
				</div>
				<div class="form-group">
					<label>Jurusan:</label>
					<input type="text" class="form-control" name="jurusan" value="<?= $editmhs['jurusan']; ?>">
				</div>
				<div class="form-group">
					<label>Alamat:</label>
					<input type="text" class="form-control" name="alamat" value="<?= $editmhs['alamat']; ?>">
				</div>
				<button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-floppy-disk"></span> Save</button>
			</form>
		</div>
	</div>
</div>
</body>
</html>