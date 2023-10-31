<?php 
// membuat variabel
$teks1 = "Menghitung ";
$teks2 = "Luas Lingkaran";
$teks3 = "Jari-jari";
$jari_jari = 10;
$phi = 3.14;
$luas_lingkaran = $phi * $jari_jari * $jari_jari;

// menampilkan ke halaman web
echo "
    $teks1 $teks2 <br>
    $teks3 = $jari_jari <br>
    $teks2 = $luas_lingkaran cm<sup>2<sup>
";

?>