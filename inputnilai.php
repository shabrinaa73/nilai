<!DOCTYPE html>
<html>
<head>
    <title>Input Nilai</title>
</head>
<body>
    <h1>Masukin Nilai</h1>
    <a href="nilaisiswa.php">Kembali</a>
    <form action="input-aksi.php" method="POST">
        <table>
            <tr>
                <td>NIM</td>
                <td>:</td>
                <td><input type="text" name='nim'></td>
            </tr>
            <tr>
                <td>Nama </td>
                <td>:</td>
                <td><input type="text" name="nama"></td>
            </tr>
            <tr>
                <td>Kelas</td>
                <td>:</td>
                <td><input type="text" name="kelas"></td>
            </tr>
            <tr>
                <td>Nilai MID</td>
                <td>:</td>
                <td><input type="text" name="nilai_mid"></td>
            </tr>
            <tr>
                <td>Nilai Tugas</td>
                <td>:</td>
                <td><input type="text" name="nilai_tugas"></td>
            </tr>
            <tr>
                <td>Nilai UAS</td>
                <td>:</td>
                <td><input type="text" name="nilai_uas"></td>
            </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td><input type="submit" name="simpan"></td>
                </tr>

        </table>
    </form>
    
</body>
</html>