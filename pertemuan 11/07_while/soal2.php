<?php
$target = 25;
$jumlah_pasangan = 0;
for ($x = 1; $x <= ($target - 2); $x++) {
    $batas_y = $target - $x - 1;
    for ($y = 1; $y <= $batas_y; $y++) {
        $z = $target - $x - $y;
        if ($z >= 1) {
            echo "X = " . $x . ", Y = " . $y . ", Z = " . $z . "<p>";
            $jumlah_pasangan++;
        }
    }
}
?>