<html>
    <head>
        <title>Perhitungan Nilai Mahasiswa - www.anakblogger.com</title>
    </head>
    <body>
        <h1 style="text-align: center">Program Perhitungan Nilai SISWA SMK RPL </h1>
        <form method="post" action="">
            <div style="margin-left: 25%">
                Nilai Absen : <input type="text" name="nilai_absen" /><br /> <br />
                Nilai UTS : 
                <input type="text" name="nilai_uts" /><br /><br />
                Nilai UAS : <input type="text" name="nilai_uas" /><br /><br />
                Nilai Praktek : <input type="text" name="nilai_praktek" /><br /><br />
                 
                <input type="submit" name="submit" value="HITUNG" />
            </div>
        </form>
 
        <div style="margin-left: 25%">
            <?php
                if(isset($_POST['submit'])){
                    $nilai_absen = $_POST['nilai_absen'];
                    $nilai_uts = $_POST['nilai_uts'];
                    $nilai_uas = $_POST['nilai_uas'];
                    $nilai_praktek = $_POST['nilai_praktek'];
 
                    //rumus perhitungan nilai
                    $nilai_absen = $nilai_absen*0.1;
                    $nilai_uts = $nilai_uts*0.2;
                    $nilai_uas = $nilai_uas*0.4;
                    $nilai_praktek = $nilai_praktek*0.3;
 
                    $hasil = $nilai_absen + $nilai_uts + $nilai_uas + $nilai_praktek;
 
                    if ($hasil>=80) {
                        $grade = "A";
                    } else if ($hasil>=70) {
                        $grade = "B";
                    } else if ($hasil>=50) {
                        $grade = "C";
                    } else if ($hasil>=40) {
                        $grade = "D";
                    } else {
                        $grade = "E";
                    }
 
                    //hasil perhitungan
                   
                    echo "Nilai Absen   : $nilai_absen <br/> ";
                    echo "Nilai UTS : $nilai_uts <br/>";
                    echo "Nilai UAS : $nilai_uas <br/>";
                    echo "Nilai Praktek : $nilai_praktek <br/>";
 
                    echo "Perolehan Nilai Akhir Mahasiswa adalah  <b>$hasil</b> <br/> ";
                    echo "Grade : $grade <br/>";
                }
            ?>
        </div>
    </body>
</html>