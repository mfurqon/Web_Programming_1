<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Metode GET</title>
    <style>
        body {
            width: 500px;
            margin: 0 auto;
            background-color: beige;
        }
        div.content {
            background-color: cyan;
            padding: 15px;
            margin-bottom: 40px;
            margin-top: 40px;
            text-align: center;
            border: 2px solid grey;
            border-radius: 4px;
        }
    </style>
</head>
<body>
    <div class="content">
        <form method="get" action="metode_get_proses.php">
            <label for="nama">Masukkan Nama :</label>
            <input type="text" name="nama" id="nama">
            <button type="submit" name="proses">Proses</button>
        </form>
    </div>
</body>
</html>