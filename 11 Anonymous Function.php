<?php
function nama_bulan($bulan, $callback) {
	$list_bulan = array (1 => 'Januari', 2 => 'Februari', 3 => 'Maret');
	$nama = $list_bulan[$bulan];
	
	if (is_callable($callback)) {
		return $callback($nama);
	}
	return $nama;
}

$bulan = nama_bulan(1, function($val) {
		return strtoupper($val);
	});
echo $bulan; // Hasil: januari
echo "<hr>";
$bulan = nama_bulan(2, function($val) {
    return strtoupper($val);
});
echo $bulan; // Hasil: februari
echo "<hr>";
$bulan = nama_bulan(3, function($val) {
    return strtoupper($val);
});
echo $bulan; // Hasil: maret
echo "<hr>";
echo "<p><strong> by : novlaa rahmulia";
?>
