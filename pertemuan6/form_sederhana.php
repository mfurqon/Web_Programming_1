<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Membuat Form Sederhana</title>
</head>
<body>
    <form action="">
        <div>
            <label for="nama">Nama</label><br>
            <input type="text" name="nama" placeholder="Masukkan nama">
        </div>
        <div>
            <label for="alamat">Alamat</label><br>
            <input type="text" name="alamat" placeholder="Masukkan alamat">
        </div>
        <div>
            <button type="submit" name="submit">Submit</button>
        </div>
    </form>

    <?php 
    $nama = @$_GET["nama"];
    $alamat = @$_GET["alamat"];

    if( $nama ) {
        echo "<strong>Nama</strong> {$nama} <br>";
    }

    if( $alamat ) {
        echo "<strong>Alamat</strong> {$alamat} <br>";
    }

    ?>
</body>
</html>