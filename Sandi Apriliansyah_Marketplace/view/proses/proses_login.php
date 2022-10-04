<?php
include "../../koneksi.php";

// Assign variable dari POST login.php
$username = $_POST['username'];
$password = $_POST['password'];

 // query untuk validasi
$query = mysqli_query($koneksi, "SELECT*FROM tb_user WHERE username='$username' AND password='$password'");

if (mysqli_num_rows($query)==0) {?>
<script>
    alert("Username dan Password Tidak Ditemukan.");
    window.location.assign("../login.php");
</script>
<?php
}else {
    session_start();
    $_SESSION['username'] = $username;
    $_SESSION['password'] = $password;

    header("Location:../daftar.php");
}