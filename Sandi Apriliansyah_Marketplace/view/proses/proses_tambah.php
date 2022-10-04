<?php 
include "../../koneksi.php";

 // Assign variable dari GET tambah.php
 $id_barang = $_GET['id_barang'];
 $nama_barang = $_GET['nama_barang'];
 $image = $_GET['image'];
 $stock = $_GET['stock'];
 $harga = $_GET['harga'];
 


 // Query Input ke table tb_barang
 $sql = "INSERT INTO tb_barang VALUES(
     '{$id_barang}',
     '{$nama_barang}',
     '{$image}',
     '{$stock}',
     '{$harga}');";
 // Jalankan Query
  mysqli_query($koneksi,$sql);

  header("location:../daftar.php");
?>
