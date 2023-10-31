<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Program Penjualan</title>
    <style>
        body {
            background-image: linear-gradient(to left, #86a8e7, #85a9ea, #84a9ed, #83aaf1, #82aaf4, #74b2f9, #65bafd, #56c2ff, #3cd2ff, #2fe1ff, #3feefb, #5ffbf1);
        }
    </style>
</head>
<body>
    
    <?php 
    echo "<center>";
    echo "<h1>";
    echo "Program Penjualan ";
    echo "<hr>";
    echo "<table>";
    $nama_barang = $_POST["namabarang"];
    $harga = $_POST["harga"];
    $jumlah = $_POST["jumlah"];
    $total = $harga * $jumlah;
    echo "<tr><td>Nama Barang<td>:$nama_barang";
    echo "<tr><td>Harga<td>:$harga";
    echo "<tr><td>Jumlah<td>:$jumlah";
    echo "<tr><td colspan = 3 ><hr>";
    echo "<tr><td>Total Harga<td>:$total";

    ?>
</body>
</html>