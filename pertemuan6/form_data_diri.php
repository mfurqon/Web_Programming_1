<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Masukkan Data</title>
    <style>
        pre {
            font-size: 20px;
        }
    </style>
</head>
<body>
    <h1>Masukkan Identitas Anda</h1>
    <form method="post" action="<?= $_SERVER["PHP_SELF"]; ?>">
        <pre>
Isikan Nama       : <input type="text" name="nama">
Isikan No Telepon : <input type="text" name="telp">
Isikan Alamat     : <textarea name="alamat" cols="40" rows="5"></textarea> 
<input type="submit" value="Tampil"><input type="reset" value="Batal">
        </pre>
    </form>

    <?php 
    $nama = $_POST["nama"];
    $telp = $_POST["telp"];
    $alamat = $_POST["alamat"];

    if( !empty($nama) ) {
        echo "<pre>Nama         : $nama";
    }
    if( !empty($telp) ) {
        echo "<pre>No. Telepon  : $telp";
    }
    if( !empty($alamat) ) {
        echo "<pre>Alamat       : $alamat";
    }
    
    ?>
</body>
</html>