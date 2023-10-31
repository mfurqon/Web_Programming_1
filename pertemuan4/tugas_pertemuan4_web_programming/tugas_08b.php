<!-- Tugas Menghitung Luas dan Keliling Persegi Panjang -->
<!-- Written by Muhammad Furqon Prasetyo -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menghitung Luas dan Keliling Persegi Panjang</title>
    <style>
        body {
            width: 500px;
            margin: 0 auto;
            background-color: aliceblue;
        }
        div.judul {
            background-color: beige;
            text-align: center;
            padding: 5px;
            margin-top: 40px;
            margin-bottom: 40px;
            border: 2px solid black;
            border-radius: 5px;
        }
        div.content {
            background-color: beige;
            padding: 15px;
            margin-top: 40px;
            margin-bottom: 40px;
            border: 2px solid black;
            border-radius: 5px;
            height: 400px;
        }

    </style>
</head>
<body>
    <div class="judul">
        <h2>Menghitung Luas dan Keliling Persegi Panjang</h2>
    </div>

    <div class="content">
        <h3>Input</h3>
        <form method="post" action="">
            <table>
                <tr>
                    <td><label for="lebar">Lebar <td>:</label>
                    <td><input type="number" name="lebar" id="lebar">
                </tr>
                <tr>
                    <td><label for="panjang">Panjang <td>:</label>
                    <td><input type="number" name="panjang" id="panjang">
                </tr>
                <tr>
                    <td><td><td><button type="submit" name="hitung">Hitung</button>
                </tr>
            </table>
            
        </form>
        
        <?php 
        if( $_SERVER["REQUEST_METHOD"] === "POST" ) {
            $lebar = $_POST["lebar"];
            $panjang = $_POST["panjang"];
            
            $keliling = 2 * ($panjang + $lebar);
            $luas = $panjang * $lebar;
            
            if( isset($_POST["hitung"]) ) {
                echo "
                <h3>Output</h3>
                <table>
                    <tr>
                        <td>Lebar <td> = $lebar
                    </tr>
                    <tr>
                        <td>Panjang <td> = $panjang
                    </tr>
                    <tr>
                        <td>Keliling <td> = $keliling
                    </tr>
                    <tr>
                        <td>Luas<sup><sup> <td> = $luas cm<sup>2<sup>
                    </tr>
                </table>";
            }
        }
        
        ?>
        </div>
</body>
</html>