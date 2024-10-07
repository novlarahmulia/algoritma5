<?php
function report($bulan) {
	if ($bulan < 3) {
		$status = 'Report belum tersedia<hr>';
	} else {
		$status = '<br>Report sudah tersedia';
	}
	return $status;
}
echo report(2); // Hasil Report belum tersedia;
echo report(5); // Hasil Report belum tersedia;
echo "<hr>";
echo "<p><strong> by : novlaa rahmulia";