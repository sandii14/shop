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
    <!-- Memanggil style index -->
    <link rel="stylesheet" href="../css/style-index.css">

    <!-- Memanggil js animate on scroll -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
</head>

<body>
    <script>
        AOS.init(); //untuk menjalankan fungsi AOS
    </script>    

<!-- section untuk bagian category -->
<section id="main"> 
                <h1 data-aos="zoom-in">Category</h1> <!-- Judul section -->

                <!-- content -->
                <div class="content"> 
                    <!-- category gitar -->
                    <div class="gitar" data-aos="fade-up-right" data-aos-duration="1300">
                        <article>
                            <figure>
                                <a href="gitar.php">
                                <img src="../img/kategori/gitar.jpg" alt="gitar" style="width: 300px; height: 300px;" />
                            </a>
                                
                            </figure>
                            
                        </article>    
                    </div>
                    <!-- category mic -->
                    <div class="mic" data-aos="fade-up" data-aos-duration="1000">
                        <article>
                            <figure>
                                <a href="mic.php">
                                <img src="../img/kategori/mic.jpg" alt="mic" style="width: 300px; height: 300px;" />
                            </a>
                            </figure>
                            
                        </article>    
                    </div>

                    <!-- category amps gitar -->
                    <div class="gitar_amps" data-aos="fade-up-left" data-aos-duration="1300">
                        <article>
                            <figure>
                                <a href="amps.php">
                                <img src="../img/kategori/gitar-amps.jpg" alt="amps-gitar" style="width: 300px; height: 300px;" />
                                </a>
                            </figure>
                            
                        </article>    
                    </div>
                    
                    
                </div>
                <!-- End content -->
            </section>
    <!-- End Section -->
            

<?php 
include('footer.php') //Menyertakan file footer.php
?>

</body>


</html>