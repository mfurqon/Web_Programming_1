<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Registrasi</title>
    <style>
    </style>
</head>
<body>
    <h1>Form Registrasi</h1>
    <p>
        Isikan Data Di Bawah Ini:
    </p>
    <form method="post" action="tugas_06_proses.php">
        <pre>
Nama                     <input type="text" name="nama">
Alamat                   <textarea name="alamat" cols="40" rows="5" placeholder="Masukkan Alamat"></textarea>
Tempat Lahir             <input type="text" name="tempat_lahir">
Tanggal Lahir            <input type="text" name="tanggal_lahir">
Jenis Kelamin            <input type="radio" name="jenis_kelamin" value="Laki-Laki">Laki-Laki<input type="radio" name="jenis_kelamin" value="Perempuan">Perempuan
Pendidikan               <select name="pendidikan">
                        <option value="-Pilih-"></option>
                        <option value="SD">SD</option>
                        <option value="SMP">SMP</option>
                        <option value="SMA">SMA</option>
                        <option value="D3">D3</option>
                        <option value="S1">S1</option>
                        <option value="S2">S2</option>
                        <option value="S3">S3</option>
                        </select>
            
<button type="submit" name="submit" value="Submit">Submit</button><button type="reset" name="cancel" value="Cancel">Cancel</button>
        </pre>
    </form>
</body>
</html>