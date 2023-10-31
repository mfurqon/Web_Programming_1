<!-- Tugas 2 Web Programming Pertemuan 3 -->
<!-- Nama : Muhammad Furqon Prasetyo -->
<!-- NIM : 15220800 -->
<!-- Kelas : 15.1A.11 -->

<?php
    // membuat variabel
    $jumlah_buku = 10;
    $harga_barang = 10000;
    $total = $jumlah_buku * $harga_barang;
    $discount = 20/100 * $total;
    $pajak = 0.11 * $total;
    $total_bayar = $total - $discount + $pajak;
?>
        
<!DOCTYPE html>
<html style="width: 100%; height: 100%;">
    <head>
        <title>Tugas 05</title>
        <style>
            body {
                width: 980;
                height: 660;
                margin: 0 auto;
                font-family: Calibri;
                background-image: linear-gradient(to left, #86a8e7, #85a9ea, #84a9ed, #83aaf1, #82aaf4, #74b2f9, #65bafd, #56c2ff, #3cd2ff, #2fe1ff, #3feefb, #5ffbf1);
                
            }

            .content {
                position: relative;
                top: 200px;
                left:500px;
                justify-content: center;
                width: 250px;
                height: 120px;
                padding: 50px;
                color: white;
                border: solid white;
                border-radius: 10px;
                background-image: linear-gradient(to right top, #d16ba5, #c777b9, #ba83ca, #aa8fd8, #9a9ae1, #8aa7ec, #79b3f4, #69bff8, #52cffe, #41dfff, #46eefa, #5ffbf1);
            }

        </style>
    </head>
    <body>

        <div class="content">
            <?php
                // menampilkan ke halaman web
                echo "Jumlah Buku : $jumlah_buku <br>";
                echo "Harga Barang : $harga_barang <br>";
                print "Total : $total <br>";
                print "Discount : $discount <br>";
                print "Pajak : $pajak <br>";
                echo "Total Bayar : $total_bayar <br>";
            ?>
        </div>
    </body>
</html>