<!-- Tugas Web Programming Pertemuan 6 -->
<!-- written by Muhammad Furqon Prasetyo -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Registrasi</title>
    <style>
        body {
            width: 1000px;
            margin: 0 auto;
            background-color: aliceblue;
        }
        div.content {
            padding: 30px;
            width: 750px;
            height: 600px;
            margin: 0 auto;
            margin-top: 70px;
            margin-bottom: 70px;
            background-color: beige;
            border: 1px solid grey;
            border-radius: 30px;
        }
        h1 {
            text-align: center;
        }
        div.input {
            margin: 0 auto;
            margin-top: 50px;
            margin-bottom: 50px;
            width: 500px;
        }
        div.button {
            justify-content: center;
            margin: 0 auto;
            margin-top: 20px;
            margin-bottom: 20px;
            width: 500px;
        }
        table.input {
            width: 550px;
            margin: 0 auto;
            margin-top: 70px;
            margin-bottom: 40px;
            border-spacing: 4px;
            padding: 30px;
            background-color: azure;
            border: 6px solid white;
            border-radius: 20px;
        }
        div.button {
            text-align: center;
        }
        button {
            font-weight: bold;
            color: white;
            font-size: 15px;
            width: 80px;
            height: 35px;
            border-radius: 20px;
            border: #00A1F1;
            background-color: #1E90FF;
            cursor: pointer;
        }
        button:hover {
            background-color: #00A1F1;
        }
    </style>
</head>
<body>
    <div class="content">
        <h1>Form Registrasi</h1>
        <form method="post" action="data_registrasi.php">
            <div class="input">
                <table class="input">
                    <tr>
                        <td>Isi Data Dibawah ini:
                    </tr>
                    <tr>
                        <td><label for="nama">Nama</label>
                        <td><input type="text" name="nama" id="nama">
                    </tr>
                    <tr>
                        <td><label for="alamat">Alamat</label>
                        <td><textarea name="alamat" cols="21" rows="3"></textarea>
                    </tr>
                    <tr>
                        <td><label for="tempat_lahir">Tempat Lahir</label>
                        <td><input type="text" name="tempat_lahir" id="tempat_lahir">
                    </tr>
                    <tr>
                        <td><label for="tanggal_lahir">Tanggal Lahir</label>
                        <td><input type="text" name="tanggal_lahir" id="tanggal_lahir">
                    </tr>
                    <tr>
                        <td><label for="jenis_kelamin">Jenis Kelamin</label>
                        <td><input type="radio" name="jenis_kelamin" id="jenis_kelamin" value="laki_laki">Laki-Laki
                        <input type="radio" name="jenis_kelamin" id="jenis_kelamin" value="perempuan">Perempuan
                    </tr>
                    <tr>
                        <td><label for="pendidikan">Pendidikan</label>
                        <td><select name="pendidikan" id="pendidikan">
                            <option value="">Pilih</option>
                            <option value="SD">SD</option>
                            <option value="SMP">SMP</option>
                            <option value="SMA">SMA</option>
                            <option value="S1">S1</option>
                            <option value="S2">S2</option>
                            <option value="S3">S3</option>
                        </select>
                    </tr>
                </table>
            </div>
            <div class="button">
                <button type="submit" name="submit">Submit</button>
                <button type="submit" name="cancel">Cancel</button>
            </div>
        </form>
    </div>
</body>
</html>