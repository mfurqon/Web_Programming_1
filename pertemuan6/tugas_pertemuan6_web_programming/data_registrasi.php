<!-- Tugas Web Programming Pertemuan 6 -->
<!-- Written by Muhammad Furqon Prasetyo -->

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
    <style>
        body {
            width: 1000;
            margin: 0 auto;
            background-color: aliceblue;
        }
        div.content {
            padding: 30px;
            width: 700px;
            height: 500px;
            margin: 0 auto;
            margin-top: 70px;
            margin-bottom: 70px;
            text-align: center;
            background-color: beige;
            border: 1px solid grey;
            border-radius: 30px;
        }
        table {
            width: 550px;
            margin: 0 auto;
            margin-top: 70px;
            margin-bottom: 40px;
            border-spacing: 4px;
            padding: 10px;
            text-align: justify;
            background-color: azure;
            border: 6px solid white;
            border-radius: 20px;
        }
        td {
            padding: 10px;
        }
        tr:hover {
            background-color: bisque;
        }
        a {
            text-decoration: none;
        }
        a:hover {
            color: blue;
        }

    </style>
</head>
<body>
    <div class="content">
        <h1>Data Registrasi</h1>
        <table>
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
        <a href="form_registrasi.php">Back To Home</a>
    </div>
</body>
</html>