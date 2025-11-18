<html>
<head>
    <title>Cek Tahun Kabisat</title>
</head>
<body>
    <h1>Cek Tahun Kabisat</h1>
    
    <form method="post" action="">
        Masukkan Tahun: <input type="text" name="tahun">
        <input type="submit" name="submit" value="Cek">
    </form>

    <?php
    // Mengecek apakah tombol submit sudah ditekan
    if (isset($_POST['submit'])) {
        
        $tahun = $_POST['tahun'];

        // Logika menentukan tahun kabisat
        if ($tahun % 400 == 0) {
            $status = "Tahun Kabisat";
        }
        else if ($tahun % 100 == 0) {
            $status = "Bukan Tahun Kabisat";
        }
        else if ($tahun % 4 == 0) {
            $status = "Tahun Kabisat";
        }
        else {
            $status = "Bukan Tahun Kabisat";
        }

        // Menampilkan hasil di bawah form
        echo "<hr>"; // Garis pembatas
        echo "<p>Hasil: Tahun <b>$tahun</b> adalah <b>$status</b>.</p>";
    }
    ?>
</body>
</html>