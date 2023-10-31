<!-- Written by Muhammad Furqon Prasetyo -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input Rumus</title>
    <style>
        body {
            margin-top: 100px;
            margin-bottom: 100px;
            background-color: #292828;
            color: #ffffff;
        }
        div.content {
            width: 500px;
            margin: 0 auto;
            padding: 30px;
            border-top: 10px solid orange;
            border-radius: 10px;
            text-align: center;
            background-color: #333;
        }
        label {
            margin-right: 10px;
        }
        div.nilai1 {
            display: inline-block;
            margin: 20px;
        }
        div.nilai2 {
            display: inline-block;
            margin: 20px;
        }
        div.rumus {
            display: block;
            margin: 20px;
        }
        label.label-rumus {
            margin: 20px;
        }
        div.radio {
            display: block;
        }
        div.button {
            margin: 20px;
        }
        input[type="number"] {
            color: #ffffff;
            padding: 5px;
            height: 25px;
            width: 200px;
            border-radius: 4px;
            background-color: #4a4545;
            margin-right: 10px;
            border: none;
            border-left: 5px solid orange;
        }
        input[type="radio"] {
            color: #ffffff;
            padding: 2px;
            height: 15px;
            margin: 10px;
            border: none;
            cursor: pointer;
        }
        button {
            margin-top: 10px;
            color: #ffffff;
            font-weight: bold;
            width: 300px;
            height: 35px;
            border: none;
            border-radius: 20px;
            background-color: #007BFF;
        }
        input[type="number"]:focus {
            border-color: 2px solid #007BFF;
            box-shadow: 0 0 5px #007BFF;
        }
        button:hover {
            background-color: #0457b0;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <div class="content">
        <h1>Rumus - Rumus</h1>
        <form method="post" action="output_tugas_04b.php">
            <div class="nilai1">
                <label for="nilai1">Nilai 1</label>
                <input type="number" name="nilai1" id="nilai1">
            </div>
            
            <div class="nilai2">
                <label for="nilai2">Nilai 2</label></td>
                <input type="number" name="nilai2" id="nilai2">
            </div>
            
            <div class="rumus">
                <label class="label-rumus" for="rumus">Rumus</label>
                <div class="radio">
                    <input class="radio-segitiga" type="radio" name="rumus" value="Segitiga">Segitiga
                    <input class="radio-persegi_panjang" type="radio" name="rumus" value="Persegi Panjang">Persegi Panjang
                </div>
            </div>
            
            <div class="button">
                <button type="submit" name="hitung">Hitung</button>
                <button type="reset" name="batal">Batal</button>
            </div>
        </form>
    </div>
</body>
</html>