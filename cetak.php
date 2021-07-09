<?php
//call the FPDF library
require('assets/fpdf/fpdf.php');
include('koneksi.php');

$id = $_GET['id'];
$data = mysqli_query($koneksi,"select * FROM tblTokoBuku WHERE ID='$id'");
$cetak = mysqli_fetch_array($data);

$namabuku = $cetak['NamaBuku'];
$kategori = $cetak['KategoriBuku'];
$penerbit = $cetak['Penerbit'];
$harga = $cetak['Harga'];
$diskon = $cetak['Diskon'];

//A4 width : 219mm
//default margin : 10mm each side
//writable horizontal : 219-(10*2)=189mm

//create pdf object
$pdf = new FPDF('P','mm','A4');
$pdf->SetMargins(5,5,5);
$pdf->SetAutoPageBreak(true,5);
//adding page
$pdf->AddPage('P','A4');
$pdf->SetFont('Arial','B',14);

$pdf->Cell(170 ,5,'PTB',0,0);
$pdf->Cell(59 ,5,'INVOICE',0,1);//end of line

$pdf->SetFont('Arial','',12);
$pdf->Cell(130 ,5,'Pendataan Toko Buku',0,0);
$pdf->Cell(59 ,5,'',0,1);//end of line

//buat dummy cell untuk memberi jarak vertikal
$pdf->Cell(189 ,10,'',0,1);//end of line

//alamat billing 
$pdf->Cell(100 ,20,'Data Buku',0,1);//end of line

//tambah dummy cell di awal untuk indentasi
$pdf->Cell(10 ,10,'',0,0);
$pdf->Cell(40 ,5,'Nama Buku',0,0);
$pdf->Cell(10 ,5,':',0,0);
$pdf->Cell(90 ,5,$namabuku,1,1);

$pdf->Cell(10 ,5,'',0,0);
$pdf->Cell(40 ,5,'Kategori Buku',0,0);
$pdf->Cell(10 ,5,':',0,0);
$pdf->Cell(90 ,5,$kategori,1,1);


$pdf->Cell(10 ,5,'',0,0);
$pdf->Cell(40 ,5,'Penerbit',0,0);
$pdf->Cell(10 ,5,':',0,0);
$pdf->Cell(90 ,5,$penerbit,1,1);

$pdf->Cell(10 ,5,'',0,0);
$pdf->Cell(40 ,5,'Harga',0,0);
$pdf->Cell(10 ,5,':',0,0);
$pdf->Cell(90 ,5,$harga,1,1);

$pdf->Cell(10 ,5,'',0,0);
$pdf->Cell(40 ,5,'Diskon',0,0);
$pdf->Cell(10 ,5,':',0,0);
$pdf->Cell(90 ,5,$diskon,1,1);
//output the result
$pdf->Output();
?>