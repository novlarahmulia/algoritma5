<?php
// Mengambil Tanggal dan Waktu Saat Ini
echo date("Y-m-d H:i:s");  // output contoh: 2023-03-15 14:00:00
echo "<br><hr>";
// Format Tanggal
echo date("l, d-m-Y"); // output contoh: Rabu, 15-03-2023
echo "<br><hr>";
// Mengatur Zona Waktu
date_default_timezone_set('Asia/Jakarta');
echo date("Y-m-d H:i:s"); // output akan sesuai dengan zona waktu Jakarta
echo "<br><hr>";
// Manipulasi Tanggal
echo date("Y-m-d", strtotime("+1 week")); // menambahkan satu minggu dari tanggal saat ini
echo "<br><hr>";
// Memeriksa Keabsahan Tanggal
var_dump(checkdate(2, 29, 2021)); // output: bool(false) karena tahun 2021 bukan tahun kabisat
echo "<br><hr>";
echo "<p><strong> by : novla rahmulia";