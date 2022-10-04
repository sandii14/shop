<?php
include('header.php') //menyertakan file header.php
?>

<head>
    <!-- Memanggil style tambah -->
    <link rel="stylesheet" href="../css/style-tambah.css">
</head>
<body>
    <section id="main"> <!-- section untuk tambah barang -->
        <h1>Tambah Barang</h1>
        <div class="container-form">
            <!-- Form untuk tambah barang -->
            <form action="proses/proses_tambah.php" method="GET" class="form-barang">
            <label for="id_barang">ID Barang :
                <input type="text" name="id_barang" id="id_barang" required>
            </label>
            <label for="nama_barang">Nama Barang :
                <input type="text" name="nama_barang" id="nama_barang" required>
            </label>
            <label for="image">Gambar :
                <input type="file" name="image" id="image" required>
            </label>
            <label for="stock">Stock :
                <input type="number" name="stock" id="stock" required>
            </label>
            <label for="harga">Harga :
                <input type="number" name="harga" id="harga" required>
            </label>
            <input type="submit" value="Input" name="input">
            <input type="reset" value="Reset" name="reset">
            </form>
        </div>

    </section>
</body>
<?php 
include('footer.php') //menyertakan file footer.php
?>