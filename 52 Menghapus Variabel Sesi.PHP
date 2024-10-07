<?php
session_start();
// Menghapus variabel "namaPengguna" dari sesi
unset($_SESSION["namaPengguna"]);
// Menghancurkan seluruh sesii
session_destroy();

?>
