<html>
<head>
    <title>Cek Jumlah Hari (Current Month)</title>
</head>
<body>
    <h1>Informasi Bulan Saat Ini</h1>

    <?php
    // 1. Membaca Bulan dan Tahun saat ini dari sistem
    // 'n' menghasilkan angka bulan (1-12)
    // 'Y' menghasilkan tahun 4 digit (misal: 2025)
    $bulan = date('n'); 
    $tahun = date('Y');

    // Variabel untuk nama bulan (opsional, agar tampilan lebih bagus)
    $namaBulan = date('F'); // 'F' menghasilkan nama bulan lengkap (January, February, dst)

    // 2. Menggunakan SWITCH untuk menentukan jumlah hari
    switch ($bulan) {
        // Bulan-bulan yang memiliki 31 hari
        case 1: // Januari
        case 3: // Maret
        case 5: // Mei
        case 7: // Juli
        case 8: // Agustus
        case 10: // Oktober
        case 12: // Desember
            $jumlahHari = 31;
            break;

        // Bulan-bulan yang memiliki 30 hari
        case 4: // April
        case 6: // Juni
        case 9: // September
        case 11: // November
            $jumlahHari = 30;
            break;

        // Khusus Februari (Cek Tahun Kabisat)
        case 2:
            // Logika Kabisat: Habis dibagi 400, ATAU (habis dibagi 4 DAN tidak habis dibagi 100)
            if (($tahun % 400 == 0) || ($tahun % 4 == 0 && $tahun % 100 != 0)) {
                $jumlahHari = 29; // Tahun Kabisat
            } else {
                $jumlahHari = 28; // Tahun Biasa
            }
            break;

        default:
            $jumlahHari = 0;
            break;
    }

    // 3. Menampilkan Hasil
    echo "<p>Sekarang adalah bulan: <b>" . $namaBulan . " " . $tahun . "</b></p>";
    echo "<p>Jumlah hari dalam bulan ini adalah: <b>" . $jumlahHari . " hari</b>.</p>";
    ?>

</body>
</html>