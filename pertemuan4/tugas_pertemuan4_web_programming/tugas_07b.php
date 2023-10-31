<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas Perbandingan Operator</title>
</head>
<body>
    <h1>Tugas Operator Perbandingan</h1>
    <form method="post" action="">
        <label for="number1">Number 1</label>
        <input type="number" name="number1" id="number1">

        <select name="operator" id="operator">
            <option value="comparison">Comparison</option>
            <option value="equal">==</option>
            <option value="notequal">!=</option>
            <option value="greater">></option>
            <option value="less"><</option>
            <option value="greaterequal">>=</option>
            <option value="lessequal"><=</option>
        </select>

        <label for="number2">Number 2</label>
        <input type="number" name="number2" id="number2">


        <button type="submit" name="button">Bandingkan</button>

        <?php 
        if( $_SERVER["REQUEST_METHOD"] === "POST" ) {
            $angka1 = intval(trim($_POST["number1"]));
            $angka2 = intval(trim($_POST["number2"]));
            $operator = $_POST["operator"];
            $result = false;

            if( $operator == "==" ) {
                $result = ($angka1 == $angka2);
            }
            elseif( $operator != "!=" ) {
                $result = ($angka1 != $angka2);
            }
            elseif( $operator == ">" ) {
                $result = ($angka1 > $angka2);
            }
            elseif( $operator == "<" ) {
                $result = ($angka1 < $angka2);
            }
            elseif( $operator == "<=" ) {
                $result = ($angka1 <= $angka2);
            }
            elseif( $operator == ">=" ) {
                $result = ($angka1 >= $angka2);
            }

            echo "Hasil = " . ($result ? "True" : "False");
            // if( $result == 1 ) {
            //     echo "Hasil = True";
            // }
            // else {
            //     echo "Hasil = False";
            // }
        }
        ?>
    </form>

</body>
</html>