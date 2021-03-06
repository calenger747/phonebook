<!DOCTYPE html>
<html>
<head>
	<title><?php echo $title ?></title>
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.1/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap4.min.css">
</head>
<body>

	<div class="container" style="margin-top: 80px">
		<h2>Edit Data</h2><br>
		<div class="col-md-12">
			<?php echo form_open('buku/update') ?>

			  <div class="form-group">
			    <label for="text">Nama Customer</label>
			    <input type="text" name="nama" class="form-control" value="<?php echo $data_buku->nama ?>" placeholder="Masukkan Nama Customer">
			    <input type="hidden" value="<?php echo $data_buku->id ?>" name="id">
			  </div>

			  <div class="form-group">
			    <label for="text">Organisasi</label>
			    <input type="text" name="organisasi" value="<?php echo $data_buku->organisasi ?>" class="form-control" placeholder="Masukkan Organisasi">
			  </div>

			  <div class="form-group">
			    <label for="text">Jabatan</label>
			    <input type="text" name="jabatan" value="<?php echo $data_buku->jabatan ?>" class="form-control" placeholder="Masukkan Jabatan">
			  </div>

			  <div class="form-group">
			    <label for="text">No. Telp</label>
			    <input type="text" name="telp" value="<?php echo $data_buku->telp ?>" class="form-control" placeholder="Masukkan No. Telp">
			  </div>

			  <div class="form-group">
			    <label for="text">Fax</label>
			    <input type="text" name="fax" value="<?php echo $data_buku->fax ?>" class="form-control" placeholder="Masukkan Fax">
			  </div>

			  <div class="form-group">
			    <label for="text">No. HP 1</label>
			    <input type="text" name="no_hp_1" value="<?php echo $data_buku->no_hp_1 ?>" class="form-control" placeholder="Masukkan No. HP 1">
			  </div>

			  <div class="form-group">
			    <label for="text">No. HP 2</label>
			    <input type="text" name="no_hp_2" value="<?php echo $data_buku->no_hp_2 ?>" class="form-control" placeholder="Masukkan No. HP 2">
			  </div>

			  <div class="form-group">
			    <label for="text">No. HP 3</label>
			    <input type="text" name="no_hp_3" value="<?php echo $data_buku->no_hp_3 ?>" class="form-control" placeholder="Masukkan No. HP 3">
			  </div>

			  <div class="form-group">
			    <label for="text">Email</label>
			    <input type="email" name="email" value="<?php echo $data_buku->email ?>" class="form-control" placeholder="Masukkan Email">
			  </div>
			  <div class="form-group">
			    <label for="text">Note</label>
			    <textarea name="note" class="form-control" placeholder="Note"><?php echo $data_buku->note ?></textarea>
			  </div>
			  
			  <button type="submit" class="btn btn-md btn-success">Update</button>
			  <button type="reset" class="btn btn-md btn-warning">Reset</button>
			  <a href="#" onclick="javascript:history.back()"><button type="button" class="btn btn-md btn-danger">Back</button></a>
			<?php echo form_close() ?>
		</div>
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