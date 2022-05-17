<html>
<head><title>Tambah Data</title></head>
<body>
<h3><p align="left">Tambah Data Mahasiswa</p></h3>
<form name="form1" method="post" action="entry.php">
<table>
<tr>
<td>NPM</td>
<td><input type="text" name="nim" size="12"></td>
</tr>
<tr>
<td>Nama</td>
<td><input type="text" name="nama" size="30"></td>
</tr>
<tr>
<td>Alamat</td>
<td><input type="text" name="alamat" size="50"></td>
</tr>
<tr>
<td>Agama</td>
<td><input type="text" name="agama" size="10"></td>
</tr>
<tr>
<td>No. Telepon</td>
<td><input type="text" name="no_telepon" size="15"></td>
</tr>
<tr>
			<td>Nilai Tugas</td>
			<td><input type="text" name="nilai_tugas" size="10"></td>
		</tr>

		<tr>
			<td>Nilai Quis</td>
			<td><input type="text" name="nilai_quis" size="10"></td>
		</tr>

		<tr>
			<td>Nilai UTS</td>
			<td><input type="text" name="nilai_uts" size="10"></td>
		</tr>

		<tr>
			<td>Nilai UAS</td>
			<td><input type="text" name="nilai_uas" size="10"></td>
		</tr>

			<tr>
			<td>Total</td>
			<td><input type="text" name="total" size="10"></td>
		</tr>

		<tr>
			<td>Grade</td>
			<td><input type="text" name="grade" size="10"></td>
		</tr>
<tr>
<td><input value="Simpan" name="submit" type="submit" /></td>
</tr>
<tr>
<td><input value="ulangi" type="reset" /></td>
</tr>
<tr>
<td><input value="Kembali" type="button"  onClick="self.history.back()"></td>
</tr>
</table>
</form>
</body>
</html>