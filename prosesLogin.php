<?php

session_start();
include ('koneksi.php');
												
$username = $_POST['username'];
$password = $_POST['password'];
										
$login = mysqli_query($koneksi,"select * from tbladmin where username='$username' and password='$password'");
$cek = mysqli_num_rows($login);
 
	if($cek > 0){
		$_SESSION['username'] = $username;
		$_SESSION['status'] = "login";
		header("location:index-admin.php");
	}else{
		header("location:login.php?pesan=gagal");	
	}
?>	