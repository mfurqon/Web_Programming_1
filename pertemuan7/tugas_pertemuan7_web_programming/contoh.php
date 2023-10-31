<!DOCTYPE html>
<html>
<head>
  <title>Contoh Formulir</title>
  <style>
    .form-container {
      width: 300px;
      margin: 0 auto;
    }

    .form-group {
      margin: 10px 0;
    }

    label {
      display: block;
    }

    input[type="number"] {
      width: 100%;
      padding: 5px;
    }

    .radio-group {
      display: flex;
      align-items: center;
    }

    .radio-label {
      margin-right: 10px;
    }

    .buttons {
      margin-top: 20px;
    }

    button {
      padding: 10px 20px;
      margin-right: 10px;
    }
  </style>
</head>
<body>
  <div class="form-container">
    <h2>Formulir Contoh</h2>
    <form action="proses.php" method="post">
      <div class="form-group">
        <label for="nama">Nama:</label>
        <input type="text" id="nama" name="nama" required>
      </div>

      <div class="form-group">
        <label for="usia">Usia:</label>
        <input type="number" id="usia" name="usia" required>
      </div>

      <div class="form-group">
        <label>Jenis Kelamin:</label>
        <div class="radio-group">
          <label class="radio-label">
            <input type="radio" name="jenis_kelamin" value="Laki-laki"> Laki-laki
          </label>
          <label class="radio-label">
            <input type="radio" name="jenis_kelamin" value="Perempuan"> Perempuan
          </label>
        </div>
      </div>

      <div class="buttons">
        <button type="submit">Hitung</button>
        <button type="reset">Batal</button>
      </div>
    </form>
  </div>
</body>
</html>
