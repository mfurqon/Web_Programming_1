<html>
    <head>
        <title>Belajar PHP IF/ELSE</title>
    </head>
    <body>
        <?php 
        // Kita tambahkan variable uang dan harga nasi goreng dulu.

        $uang = 9000;
        $harga = 10000;


        echo "<h1>Belajar PHP (IF/ELSE)</h1>";
        echo "Saya : Saya mau beli, uang saya cuman ada Rp $uang. Apa bisa?";

        if( $uang < $harga ) {
            $kurang = $harga - $uang;
            echo "<br>Om Nasi Goreng : Ga bisa! Uang anda kurang <b>Rp $kurang</b>!";
        }
        else {
            echo "<br>Om Nasi Goreng : Bisa kok!";
        }
        
        ?>
    </body>
</html>