<!DOCTYPE html>
<html>
    <head>
        <title>Menghitung Luas Lingkaran</title>
    </head>
    <body>
        <?php 
            // Konstanta untuk nilai judul
            define("Judul", "Hitung Luas Lingkaran");

            // Konstanta untuk nilai PHI
            define("PHI", 3.14);
            
            echo Judul;
            $r = 10;
            echo "<br> Jari-jari : $r<br>\n";
            $luas = PHI * $r * $r;
            echo "Luas Lingkaran = $luas";
            
        ?>
    </body>
</html>