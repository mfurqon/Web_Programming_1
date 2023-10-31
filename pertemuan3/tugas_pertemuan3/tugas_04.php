<!-- Tugas 1 Web Programming Pertemuan 3 -->
<!-- Nama : Muhammad Furqon Prasetyo -->
<!-- NIM : 15220800 -->
<!-- Kelas : 15.1A.11 -->

<!DOCTYPE html>
<html lang="en">
<html style="height: 100%; width: 100%;">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Tugas 04</title>
        <style>
            body {
                margin: 0 auto;
                font-family: Arial;
                background: #ee0979;
                background: -webkit-linear-gradient(to right, #ff6a00, #ee0979);
                background: linear-gradient(to right, #ff6a00, #ee0979);
            }

            .content {
                position: relative;
                top: 220px;
                left: 500px;
                width: 300px;
                padding: 30px;
                /* display: flex; */
                justify-content: center;
                color: whitesmoke;
                background: #c31432;  /* fallback for old browsers */
                background: -webkit-linear-gradient(to right, #240b36, #c31432);
                background: linear-gradient(to right, #240b36, #c31432);
                border: solid white;
                border-radius: 10px;
            }
        </style>
    </head>

    <body>
        <!-- membuat variabel -->
        <?php 
        $nama = "Lintang Seruni Senja";
        $alamat = "Jl. Badak No. 2 Cimahi-Bandung";
        $ttl = "Jakarta, 20 Oktober 1990";
        $Telp = "08123456789";
        ?>

        <div class="content">
            <?php 
                echo "Nama Saya : $nama <br>";
                echo "Alamat : $alamat <br>";
                echo "TTL : $ttl <br>";
                echo "No. Telepon : $Telp <br>";
            ?>
        </div>
    </body>
</html>