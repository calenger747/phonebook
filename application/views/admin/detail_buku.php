<!DOCTYPE html>
<html>
<head>
	<title><?php echo $title ?></title>
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.1/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap4.min.css">
</head>
<body>

	<div class="container" style="margin-top: 80px">
		<h2>Detail Data</h2><br>
		<div class="table-responsive">	
			<table class="table table-stripped table-hover">
				<tr>
					<th width="40%"> Nama Customer </th>
					<td width="60%"> <?php echo $data_buku->nama ?> </td>
				</tr>
				<tr>
					<th width="40%"> Nama Oganisasi </th>
					<td width="60%"> <?php echo $data_buku->organisasi ?> </td>
				</tr>
				<tr>
					<th width="40%"> Jabatan </th>
					<td width="60%"> <?php echo $data_buku->jabatan ?> </td>
				</tr>
				<tr>
					<th width="40%"> No. Telp </th>
					<td width="60%"> <?php echo $data_buku->telp ?> </td>
				</tr>
				<tr>
					<th width="40%"> Fax </th>
					<td width="60%"> <?php echo $data_buku->fax ?> </td>
				</tr>
				<tr>
					<th width="40%"> No HP 1 </th>
					<td width="60%"> <?php echo $data_buku->no_hp_1 ?> </td>
				</tr>
				<tr>
					<th width="40%"> No HP 2 </th>
					<td width="60%"> <?php echo $data_buku->no_hp_2 ?> </td>
				</tr>
				<tr>
					<th width="40%"> No HP 3 </th>
					<td width="60%"> <?php echo $data_buku->no_hp_3 ?> </td>
				</tr>
				<tr>
					<th width="40%"> Email </th>
					<td width="60%"> <?php echo $data_buku->email ?> </td>
				</tr>
				<tr>
					<th width="40%"> Note </th>
					<td width="60%"> <?php echo $data_buku->note ?> </td>
				</tr>
			</table>		  
			  
			  <a href="#" onclick="javascript:history.back()"><button type="button" class="btn btn-md btn-danger">Back</button></a>
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