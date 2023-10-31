<?php 
error_reporting(0);
echo "<center>";
echo "<font size=6>";
echo "WARTEG BAHARI";
echo "<hr>";
echo "<table>";
$nasiGoreng = $_POST["nasigoreng"];
if( $nasiGoreng ) {
    $hargaNasgor = 15000;
    echo "
    <tr>
        <td>Nasi Goreng <td>: <td>$hargaNasgor
    ";
}
$esJeruk = $_POST["esjeruk"];
if( $esJeruk ) {
    $hargaEsjeruk = 5000;
    echo "
    <tr>
        <td>Es Jeruk <td>: <td>$hargaEsjeruk
    ";
}

$soto = $_POST["soto"];
if( $soto ) {
    $hargaSoto = 10000;
    echo "
        <tr>
            <td>Soto <td>: <td>$hargaSoto
        </tr>
    ";
}

$tehManis = $_POST["tehmanis"];
if( $tehManis ) {
    $hargaTehManis = 4000;
    echo "
        <tr>
            <td>Teh Manis <td>: <td>$hargaTehManis
        </tr>
    ";  
}

$nasiRames = $_POST["nasirames"];
if( $nasiRames ) {
    $hargaNasiRames = 8000;
    echo "
        <tr>
            <td>Nasi Rames <td>: <td>$hargaNasiRames
        </tr>
    ";
}

$esKelapa = $_POST["eskelapa"];
if( $esKelapa ) {
    $hargaEsKelapa = 6000;
    echo "
        <tr>
            <td>Es Kelapa <td>: <td>$hargaEsKelapa
        </tr>
    ";
}

?>