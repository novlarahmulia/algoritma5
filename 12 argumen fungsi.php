<?php
function sapa($nama) {
    echo "Halo, " . $nama . "!<br><hr>";
}

sapa("Novla");
// Mendefinisikan Parameter
function tambah($angka1, $angka2) {
    return $angka1 + $angka2;
}

echo tambah(5, 10); // Output: 15
// Tipe Parameter
function setNilai(int $nilai) {
    echo $nilai;
}

setNilai(10); // Output: 10

// Argumen Default
function salam($waktu = "pagi") {
    echo "<br><hr>Selamat $waktu!";
}

salam(); // Output: Selamat pagi!
salam("sore"); // Output: Selamat sore!
// Passing by Reference
function tambahSatu(&$nilai) {
    $nilai++;
}

$angka = 10;
tambahSatu($angka);
echo "<br><hr>";
echo $angka; // Output: 11
// Jumlah Argumen Dinamis
function jumlahkan() {
    $total = 0;
    $args = func_get_args();

    foreach ($args as $arg) {
        $total += $arg;
    }

    return $total;
}

echo jumlahkan(1, 2, 3, 4); // Output: 10
echo "<p><strong> by : novla rahmulia";
?>



