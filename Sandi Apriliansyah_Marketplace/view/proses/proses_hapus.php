<?php 
//menghubungkan ke koneksi/database
include '../../koneksi.php';
// Assign variable dari GET daftar.php
$id_barang = $_GET['id_barang'];
//Query untuk menghapus data berdasarkan id_barang dari table tb_barang
mysqli_query($koneksi, "DELETE FROM tb_barang WHERE id_barang='$id_barang'")or die(mysqli_error($koneksi));
 
header("location:../daftar.php"); //mengembalikan ke halaman daftar.php
?>