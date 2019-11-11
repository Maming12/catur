<!DOCTYPE html>
<html>
<head>
	<title>UTS</title>
</head>
<body>
	<center>
		<h3>
			<a href="<?php echo base_url('Con_mhs/');?>">Kembali</a>
		</h3>
	</center>
	<center>
		<table border="1">
			<thead>
				<tr>
					<th>No.</th>
					<th>NIM</th>
					<th>NO HP lama</th>
					<th>NO HP baru</th>
					<th>TGL diubah</th>
				</tr>
				<?php $no = 1; foreach ($mahasiswa as $itemmhs) {?>
			</thead>
				<tr>
					<th><?php echo $no++; ?></th>
					<th><?php echo $itemmhs['nim']; ?></th>
					<th><?php echo $itemmhs['nohp_lama']; ?></th>
					<th><?php echo $itemmhs['nohp_baru']; ?></th>
					<th><?php echo $itemmhs['tgl_diubah']; ?></th>
				</tr>
			<?php } ?>
		</table>
	</center>
</body>
</html>