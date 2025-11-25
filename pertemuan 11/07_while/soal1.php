<?php
$saldo = 1000000; 
$waktu_bulan = 6; 

$batas_saldo_tinggi = 1100000;      
$biaya_admin_bulanan = 9000;        
$bunga_rendah_tahunan = 0.03;      
$bunga_tinggi_tahunan = 0.04;       

$bunga_rendah_bulanan = $bunga_rendah_tahunan / 12;
$bunga_tinggi_bulanan = $bunga_tinggi_tahunan / 12;

echo "Perhitungan Saldo <p>";
echo "Saldo Awal: Rp " . number_format($saldo) . "<p>";
echo "Waktu: " . $waktu_bulan . " Bulan <p>";

for ($i = 1; $i <= $waktu_bulan; $i++) {
    if ($saldo < $batas_saldo_tinggi) {
        $bunga_saat_ini = $bunga_rendah_bulanan;
    } else {
        $bunga_saat_ini = $bunga_tinggi_bulanan;  
    }
    $tambahan_bunga = $saldo * $bunga_saat_ini;
    $saldo = $saldo + $tambahan_bunga - $biaya_admin_bulanan;
}

echo "Saldo Akhir setelah $waktu_bulan Bulan adalah: <p>";
echo "Rp " . number_format(round($saldo)) . "<p>";
?>