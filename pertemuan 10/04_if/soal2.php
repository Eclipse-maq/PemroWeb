<html>
<head>
    <title>Hitung Gaji Karyawan</title>
</head>
<body>
    <h1>Hitung Upah Mingguan Karyawan</h1>
    
    <form method="post" action="">
        Masukkan Jumlah Jam Kerja: <input type="text" name="jam_kerja">
        <input type="submit" name="submit" value="Hitung">
    </form>

    <?php
    // Cek apakah tombol sudah ditekan
    if (isset($_POST['submit'])) {
        
        $jam = $_POST['jam_kerja'];
        
        // Konstanta harga upah
        $upah_per_jam = 2000;
        $upah_lembur = 3000;
        $batas_normal = 48;
        $total_gaji = 0;

        // Logika Perhitungan
        if ($jam <= $batas_normal) {
            // Jika jam kerja normal (kurang dari atau sama dengan 48 jam)
            $total_gaji = $jam * $upah_per_jam;
        } 
        else {
            // Jika ada lembur (lebih dari 48 jam)
            $jam_lembur = $jam - $batas_normal; // Hitung sisa jam
            
            // Hitung gaji 48 jam pertama + gaji jam lembur
            $total_gaji = ($batas_normal * $upah_per_jam) + ($jam_lembur * $upah_lembur);
        }

        // Menampilkan Hasil
        echo "<hr>";
        echo "<h3>Hasil Perhitungan:</h3>";
        echo "Jam Kerja: " . $jam . " jam<br>";
        
        // number_format digunakan untuk memberi titik pemisah ribuan (format uang)
        echo "Total Upah: <b>Rp. " . number_format($total_gaji, 0, ',', '.') . ",-</b>";
    }
    ?>
</body>
</html>