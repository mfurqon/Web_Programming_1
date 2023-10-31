<?php 
// membuat variabel
$teks1 = "Menghitung Luas dan Keliling ";
$teks2 = "Persegi Panjang ";
$lebar = 4;
$panjang = 6;
$keliling = 2 * ($panjang + $lebar);
$luas = $panjang * $lebar;

// menampilkan ke halaman web
echo "
    $teks1 $teks2 <br>
    Lebar = $lebar <br>
    Panjang = $panjang <br>
    Keliling = $keliling <br>
    Luas $teks2 = $luas cm<sup>2<sup>
";

?>