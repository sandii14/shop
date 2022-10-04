<?php 
include('header.php'); //menyertakan file header.php
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Memanggil css eksternal -->
    <link rel="stylesheet" href="../css/style-gitar.css">
    <!-- Memanggil library animate on scroll -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
</head>
<body>
    
    <script>
            AOS.init(); //menjalankan fungsi AOS
    </script>   

    <!-- Section -->
    <section id="main">
        <!-- Judul Section -->
        <h1 data-aos="zoom-in">Amps Guitar</h1>

        <!-- Content -->
        <div class="content">
            <!-- Code php menampilkan tb_barang like amps-->
             <?php
                include "../koneksi.php";
                $no = 1;
                 $query = mysqli_query($koneksi, "SELECT * FROM `tb_barang` WHERE id_barang LIKE '%amps%'" );    
                while ($data = mysqli_fetch_array($query)) {
            ?>
                <div class="gitar" data-aos="fade-up" data-aos-offset="300" data-aos-easing="ease-in-sine" data-aos-duration="1400">
                    <article>
                        <figure>
                            <a href="#">
                                <?php echo "<img src='../img/kategori/amps/$data[image]' width='300' height='300' />";?>
                                <figcaption><?php echo $data['nama_barang'] ?></figcaption>
                                <figcaption>Rp<?php echo number_format($data['harga'],0,',','.') ?></figcaption>
                             </a>
                        </figure>      
                    </article>    
                </div>
            <?php }?>
        </div>
        <!-- End content -->
    </section>
    <!-- End Section -->
            
<?php 
include('footer.php')
?>
</body>


</html>