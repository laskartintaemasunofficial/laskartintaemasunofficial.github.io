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
$query =mysqli_query($koneksi,"update mhs set nama='$nama', alamat='$alamat', agama='$agama',no_telepon='$no_telepon',nilai_tugas='$nilai_tugas', nilai_quis='$nilai_quis', nilai_uts='$nilai_uts',nilai_uas='$nilai_uas',total='$total',grade='$grade' where nim='$nim'");
echo "Data Telah diupdate<br>
<a href=\"index.php\">Kembali</a>";
?>