<!DOCTYPE html>
<html>
<head>
    <title>Form Html Pada PHP</title>
</head>
<body>
    <form action="Praktek 2.php" method="post">
    <fieldset>
    <table>  
        <legend><h1>Form Html Pada PHP</h1></legend>
        <tr>
            <td width="150">Nama</td>
            <td><input type="text" name="nama"></td>
        </tr>
        <tr>
            <td>Email</td>
            <td><input type="text" name="Email"></td>
        </tr>
        <tr>
            <td>Lokasi</td>
            <td><select name="Lokasi">
            <option value="-pilih-">-Pilih-</option>
                <option value="Brebes">Brebes</option>
                <option value="Tegal">Tegal</option>
                <option value="Pemalang">Pemalang</option>
                <option value="Kuningan">Kuningan</option>
                <option value="Cirebon">Cirebon</option>
            </select></td>
        </tr>
        <tr>
            <td>Gender</td>
            <td>
                <input type="radio" name="Gender" value="Laki-Laki">Laki-Laki<br>
                <input type="radio" name="Gender" value="Perempuan">Perempuan
            </td>
        </tr>
        <tr>
            <td>Skill</td>
            <td>
                <input type="checkbox" name="Skill" value="PHP" style="margin-left: 0;">PHP<br>
                <input type="checkbox" name="Skill" value="Mysql" style="margin-left: 0;">Mysql <br>
                <input type="checkbox" name="Skill" value="Javascrip" style="margin-left: 0;">Javascrip <br>
                <input type="checkbox" name="Skill" value="HTML" style="margin-left: 0;">HTML <br>
                <input type="checkbox" name="Skill" value="CSS" style="margin-left: 0;">CSS
            </td>
        </tr>
        <tr>
            
            <td><input type="submit" value="Simpan">
            <input type="reset" value="Cancel"></td>
            </tr>
    </table>
    </fieldset>
    </form>
</body>
</html>
