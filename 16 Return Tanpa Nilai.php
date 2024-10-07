<?php
function salam($jam) {
    if ($jam < 0 || $jam > 24) {
        return; // Keluar dari fungsi jika input jam tidak valid
    }
    if ($jam < 10) {
        return "Selamat pagi!";
    } else {
        return "Selamat siang!";
    }
}

echo salam(25); // Tidak ada output
echo salam(10); // Output: Selamat pagi!
