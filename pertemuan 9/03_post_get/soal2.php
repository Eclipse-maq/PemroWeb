<?php
$nama = htmlspecialchars($_GET['nama'] ?? 'Pengguna');
$tempat_lahir = htmlspecialchars($_GET['tempat_lahir'] ?? 'Data Kosong');
$tgl_lahir_raw = htmlspecialchars($_GET['tgl_lahir_lengkap'] ?? '');
$alamat = htmlspecialchars($_GET['alamat'] ?? 'Data Kosong');
$jenis_kelamin = htmlspecialchars($_GET['jenis_kelamin'] ?? 'Data Kosong');
$asal_sekolah = htmlspecialchars($_GET['asal_sekolah'] ?? 'Data Kosong');
$nilai_uan = htmlspecialchars($_GET['nilai_uan'] ?? 'Data Kosong');
$date_object = new DateTime($tgl_lahir_raw);
$tanggal_format_tampilan = $date_object->format('d-F-Y');
$pesan_utama = !empty($_GET)
    ? "<h1>Terimakasih sudah mengisi form pendaftaran.</h1>"
    : "<h1>Silakan isi form pendaftaran.</h1>";

echo $pesan_utama;
echo "<pre>";
echo "Nama Lengkap      : " . $nama . "\n";
echo "Tempat Lahir      : " . $tempat_lahir . "\n";
echo "Tanggal Lahir     : " . $tanggal_format_tampilan . "\n";
echo "Alamat Rumah      : " . $alamat . "\n";
echo "Jenis Kelamin     : " . $jenis_kelamin . "\n";
echo "Asal Sekolah      : " . $asal_sekolah . "\n";
echo "Nilai UAN         : " . $nilai_uan . "\n";
echo "</pre>";
?>