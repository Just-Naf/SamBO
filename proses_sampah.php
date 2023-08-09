<?php 
// koneksi database
include 'koneksi.php';

// menangkap data yang di kirim dari form
$nama_sampah = $_POST['nama_sampah'];
$harga_sampah = $_POST['harga_sampah'];

// menginput data ke database
mysqli_query($koneksi,"INSERT INTO sampah VALUES('','$nama_sampah','$harga_sampah')");

// mengalihkan halaman kembali ke index.php
header("location:data_harga.php");


?>