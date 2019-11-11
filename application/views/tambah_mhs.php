<!DOCTYPE html>
<!DOCTYPE html>
<html>
<head>
	<title>UTS PEMROGRAMAN WEB FRAMEWORK LANJUT</title>
	<center><h3>INPUT DATA MAHASISWA</h3></center>
</head>
<body>
	<table>
		<form action ="<?php echo base_url('Mahasiswa/tambahmhs'); ?>" method="POST">
			<tr>
				<td>NIM</td>
				<td> : </td>
				<td><input type="text" name="nim" value=""></td>
			</tr>
			<tr>
				<td>Nama Mahasiswa</td>
				<td> : </td>
				<td><input type="text" name="nama" value=""</td>
			</tr>
			<tr>
				<td>Jenis Kelamin</td>
				<td> : </td>
				<td>
					<select name="jk">
						<option value="Laki-laki">Laki-laki</option>
						<option value="Perempuan">Perempuan</option>
					</select>
				</td>
			</tr>
			<tr>
				<td>Alamat</td>
				<td> : </td>
				<td><input type="text" name="alamat" value=""></td>
			</tr>
			<tr>
				<td>No. Hp</td>
				<td> : </td>
				<td><input type="text" name="no_hp" value=""></td>
			</tr>
			<tr>
				<td></td>
				<td></td>
				<td><input type="submit" value="Simpan" class="btn btn-primary"</td>
			</tr>
			
		</form>
	</table>

</body>
</html>