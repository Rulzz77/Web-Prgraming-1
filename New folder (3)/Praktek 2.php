<!DOCTYPE html>
<html>
<head>
    <title>Data Registrasi</title>
    <style>
        table {
            width: 25%;
            margin: 20px auto;
            border-style: solid;
        }
        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: left;
        }
    </style>
</head>
<body>
    <?php
    // Memeriksa apakah form telah disubmit
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Mengambil data dari form
        $nama = isset($_POST['nama']) ? $_POST['nama'] : '';
        $Email = isset($_POST['Email']) ? $_POST['Email'] : '';
        $Lokasi = isset($_POST['Lokasi']) ? $_POST['Lokasi'] : '';
        $Gender = isset($_POST['Gender']) ? $_POST['Gender'] : '';
        $Skill = isset($_POST['Skill']) ? $_POST['Skill'] : '';

        echo "<table>";
        echo "<tr><th>Nama</th><td>" . htmlspecialchars($nama) . "</td></tr>";
        echo "<tr><th>Email</th><td>" . htmlspecialchars($Email) . "</td></tr>";
        echo "<tr><th>Lokasi</th><td>" . htmlspecialchars($Lokasi) . "</td></tr>";
        echo "<tr><th>Gender</th><td>" . htmlspecialchars($Gender) . "</td></tr>";
        echo "<tr><th>Skill</th><td>" . htmlspecialchars($Skill) . "</td></tr>";
        echo "</table>";
    }
    ?>
    <a href="Praktek 1.php">Back</a>
</body>
</html>