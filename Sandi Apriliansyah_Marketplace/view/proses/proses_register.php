<?php
$username = $_POST['username'];
$password = $_POST['password'];

include "../../koneksi.php";
$query_validasi = "SELECT * FROM tb_user WHERE username='$username'";
$query = mysqli_query($koneksi, $query_validasi);

if (mysqli_num_rows($query) == 0) {
    $query_register = mysqli_query($koneksi, "INSERT INTO tb_user(username,password) VALUES ('$username','$password')");
    if ($query) { ?>
        <script>
            alert("Registrasi Berhasil Dilakukan.");
            window.location.assign("../login.php");
        </script>
    <?php }
} else { ?>
    <script>
        alert("Username Yang Anda Masukkan Sudah Tersedia");
        window.location.assign("../register.php");
    </script>
<?php }
?>