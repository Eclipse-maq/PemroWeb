<html>
<head>
    <title>Hitung Gaji Berdasarkan Golongan</title>
</head>
<body>
    <h1>Hitung Upah Mingguan (Per Golongan)</h1>
    
    <form method="post" action="">
        Jumlah Jam Kerja: <input type="text" name="jam_kerja"><br><br>
        
        Pilih Golongan: 
        <select name="golongan">
            <option value="A">Golongan A (Rp. 4.000/jam)</option>
            <option value="B">Golongan B (Rp. 5.000/jam)</option>
            <option value="C">Golongan C (Rp. 6.000/jam)</option>
            <option value="D">Golongan D (Rp. 7.500/jam)</option>
        </select>
        <br><br>
        
        <input type="submit" name="submit" value="Hitung Gaji">
    </form>

    <?php
    // Cek apakah tombol sudah ditekan
    if (isset($_POST['submit'])) {
        
        $jam = $_POST['jam_kerja'];
        $golongan = $_POST['golongan'];
        
        // Tentukan upah per jam berdasarkan golongan
        // Kita pakai switch case agar lebih rapi daripada if-else panjang
        switch ($golongan) {
            case 'A':
                $upah_per_jam = 4000;
                break;
            case 'B':
                $upah_per_jam = 5000;
                break;
            case 'C':
                $upah_per_jam = 6000;
                break;
            case 'D':
                $upah_per_jam = 7500;
                break;
            default:
                $upah_per_jam = 0;
        }

        $upah_lembur = 3000; // Sesuai soal: konstan Rp 3.000 untuk semua golongan
        $batas_normal = 48;
        $total_gaji = 0;

        // Logika Perhitungan (Sama seperti No. 2)
        if ($jam <= $batas_normal) {
            // Tidak lembur
            $total_gaji = $jam * $upah_per_jam;
        } 
        else {
            // Ada lembur
            $jam_lembur = $jam - $batas_normal;
            
            // Gaji = (48 jam x upah golongan) + (sisa jam x 3.000)
            $total_gaji = ($batas_normal * $upah_per_jam) + ($jam_lembur * $upah_lembur);
        }

        // Menampilkan Hasil
        echo "<hr>";
        echo "<h3>Hasil Perhitungan:</h3>";
        echo "Golongan: <b>" . $golongan . "</b> (Upah: Rp. " . number_format($upah_per_jam) . "/jam)<br>";
        echo "Jam Kerja: " . $jam . " jam<br>";
        
        if ($jam > $batas_normal) {
            echo "<i>(Termasuk lembur: " . ($jam - $batas_normal) . " jam)</i><br>";
        }

        echo "Total Upah: <b>Rp. " . number_format($total_gaji, 0, ',', '.') . ",-</b>";
    }
    ?>
</body>
</html>