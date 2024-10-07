<?php
function cekUmur($umur) {
    if ($umur < 17) {
        return "Maaf, kamu belum cukup umur.";
    }
    return "Selamat, kamu boleh masuk.";
}

echo cekUmur(17); // Output: Maaf, kamu belum cukup umur.
echo "<p><strong> by : novlaa rahmulia";
?>
