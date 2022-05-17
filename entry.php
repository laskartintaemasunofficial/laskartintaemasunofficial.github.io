<?php
include("db.php");
$nim = $_POST['nim'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$agama = $_POST['agama'];
$no_telepon = $_POST['no_telepon'];
$nilai_tugas=$_POST['nilai_tugas'];
$nilai_quis=$_POST['nilai_quis'];
$nilai_uts=$_POST['nilai_uts'];
$nilai_uas=$_POST['nilai_uas'];
$total=$_POST['total'];
$grade=$_POST['grade'];

	$nilai_tugas = $nilai_tugas;
	$nilai_quis = $nilai_quis ;
	$nilai_uts = $nilai_uts ;
	$nilai_uas = $nilai_uas ;

	$total = ($nilai_tugas + $nilai_quis + $nilai_uts + $nilai_uas)/4;

	if ($total>=80) {
		$grade="A";
	}elseif ($total>=70) {
		$grade="B";
	}elseif ($total>=60) {
		$grade="C";
	}elseif ($total>=50) {
		$grade="D";
	}else{
		$grade="E";
	}


$query = mysqli_query($koneksi,"insert into mhs values  ('$nim','$nama','$alamat','$agama','$no_telepon','$nilai_tugas','$nilai_quis','$nilai_uts','$nilai_uas','$total','$grade')");
echo "Data Telah disimpan<br>
<a href=\"index.php\">Kembali</a>";
?>