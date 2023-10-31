<?php 
$nama = $_POST["nama"];
$alamat = $_POST["alamat"];
$tempat_lahir = $_POST["tempat_lahir"];
$tanggal_lahir = $_POST["tanggal_lahir"];
$jenis_kelamin = $_POST["jenis_kelamin"];
$pendidikan = $_POST["pendidikan"];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Registrasi</title>
</head>
<body>
    <h1>Data Registrasi</h1>

    <table border="2" cellspacing="2" cellpading="0" width="600">
        <tr>
            <td>Nama</td>
            <td><?= $nama; ?></td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td><?= $alamat; ?></td>
        </tr>
        <tr>
            <td>Tempat Lahir</td>
            <td><?= $tempat_lahir; ?></td>
        </tr>
        <tr>
            <td>Tanggal Lahir</td>
            <td><?= $tanggal_lahir; ?></td>
        </tr>
        <tr>
            <td>Jenis Kelamin</td>
            <td><?= $jenis_kelamin; ?></td>
        </tr>
        <tr>
            <td>Pendidikan</td>
            <td><?= $pendidikan; ?></td>
        </tr>
    </table>
    <a href="tugas_06.php">Back To Home</a>
</body>
</html>