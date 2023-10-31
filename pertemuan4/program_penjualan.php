<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Program Penjualan</title>
    <style>
        body {
            font-family: Calibri;
            background-image: linear-gradient(to left, #86a8e7, #85a9ea, #84a9ed, #83aaf1, #82aaf4, #74b2f9, #65bafd, #56c2ff, #3cd2ff, #2fe1ff, #3feefb, #5ffbf1);
            
        }
    </style>
</head>
<body>
    <form method="post" action="proses1.php">
        <center>
            <h1>Program Penjualan</h1>
            <hr>
            <table>
                <tr><td>Nama Barang:<td><input name="namabarang" size="20">
                <tr><td>Harga:<td><input name="harga" size="10">
                <tr><td>Jumlah:<td><input name="jumlah" size="2">
            </table>
            <hr>
            <input type="submit" name="proses" id="proses" value="Proses">
            <input type="reset" name="reset" id="reset" value="Reset">
        </center>
    </form>
</body>
</html>