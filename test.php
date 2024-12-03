<html>
    <head>
        <title>Nilai Siswa SMK P1</title>
    </head>
    <body>
        <h1 style="text-align: center">Program Perhitungan Nilai SISWA SMK RPL </h1>
        <form method="post" action="">
            <div style="margin-left: 25%">
                Nama Siswa: <input type="text" name="nama">
                <br>
                <br>
                Kelas: <input type="text" name="kelas">
                <br>
                <br>
                Nilai MID: <input type="text" name="nilai_mid">
                <br>
                <br>
                Nilai Tugas: <input type="text" name="nilai_tugas">
                <br>
                <br>
                Nilai UAS         : <input type="text" name="nilai_uas">
                <br>
                <br>
                <input type="submit" name="submit" value="Submit">
            </div>
        </form>
 
        <div style="margin-left: 25%">
            <?php
            include 'koneksi.php';
                if(isset($_POST['submit'])){
                    $nama = $_POST['nama'];
                    $kelas = $_POST['kelas'];
                    $nilai_mid = $_POST['nilai_mid'];
                    $nilai_tugas = $_POST['nilai_tugas'];
                    $nilai_uas = $_POST['nilai_uas'];
 
                    //rumus perhitungan nilai
                    $nilai_mid = $nilai_mid;
                    $nilai_tugas = $nilai_tugas;
                    $nilai_uas = $nilai_uas;
 
                    $hasil = $nilai_mid + $nilai_tugas + $nilai_uas;
                    $rata_rata = $hasil /3;
                    if ($rata_rata>=60) {
                        $grade = "Selamat Anda dinyatakan LULUS";
                    } else if ($rata_rata<=50) {
                        $grade = "Mohon Maaf Anda dinyatakan TIDAK LULUS"; 
                    } 
 
                    //hasil perhitungan
                   
                    echo "Nama Siswa   : $nama <br/> ";
                    echo "Kelas        : $kelas <br/> ";
                    echo "Nilai MID   : $nilai_mid <br/> ";
                    echo "Nilai Tugas : $nilai_tugas <br/>";
                    echo "Nilai UAS : $nilai_uas <br/>";
 
                    echo "Rata-rata <b>$rata_rata</b> <br/> ";
                    echo "$grade <br/>";
                }
            ?>
        </div>
    </body>
</html>