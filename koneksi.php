<?php

$hostname	= "localhost";
$username	= "root";
$password	= "";
$database	= "tokobuku";

$koneksi = mysqli_connect($hostname, $username, $password,$database) or die("cannot connect to db");

if (mysqli_connect_errno()){
	echo "Koneksi database gagal : " . mysqli_connect_error();
}	
?>