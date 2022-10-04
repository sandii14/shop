<?php
include('header.php') //menyertakan file header.php
?>

<head>
    <!-- Memanggil style tambah -->
    <link rel="stylesheet" href="../css/style-tambah.css">
</head>
<body>

<!-- Tag/code php untuk menerima edit berdasarkan id_barang -->
<?php
include "../koneksi.php"; //menghubungkan ke koneksi
$id_barang = $_GET['id_barang'];
$query_mysql = mysqli_query($koneksi, "SELECT * FROM tb_barang WHERE id_barang='$id_barang'")or die(mysqli_error($koneksi));
$nomor = 1;
while($data = mysqli_fetch_array($query_mysql)){
?>

    <!-- Section untuk edit barang -->
    <section id="main"> 
        <h1>Edit Barang</h1> <!-- Judul Section -->
        <div class="container-form">
            <!-- Form untuk edit barang -->
            <form action="proses/proses_edit.php" method="POST" class="form-barang"> 
            <label for="id_barang">ID_BARANG :
                <input value="<?= $data['id_barang'] ?>" type="text" name="id_barang" id="id_barang" readonly>
            </label>
            <label for="nama_barang">Nama Barang :
                <input value="<?= $data['nama_barang'] ?>" type="text" name="nama_barang" id="nama_barang" required>
            </label>
            <label for="image">Image :
                <input value="<?= $data['image'] ?>" type="file" name="image" id="image" required>
            </label>
            <label for="stock">Stock :
                <input value="<?= $data['stock'] ?>" type="number" name="stock" id="stock" required>
            </label>
            <label for="harga">Harga :
                <input value="<?= $data['harga'] ?>" type="number" name="harga" id="harga" required>
            </label>
            <input type="submit" value="edit" name="edit">
            </form>
            
        </div>

    </section>
    <!-- End section -->
    <?php }?>
</body>
<?php 
include('footer.php') //menyertakan file footer.php
?>