<?php
include("db.php");
$modal=mysqli_query($koneksi,"DELETE from mhs WHERE nim='$_GET[nim]'");
echo"Data Telah dihapus<br>
<a href=\"index.php\">Kembali</a>";
?>