<!DOCTYPE html>
<html>
<head>
	<title>UTS</title>
</head>
<body>
	<center>
		<h3>
			<a href="<?php echo base_url('Con_mhs/tambahmhs');?>">Tambah </a>
		</h3>
	</center>
	<center>
		<table border="1">
			<thead>
				<tr>
					<th>No.</th>
					<th>NIM</th>
					<th>Nama Mhs</th>
					<th>Jenis Kelamin</th>
					<th>Alamat</th>
					<th>No. Hp</th>
					<th>Action</th>
				</tr>
				<?php $no = 1; foreach ($mahasiswa as $itemmhs) {?>
			</thead>
				<tr>
					<th><?php echo $no++; ?></th>
					<th><?php echo $itemmhs['nim']; ?></th>
					<th><?php echo $itemmhs['nmmahasiswa']; ?></th>
					<th><?php echo $itemmhs['jk']; ?></th>
					<th><?php echo $itemmhs['alamat']; ?></th>
					<th><?php echo $itemmhs['nohp']; ?></th>
					<td align ="center">
						<a href="<?php echo base_url('Con_mhs/editmhs/').$itemmhs['id']; ?>">Edit</a>
						<a href="<?php echo base_url('Mahasiswa/hapusmhs/').$itemmhs['id']; ?>" onclick="return confirm('Apakah Anda Yakin, Mau Menghapus data?') ">Hapus</a>
					</td>
				</tr>
			<?php } ?>
		</table>
		<center>
		<h3>
			<a href="<?php echo base_url('Con_mhs/hasiledit');?>">Lihat hasil edit </a>
		</h3>
	</center>
	</center>
</body>
</html>