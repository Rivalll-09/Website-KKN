<?php
// koneksi database
include '../koneksi.php';

// menangkap data yang di kirim dari form
$nama = $_POST['nama_umkm'];
$alamat = $_POST['alamat'];
$deskripsi = $_POST['deskripsi'];
$harga_tiket = $_POST['harga_tiket'];
$latitude = $_POST['latitude'];
$longitude = $_POST['longitude'];

// menginput data ke database
mysqli_query($koneksi, "insert into umkm values('','$nama','$alamat','$deskripsi','$harga_tiket','$latitude','$longitude')");

// mengalihkan halaman kembali ke index.php
header("location:tampil_data.php");
