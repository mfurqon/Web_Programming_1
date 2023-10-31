<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Komentar</title>
    <style>
        body {
            width: 750px;
            margin: 0 auto;
            background-color: #70b3b6;
        }
        div.judul {
            margin-top: 15px;
            margin-bottom: 15px;
            padding: 5px;
            background-color: azure;
            text-align: center;
            border: solid 2px grey;
        }
        div.content {
            margin-top: 15px;
            margin-bottom: 15px;
            padding: 15px;
            border: solid 2px grey;
            background-color: azure;
            height: 500px;
        }
        a {
            text-decoration: none;
        }
        a:hover{
            color: violet;
        }
        div.komen {
            width: 300px;
            border: 1px black;
        }
    </style>
</head>
<body>
    <div class="judul">
        <h1>Data Komentar Anda</h1>
    </div>
    <hr>
    <div class="content">
        <table>
            <tr>
                <td>Nama Anda <td>: <td><?= $_POST["nama"]; ?> <br>
            </tr>
            <tr>
                <td>Email Anda <td>: <td><?= $_POST["email"]; ?> <br>
            </tr>
            <tr>
                <td>Komentar Anda <td>: <td><div class="komen"><?= $_POST["komentar"]; ?></div> <br>
            </tr>
            <tr>
                <td><a href="form_input_komentar.php">Input Data Lagi</a>
            </tr>
        </table>
    </div>
</body>
</html>