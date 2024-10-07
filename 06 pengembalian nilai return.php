<?php
// membuat fungsi
function hitungUmur($thn_lahir, $thn_sekarang){
  $umur = $thn_sekarang - $thn_lahir;
  return $umur;
}

echo "Umur kita adalah ". hitungUmur(2007, 2024) ." tahun<hr>";
echo "<p><strong> by : novla rahmulia";

?>

