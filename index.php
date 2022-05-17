<html>
<head>
<title>Daftar Mahasiswa</title>
</head>
<body>
<?php
include "db.php";
?>
<table border="5">
<tr>
<th>NPM</th>
<th>Nama Mahasiswa</th>
<th>Alamat</th>
<th>Agama</th>
<th>No telepon</th>
<th>Nilai Tugas</th>
<th>Nilai Quis</th>
<th>Nilai UTS</th>
<th>Nilai UAS</th>
<th>Total</th>
<th>Grade</th>
<th colspan="3">Aksi</th>
</tr>
 

<?php 
										$i = 1; 
										$modal=mysqli_query($koneksi,"SELECT * FROM mhs");
										while($data=mysqli_fetch_assoc($modal)){
											?>
											
											
<tr>
<td><?php echo $data['nim']; ?></td>
<td><?php echo $data['nama']; ?></td>
<td><?php echo $data['alamat']; ?></td>
<td><?php echo $data['agama']; ?></td>
<td><?php echo $data['no_telepon']; ?></td>
<td><?php echo $data['nilai_tugas']; ?></td>
<td><?php echo $data['nilai_quis']; ?></td>
<td><?php echo $data['nilai_uts']; ?></td>
<td><?php echo $data['nilai_uas']; ?></td>
<td><?php echo $data['total']; ?></td>
<td><?php echo $data['grade']; ?></td>

<td><a href="edit.php?nim=<?php echo $data['nim']; ?>">Edit</a></td>
<td><a href="hapus_form.php?nim=<?php echo $data['nim']; ?>">Hapus</a></td>
</tr>
	<?php
											$i++;
										} 
										?>
</table>
<p align="left"><a href="tambah_data.php">Tambah Data</a></p>
</body>
</html>