<?php
$saldo_awal = (int)$_POST['saldo_awal'];
$bunga_persen = (int)$_POST['bunga'];
$lama_bulan = (int)$_POST['lama_bulan'];
$bunga_desimal = $bunga_persen / 100;
$total_bunga = $saldo_awal * $bunga_desimal * $lama_bulan;
$saldo_akhir = $saldo_awal + $total_bunga;

echo "<h2>Hasil Perhitungan Saldo Akhir</h2>";
echo "<table>";
echo "<tr><td>Saldo Awal</td><td>:</td><td>Rp. " . number_format($saldo_awal, 2, ',', '.') . "</td></tr>";
echo "<tr><td>Bunga Perbulan</td><td>:</td><td>" . $bunga_persen . "%</td></tr>";
echo "<tr><td>Lama Menabung</td><td>:</td><td>" . $lama_bulan . " Bulan</td></tr>";
echo "<tr><td>Total Bunga Dihasilkan</td><td>:</td><td>Rp. " . number_format($total_bunga, 2, ',', '.') . "</td></tr>";
echo "<tr><td><strong>Saldo Akhir</strong></td><td>:</td><td><strong>Rp. " . number_format($saldo_akhir, 2, ',', '.') . "</strong></td></tr>";
echo "</table>";
?>