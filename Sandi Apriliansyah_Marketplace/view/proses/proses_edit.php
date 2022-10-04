<?php 
 
//menghubungkan ke koneksi/database
include '../../koneksi.php';

// Assign variable dari POST edit.php
$id_barang = $_POST['id_barang'];
$nama_barang = $_POST['nama_barang'];
$image = $_POST['image'];
$stock = $_POST['stock'];
$harga = $_POST['harga'];
 
//query update data dari table barang
mysqli_query($koneksi, "UPDATE tb_barang SET nama_barang='$nama_barang',image='$image', stock='$stock', harga='$harga' WHERE id_barang='$id_barang'");
 
//mengembalikan ke halaman daftar.php
header("location:../daftar.php");
?>