<?php
include 'koneksi.php';

if(isset($_POST['submit'])){
    $nim = $_POST['nim'];
    $nama = $_POST['nama'];
    $kelas = $_POST['kelas'];
    $nilai_mid = $_POST['nilai_mid'];
    $nilai_tugas = $_POST['nilai_tugas'];
    $nilai_uas = $_POST['nilai_uas'];

    // Rumus perhitungan nilai
    $hasil = $nilai_mid + $nilai_tugas + $nilai_uas;
    $rata_rata = $hasil / 3;
    if ($rata_rata >= 60) {
        $grade = "Selamat Anda dinyatakan LULUS";
    } else {
        $grade = "Mohon Maaf Anda dinyatakan TIDAK LULUS"; 
    }

    // Insert data ke dalam database
    $query = "INSERT INTO nilai (nim, nama, kelas, nilai_mid, nilai_tugas, nilai_uas, rata_rata, grade) 
              VALUES ('$nim', '$nama', '$kelas', '$nilai_mid', '$nilai_tugas', '$nilai_uas', '$rata_rata', '$grade')";

    if(mysqli_query($conn, $query)){
        echo "
            <script>
                alert('Data berhasil ditambahkan!');
                window.location.href = 'nilaisiswa.php';
            </script>
        ";
    } else {
        echo "Error: " . $query . "<br>" . mysqli_error($conn);
    }
}
?>
1