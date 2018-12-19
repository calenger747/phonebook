<?php 
  	header ("Cache-Control: no-cache, must-revalidate");
    header ("Pragma: no-cache");
    header ("Content-type: application/x-msexcel");
    header ("Content-type: application/octet-stream");
    header ("Content-Disposition: attachment; filename=Data Phonebook.xls");
?>

<style type="text/css">
  table,th,td{
    border-collapse: collapse;
    padding: 15px;
    margin: 10px;
    color: #000;
    font-size: 16px;
  }
</style>
<div style="text-align: center;">
	<br>
	<span style="margin-left: 20px;font-size: 27px;"><b>Data Phonebook</b></span>
</div><br>
<table border="1">
      <thead>
        <tr>
          <th>No</th>
          <th>Nama</th>
          <th>Organisasi</th>
          <th>Jabatan</th>
          <th>No. Telp</th>
          <th>Fax</th>
          <th>No. HP 1</th>
          <th>No. HP 2</th>
          <th>No. HP 3</th>
          <th>Email</th>
          <th>Note</th>
        </tr>
      </thead>
      <?php
        $no = 1;
        if ($data->num_rows() > 0) {
          foreach ($data->result() as $row) {
            ?>
              <tr>
                <td width="35"><?php echo $no++; ?></td>
                <td width="170"><?php echo $row->nama; ?></td>
                <td width="140"><?php echo $row->organisasi; ?></td>
                <td width="140"><?php echo $row->jabatan; ?></td>
                <td width="140"><?php echo $row->telp; ?></td>
                <td width="140"><?php echo $row->fax; ?></td>
                <td width="140"><?php echo $row->no_hp_1; ?></td>
                <td width="140"><?php echo $row->no_hp_2; ?></td>
                <td width="140"><?php echo $row->no_hp_3; ?></td>
                <td width="200"><?php echo $row->email; ?></td>
                <td width="250"><?php echo $row->note; ?></td>
              </tr>
 
            <?php
          }
        }
      ?>
</table>


