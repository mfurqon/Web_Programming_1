<!-- Written by Muhammad Furqon Prasetyo -->
<!DOCTYPE html>
<html lang="in">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Hitung Rumus</title>
    <style>
        body {
            margin-top: 100px;
            margin-bottom: 100px;
            background-color: #292828;
            color: #ffffff;
        }
        div.content {
            line-height: 30px;
            width: 500px;
            margin: 0 auto;
            padding: 30px;
            border-top: 10px solid orange;
            border-radius: 10px;
            text-align: center;
            background-color: #333;
        }
    </style>
</head>
<body>
    <?php 
    $nilai1 = $_POST["nilai1"];
    $nilai2 = $_POST["nilai2"];
    $rumus = $_POST["rumus"];

    if( empty($nilai1) && empty($nilai2)) {
        $nilai1 = 0;
        $nilai2 = 0;
        $rumus = "Kosong";
        $hasil = 0;
    }
    elseif( isset($nilai1) && isset($nilai2) ) {
        if( $rumus == "Segitiga" ) {
            $hasil = (1/2 * ($nilai1 * $nilai2));
        }
        elseif( $rumus == "Persegi Panjang" ) {
            $hasil = ($nilai1 * $nilai2);
        }
    }
    ?>
    <div class="content">
        <h1>HASIL HITUNG RUMUS</h1>
        Nilai a adalah = <?php echo "$nilai1"; ?> <br>
        Nilai b adalah = <?php echo "$nilai2"; ?> <br>
        Rumus yang dipilih adalah = <?php echo "$rumus"; ?> <br>
        Hasil Perhitungan Rumus = <?php echo "$hasil"; ?> <br>
    </div>
</body>
</html>