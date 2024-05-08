<!DOCTYPE html>
<html>
<head>
    <title>Form Registrasi</title>
    <style>
        /* Add spacing between label and input */
        .form-group {
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
    <form action="Tugas 2.php" method="post">
        <fieldset>
            <legend><h1>Form Registrasi</h1></legend>
            <div class="form-group">
                <label for="nama">Nama:</label>
                <input type="text" id="nama" name="nama">
            </div>
            <div class="form-group">
                <label for="alamat">Alamat:</label>
                <textarea id="alamat" name="alamat"></textarea>
            </div>
            <div class="form-group">
                <label for="tempatLahir">Tempat Lahir:</label>
                <input type="text" id="tempatLahir" name="tempatLahir">
            </div>
            <div class="form-group">
                <label for="tanggalLahir">Tanggal Lahir:</label>
                <input type="date" id="tanggalLahir" name="tanggalLahir">
            </div>
            <div class="form-group">
                <label>Jenis Kelamin:</label><br>
                <input type="radio" id="lakiLaki" name="jenisKelamin" value="Laki-Laki">
                <label for="lakiLaki">Laki-Laki</label><br>
                <input type="radio" id="perempuan" name="jenisKelamin" value="Perempuan">
                <label for="perempuan">Perempuan</label><br>
            </div>
            <div class="form-group">
                <label for="pendidikan">Pendidikan:</label>
                <select id="pendidikan" name="pendidikan">
                    <option value="-pilih-">-Pilih-</option>
                    <option value="SD">SD</option>
                    <option value="SMP">SMP</option>
                    <option value="SMA">SMA</option>
                    <option value="D3">D3</option>
                    <option value="S1">S1</option>
                </select>
            </div>
            <input type="submit" value="Submit">
            <input type="reset" value="Cancel">
        </fieldset>
    </form>
</body>
</html>
