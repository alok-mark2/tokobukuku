<?php
include 'koneksi.php';

$id = $_POST['id'];
$namabuku = $_POST['namabuku'];
$kategoribuku = $_POST['kategoribuku'];
$penerbit = $_POST['penerbit'];
$harga = $_POST['harga'];
$diskon = $_POST['diskon'];
 
mysqli_query($koneksi,"INSERT INTO tblTokoBuku(ID,NamaBuku,KategoriBuku,Penerbit,Harga,Diskon) VALUES('$id','$namabuku','$kategoribuku','$penerbit','$harga','$diskon')");
 
header("location:index-admin.php?pesan=input");
?>