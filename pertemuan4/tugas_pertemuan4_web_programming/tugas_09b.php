<!-- Tugas Menghitung Luas Lingkaran -->
<!-- Written by Muhammad Furqon Prasetyo -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menghitung Luas Lingkaran</title>
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
        <h2>Menghitung Luas Lingkaran</h2>
    </div>
    <div class="content">
        <h3>Input</h3>
        <form method="post" action="">
            <table>
                <tr>
                    <td><label for="jari_jari">Jari-jari <td>:</label>
                    <td><input type="number" name="jari_jari" id="jari_jari">
                </tr>
                
                <tr>
                    <td><td><td><button type="submit" name="hitung">Hitung</button>
                </tr>
            </table>
        </form>
        
        <?php 
    if( $_SERVER["REQUEST_METHOD"] === "POST" ) {
        $jari_jari = $_POST["jari_jari"];
        $phi = 3.14;
        $hasil = $phi * $jari_jari * $jari_jari;
        
        if( isset($_POST["hitung"]) ) {
            echo "
            <h3>Output</h3>
            <table>
                <tr>
                    <td>Jari-jari <td><td> = $jari_jari
                </tr>
                <tr>
                    <td>Luas Lingkaran<sup><sup> <td><td> = $hasil cm<sup>2<sup>
                </tr>
            </table>
            ";
        }
    }
    
    ?>
    </div>
</body>
</html>