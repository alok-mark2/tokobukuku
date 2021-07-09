<?php 
include 'koneksi.php';
$id = $_GET['id'];
mysqli_query($koneksi,"DELETE FROM tblTokoBuku WHERE id='$id'")or die(mysql_error());
 
header("location:index-admin.php?pesan=hapus");
?>