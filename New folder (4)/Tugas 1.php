<!DOCTYPE html>
<html>
<head>
    <title>Form Registrasi</title>
</head>
<body>
    <form action="Tugas 2.php" method="post">
    <table>
        <h1>Form Registrasi</h1>
        <p>Isi Data Dibawah Ini :</p>
    <tr>
        <td width="150">Nama</td>
        <td><input type="text" name="nama"></td>
    </tr>
    <tr>
        <td>Alamat</td>
        <td><textarea name="alamat"></textarea></td>
    </tr>
    <tr>
        <td>Tempat Lahir</td>
        <td><input type="text" name="tempat_lahir"></td>
    </tr>
    <tr>
        <td>Tanggal Lahir</td>
        <td><input type="date" name="tanggal_lahir"></td>
    </tr>
    <tr>
        <td>jenis_kelamin</td>
        <td><input type="radio" name="jenis_kelamin" value="Laki-Laki">Laki-Laki
            <input type="radio" name="jenis_kelamin" value="Perempuan">Perempuan</td>
    </tr>
    <tr>
        <td>pendidikan</td>
        <td><select name="pendidikan">
            <option value="-pilih-">-Pilih-</option>
            <option value="SD">SD</option>
            <option value="SMP">SMP</option>
            <option value="SMA">SMA</option>
            <option value="D3">D3</option>
            <option value="S1">S1</option>
        </select></td>
    </tr>
    <tr>
        <td><input type="submit" value="Submit">
            <input type="reset" value="Cancel"></td>
    </tr>
    </table>
    </form>
</body>
</html>
