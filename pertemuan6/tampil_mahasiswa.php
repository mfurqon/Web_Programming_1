<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa</title>
</head>
<body>
    <?php
    $nama = $_POST["nama"];
    $alamat = $_POST["alamat"];
    $jeniskel = $_POST["jeniskel"];
    $pekerjaan = $_POST["pekerjaan"];
    $hobi1 = $_POST["hobi1"];
    $hobi2 = $_POST["hobi2"];
    $hobi3 = $_POST["hobi3"];    
    ?>

    <table border="1" bgcolor="Cyan">
        <tr>
            <td colspan="2" align="center"><b>Data Mahasiswa</b></td>
        </tr>
        <tr>
            <td>Nama</td><td><?= $nama; ?></td>
        </tr>
        <tr>
            <td>Alamat</td><td><?= $alamat; ?></td>
        </tr>
        <tr>
            <td>Jenis Kelamin</td><td><?= $jeniskel; ?></td>
        </tr>
        <tr>
            <td>Pekerjaan</td><td><?= $pekerjaan; ?></td>
        </tr>
        <tr>
            <td>Hobi</td><td><?php echo $hobi1,",", $hobi2,",",$hobi3; ?></td>
        </tr>
    </table>
    <a href="form_input_mahasiswa.php">INPUT DATA LAGI</a>
</body>
</html>