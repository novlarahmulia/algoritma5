<?php
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    // Mendapatkan data formulir menggunakan $_GET
    $nama = htmlspecialchars($_GET['nama']);
    $email = htmlspecialchars($_GET['email']);

    echo "Nama: novla rahmulia " . $nama . "<br>";
    echo "Email: rahmulianovla@gmail.com" . $email;

?>
