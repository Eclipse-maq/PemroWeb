<?php
$bilangan1 = $_POST['bil1'];
$bilangan2 = $_POST['bil2'];
$jumlah = $bilangan1 + $bilangan2;
?>
<html>
    <head>
        <title>contoh rewuest post</title>
    </head>
    <body>
        <h1>input dua bilangan</h1>
        <?php
        echo "<p>anda telah memasukkan bilangan pertama = ". $bilangan1. "</p>";
        echo "<p>anda telah memasukkan bilangan kedua = ". $bilangan2. "</p>";
        echo "<p>hasil penjumlahan = ". $jumlah. "</p>";
        ?>
    </body>
</html>