<?php
$jumlahUang = 1575250;

// Hitung jumlah masing-masing pecahan
$a = $jumlahUang / 100000;
$jumlahUang %= 100000;

$b = $jumlahUang / 50000;
$jumlahUang %= 50000;

$c = $jumlahUang / 20000;
$jumlahUang %= 20000;

$d = $jumlahUang / 5000;
$jumlahUang %= 5000;

$e = $jumlahUang / 100;
$jumlahUang %= 100;

$f = $jumlahUang / 50;

// Tampilkan hasil
echo "Jumlah Rp. 100.000 : " . $a . "<br />";
echo "Jumlah Rp. 50.000 : " . $b . "<br />";
echo "Jumlah Rp. 20.000 : " . $c . "<br />";
echo "Jumlah Rp. 5.000 : " . $d . "<br />";
echo "Jumlah Rp. 100 : " . $e . "<br />";
echo "Jumlah Rp. 50 : " . $f . "<br />";
?>