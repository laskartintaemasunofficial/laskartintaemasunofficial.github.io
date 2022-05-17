<?php
include("db.php");
 
$nim = $_GET['nim'];
$sqledit=mysqli_query($koneksi,"SELECT * FROM mhs WHERE nim='$nim'");
$edit=mysqli_fetch_assoc($sqledit);
?>
<html>
<head><title>Edit Data</title></head>
<body>
<form name="form1" method="post" action="update.php">
<table>
<tr>
<td>NPM</td><td><input type="text" name="nim" value="<?php echo $edit['nim']; ?>" readonly></td></tr>
<tr><td>Nama</td><td><input type="text" name="nama" value="<?php echo $edit['nama']; ?>"></td></tr>
<tr><td>Alamat</td><td><input type="text" name="alamat" value="<?php echo $edit['alamat']; ?>" size="50"></td></tr>
<tr><td>Agama</td><td><input type="text" name="agama" value="<?php echo $edit['agama']; ?>"></td></tr>
<tr><td>No. tlpn</td><td><input type="text" name="no_telepon" value="<?php echo $edit['no_telepon']; ?>"></td></tr>
<tr>

<td>Nilai Tugas</td><td><input type="text" name="nilai_tugas" value="<?php echo $edit['nilai_tugas']; ?>" readonly></td></tr>
<tr><td>Nilai Quis</td><td><input type="text" name="nilai_quis" value="<?php echo $edit['nilai_quis']; ?>"></td></tr>
<tr><td>Nilai UTS</td><td><input type="text" name="nilai_uts" value="<?php echo $edit['nilai_uts']; ?>" size="50"></td></tr>
<tr><td>Nilai UAS</td><td><input type="text" name="nilai_uas" value="<?php echo $edit['nilai_uas']; ?>"></td></tr>
<tr><td>Total</td><td><input type="text" name="total" value="<?php echo $edit['total']; ?>"></td></tr>
<tr><td>Grade</td><td><input type="text" name="grade" value="<?php echo $edit['grade']; ?>"></td></tr>
<tr>	
<input value="Simpan" type="submit" name="submit"/>
<input type="button" value="Kembali" onClick="self.history.back()"></td></tr>
</table>
</form>
</body>
</html>