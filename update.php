<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form
$id = $_POST['ID'];
$harga = $_POST['Harga'];
$diskon = $_POST['Diskon'];
 
// update data ke database
mysqli_query($koneksi,"UPDATE tbltokobuku SET Harga='$harga',Diskon='$diskon' WHERE ID=1");
 
// mengalihkan halaman kembali ke index.php
header("location:index-admin.php");
 
?>