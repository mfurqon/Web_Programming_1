<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Komentar</title>
    <style>
        body {
            width: 600px;
            margin: 0 auto;
            background-color: #70b3b6;
        }
        div.judul {
            margin-top: 15px;
            margin-bottom: 15px;
            padding: 5px;
            background-color: azure;
            text-align: center;
            border: solid 2px black;
        }
        div.intro {
            margin-top: 15px;
            margin-bottom: 15px;
            padding: 15px;
            background-color: azure;
            text-align: center;
            border: solid 2px black;
        }
        div.content {
            margin-top: 15px;
            margin-bottom: 15px;
            padding: 15px;
            background-color: azure;
            height: 500px;
            border: solid 2px black;
        }
        button {
            width:60px;
            height:30px;
            font-size:15px;
            font-weight:bold;
            color:aliceblue;
            background-color:darkgreen;
            border:0px;
            border-radius:15px;
            cursor:pointer;
        }
        button:hover {
            background-color: blue;
        }
    </style>
</head>
<body>
    <div class="judul">
        <h1>Buku Tamu</h1>
    </div>
    <div class="intro">
        <p>
            Komentar dan saran Anda sangat kami butuhkan 
            <br>
            Untuk meningkatkan kualitas situs kami
            <hr>
        </p>
    </div>
    <div class="content">
        <form method="post" action="tampil_komentar.php">
            <table>
                <tr>
                    <td><label for="nama">Nama Anda <td>: </label>
                    <td><input type="text" name="nama" id="nama" size="30">
                </tr>
                <tr>
                    <td><label for="email">Email Anda <td>: </label>
                    <td><input type="email" name="email" id="email" size="30">
                </tr>
                <tr>
                    <td><label for="komentar">Komentar Anda <td>:</label>
                    <td><textarea name="komentar" id="komentar" cols="50" rows="5" placeholder="Isi Komentar Anda Di sini"></textarea>
                </tr>
                <tr>
                    <td><td><td><button type="submit" name="kirim">Kirim</button>
                    <button type="submit" name="batal">Batal</button>
                </tr>
            </table>
        </form>
    </div>
</body>
</html>