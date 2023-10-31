<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Method GET Proses</title>
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
        Data Nama Yang Diinputkan Adalah : <?= $_GET["nama"]; ?>
    </div>
</body>
</html>