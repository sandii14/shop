<?php 
include('header.php'); //menyertakan file header.php
?>



<head>
        <!-- Memanggil css ekternal style daftar -->
        <link rel="stylesheet" href="../css/style-daftar.css">
        <!-- Memanggil library animate on scroll -->
        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
</head>
<body>     
    <script>
        AOS.init(); //untuk menjalankan fungsi AOS
      </script>   

    <!-- section untuk bagian daftar product -->
    <section id="main">
         <!-- Judul section -->
        <h1 data-aos="zoom-in">Daftar Product</h1>
        <!-- Container -->
        <div class="container-table">
            <div class="table" > 
                <!-- Membuat table -->
                <table class="table-bordered" data-aos="flip-down" data-aos-duration="1000"> 
                    <!-- Baris pertama / Table header -->
                    <thead> 
                        <tr>  
                            <th>No</th> 
                            <th>Id Barang</th>
                            <th>Nama</th>
                            <th>Stock</th>
                            <th>Harga</th>
                            <th>Edit</th>
                            <th>Hapus</th>
                        </tr>
                    </thead>
                    
                    <!-- tag php untuk memanggil data dari database table tb_barang -->
                    <?php
                            include "../koneksi.php"; //menghubungkan ke koneksi.php
                            $no = 1;
                            $query = mysqli_query($koneksi, 'SELECT * FROM tb_barang');
                            while ($data = mysqli_fetch_array($query)) {
                            ?>
                                <tr>
                                    <!-- Isi Table data -->
                                    <td><?php echo $no++ ?></td>
                                    <td><?php echo $data['id_barang'] ?></td>
                                    <td><?php echo $data['nama_barang'] ?></td>
                                    <td><?php echo $data['stock'] ?></td>
                                    <td>Rp<?php echo number_format($data['harga'],0,',','.') ?></td>
                                    <td>
                                        <!-- Tombol edit berdasarkan id_barang -->
                                    <a href="edit.php?id_barang=<?php echo $data['id_barang']; ?>" class="btn btn-info">
                                        <i class="fa fa-pen fa-fw"></i> Edit 
                                    </a>
                                    </td>
                                    <td>
                                        <!-- Tombol hapus berdasarkan id_barang -->
                                        <a onclick="return confirm('Anda Yakin Untuk Menghapus Data?.')" href="proses/proses_hapus.php?id_barang=<?= $data['id_barang'] ?>" class="btn btn-danger">
                                            <i class="fa fa-trash fa-fw"></i> Hapus
                                        </a>
                                    </td>
                                </tr>
                        <?php } ?>


                </table>
                <!-- Tombol tambah -->
            <div class="tambah" data-aos="flip-up" data-aos-duration="1000">
            <a href="tambah.php">Tambah</a> 
            </div>
            </div>
        </div>
        <!-- End Container -->


    </section>
    <!-- End section -->
    
</body>

<?php 
include('footer.php') //Menyertakan file footer.php
?>
