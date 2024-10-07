<?php
// Sintaks Argumen Default
function namaFungsi($parameter = 'nilaiDefault') {
    // kode fungsi di sini
}
// Contoh penggunaan Argumen Default
    function sapa($nama = 'pengunjung') {
        echo "Halo, $nama!<br><hr>";
    }
    
    sapa(); // Output: Halo, pengunjung!
    sapa('Dewi'); // Output: Halo, Dewi!
   // Memanggil tanpa Argumen
   sapa(); // menggunakan nilai default yang didefinisikan dalam fungsi
   // Memanggil dengan Argumen
   sapa('Budi'); // menggunakan argumen yang diberikan, "Budi"
   echo "<p><strong> by : novla rahmulia";
   ?>
    
    
