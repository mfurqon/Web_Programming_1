<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Method POST Proses</title>
    <style>
        body {
            width: 500px;
            margin: 0 auto;
            background-color: azure;
        }
        div.content {
            background-color: cadetblue;
            padding: 20px;
            margin-top: 40px;
            margin-bottom: 40px;
            text-align: center;
            border: 2px solid black;
            border-radius: 4px;
        }
    </style>
</head>
<body>
    <div class="content">
        Data Nama Yang Diinputkan Adalah : <?= $_POST["nama"]; ?>
    </div>
</body>
</html>