<!DOCTYPE html>
<html>
<head>
	<title><?php echo $title ?></title>
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.1/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap4.min.css">
</head>
<body>


	<div class="container" style="margin-top: 80px">
		<h2>Tambah Data</h2><br>
		<div class="col-md-12">
			<?php echo form_open('buku/reset_password') ?>
			  
			  <div class="form-group">
			    <label for="text">Password Baru</label>
			    <input type="text" name="password" class="form-control" placeholder="Masukkan Password Baru">
			  </div>

			  <div class="form-group">
			    <label for="text">Konfirmasi Password Baru</label>
			    <input type="text" name="confirm_password" class="form-control" placeholder="Masukkan Konfirmasi Password Baru">
			  </div>
			  
			  <button type="submit" class="btn btn-md btn-success">Simpan</button>
			  <button type="reset" class="btn btn-md btn-warning">Reset</button>
			  <a href="#" onclick="javascript:history.back()"><button type="button" class="btn btn-md btn-danger">Back</button></a>
			<?php echo form_close() ?>
		</div>
		<br>
	</div>

<script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap4.min.js"></script>
<script>
	$('#table').DataTable( {
    autoFill: true
} );
</script>
</body>
</html>