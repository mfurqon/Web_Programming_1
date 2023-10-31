<html>
    <head>
        <title>Input Tugas 04</title>
    </head>
    <body>
        <h1>Rumus - Rumus</h1>
        <form method="get" action="output_tugas_04.php">
            <table border="2">
                <tr>
                    <td><label for="nilai1">Nilai 1</label></td>
                    <td>
                        <input type="number" name="nilai1" id="nilai1">
                    </td>
                </tr>
                <tr>
                    <td><label for="nilai2">Nilai 2</label></td>
                    <td>
                        <input type="number" name="nilai2" id="nilai2">
                    </td>
                </tr>
                <tr>
                    <td align="center" colspan="2" rowspan="2"><input type="radio" name="rumus" value="Segitiga">Segitiga <br>
                    <input type="radio" name="rumus" value="Persegi Panjang">Persegi Panjang</td>
                </tr>
            </table>

            <tr><td><button type="submit" name="hitung">Hitung</button>
            <td><button type="reset" name="batal">Batal</button></tr>
        </form>
    </body>
</html>