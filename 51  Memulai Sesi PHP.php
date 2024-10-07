<?php
// Memulai sesii
session_start();
// Menyimpan data ke sesi
$_SESSION["namaPengguna"] = "NOVLA";
// Mengakses data dari sesi
echo 'Selamat Datang, ' . $_SESSION["namaPengguna"] . '!';
?>


