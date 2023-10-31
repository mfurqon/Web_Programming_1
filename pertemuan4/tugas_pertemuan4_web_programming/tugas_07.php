<!-- Tugas 1 Pertemuan 4 Web Programming -->
<?php 
// variabel untuk angka
$bil1 = 3;
$bil2 = 4;
$bil3 = 5;
$bil4 = 6;

// variabel untuk operator perbandingan
$equal1 = $bil1 == $bil1;
$equal2 = $bil1 == $bil2;
$not_equal1 = $bil1 != $bil2;
$not_equal2 = $bil2 != $bil2;
$greater_than1 = $bil3 > $bil2;
$greater_than2 = $bil2 > $bil3;
$greater_equal1 = $bil4 >= $bil4;
$greater_equal2 = $bil3 >= $bil4;
$less_than1 = $bil3 < $bil4;
$less_than2 = $bil4 < $bil3;
$less_equal1 = $bil3 <= $bil3;
$less_equal2 = $bil4 <= $bil3;

// menampilkan ke halaman web
echo "
    $bil1 == $bil1 : $equal1 <br>
    $bil1 == $bil2 : $equal2 <br>
    $bil1 != $bil2 : $not_equal1 <br>
    $bil2 != $bil2 : $not_equal2 <br>
    $bil3 > $bil2 : $greater_than1 <br>
    $bil2 > $bil3 : $greater_than2 <br>
    $bil4 >= $bil4 : $greater_equal1 <br>
    $bil3 >= $bil4 : $greater_equal2 <br>
    $bil3 < $bil4 : $less_than1 <br>
    $bil4 < $bil3 : $less_than2 <br>
    $bil3 <= $bil3 : $less_equal1 <br>
    $bil4 <= $bil3 : $less_equal2 <br>
";

?>