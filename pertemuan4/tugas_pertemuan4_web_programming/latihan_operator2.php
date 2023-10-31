<!-- Tugas Belajar Menghitung Volume Kubus -->
<!-- Written by Muhammad Furqon Prasetyo -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan Operator</title>
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
        <h2>Belajar Menghitung Volume Kubus</h2>
    </div>
    <div class="content">
        <h3>Input</h3>
        <form method="post" action="">
            <table>
                <tr>
                    <td><label for="panjangSisiKubus">Panjang Sisi Kubus <td> :</label>
                    <td><input type="number" name="panjangSisiKubus" id="panjangSisiKubus">
                </tr>
                <tr>
                    <td><td><td><button type="submit" name="hitung">Hitung</button>
                </tr>
            </table>
        </form>

        <?php 
        if( $_SERVER["REQUEST_METHOD"] === "POST" ) {
            $panjangSisiKubus = $_POST["panjangSisiKubus"];
            $hasil = $panjangSisiKubus * $panjangSisiKubus * $panjangSisiKubus;

            if( isset($_POST["hitung"]) ) {
                echo "
                    <h3>Output</h3>
                    <table>
                        <tr>
                            <td>Panjang Sisi Kubus <td><td> = $panjangSisiKubus
                        </tr>
                        <tr>
                            <td>Volume Kubus<sup><sup> <td><td> = $hasil cm<sup>3<sup>
                        </tr>
                    </table>
                ";
            }
        }
        
        ?>
    </div>
</body>
</html>