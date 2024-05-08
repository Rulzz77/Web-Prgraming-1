<!DOCTYPE html>
<html>
<head>
    <title>Data Registrasi</title>
    <style>
        table {
            width: 20%;
            margin: 20px;
            border-style: solid;
        }
        td, th {
            border: 1px solid black;
            padding: 5px;
            text-align: left;
        }
    </style>
</head>
<body>
    <h1>Data Registrasi</h1>
    <table>
        <tr>
            <th>Nama</th>
            <td><?=($_POST['nama']); ?></td>
        </tr>
        <tr>
            <th>Alamat</th>
            <td><?=($_POST['alamat']); ?></td>
        </tr>
        <tr>
            <th>Tempat Lahir</th>
            <td><?=($_POST['tempat_lahir']); ?></td>
        </tr>
        <tr>
            <th>Tanggal Lahir</th>
            <td><?=($_POST['tanggal_lahir']); ?></td>
        </tr>
        <tr>
            <th>Jenis Kelamin</th>
            <td><?=($_POST['jenis_kelamin']); ?></td>
        </tr>
        <tr>
            <th>Pendidikan</th>
            <td><?=($_POST['pendidikan']); ?></td>
        </tr>
    </table>
    <a href="Tugas 1.php">Back</a>
</body>
</html>
