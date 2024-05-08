<!DOCTYPE html>
<html lang="id">
  <head>
    <meta charset="UTF-8" />
    <title>Formulir Pendaftaran</title>
  </head>
  <body>
    <form action="tugas 5.php" method="post">
      <label for="nama">Nama:</label>
      <input type="text" id="nama" name="nama" /><br /><br />

      <label for="alamat">Alamat:</label>
      <input type="text" id="alamat" name="alamat" /><br /><br />

      <label for="tempat_lahir">Tempat Lahir:</label>
      <input type="text" id="tempat_lahir" name="tempat_lahir" /><br /><br />

      <label for="tanggal_lahir">Tanggal Lahir:</label>
      <input type="date" id="tanggal_lahir" name="tanggal_lahir" /><br /><br />

      <label>Jenis Kelamin:</label>
      <input
        type="radio"
        id="laki-laki"
        name="jenis_kelamin"
        value="Laki-laki"
      />
      <label for="laki-laki">Laki-laki</label>
      <input
        type="radio"
        id="perempuan"
        name="jenis_kelamin"
        value="Perempuan"
      />
      <label for="perempuan">Perempuan</label><br /><br />

      <label for="pendidikan_sd">Pendidikan SD:</label>
      <input type="text" id="pendidikan_sd" name="pendidikan_sd" /><br /><br />

      <label for="pendidikan_smp">Pendidikan SMP:</label>
      <input
        type="text"
        id="pendidikan_smp"
        name="pendidikan_smp"
      /><br /><br />

      <label for="pendidikan_sma">Pendidikan SMA:</label>
      <input
        type="text"
        id="pendidikan_sma"
        name="pendidikan_sma"
      /><br /><br />

      <label for="pendidikan_s1">Pendidikan S1:</label>
      <input type="text" id="pendidikan_s1" name="pendidikan_s1" /><br /><br />

      <button type="submit">Submit</button>
      <button type="button" onclick="window.location.href='Tugas 4.html';">
        Cancel
      </button>
    </form>
  </body>
</html>
