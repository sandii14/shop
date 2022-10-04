<?php

// memulai eksekusi sesi
session_start();
// mengkosongkan sesi
session_destroy();
// mengembalikan ke halaman login
header('Location:login.php');
