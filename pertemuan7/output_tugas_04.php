<html>
    <head>
        <title>Hasil Hitung Rumus</title>
    </head>
    <body>
        <?php 
        $nilai1 = $_GET["nilai1"];
        $nilai2 = $_GET["nilai2"];
        $rumus = $_GET["rumus"];

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
        <h1>HASIL HITUNG RUMUS</h1>
        Nilai a adalah = <?php echo "$nilai1"; ?> <br>
        Nilai b adalah = <?php echo "$nilai2"; ?> <br>
        Rumus yang dipilih adalah = <?php echo "$rumus"; ?> <br>
        Hasil Perhitungan Rumus = <?php echo "$hasil"; ?> <br>
    </body>
</html>