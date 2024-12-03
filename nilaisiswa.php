<!DOCTYPE html>
<html>
<head>
    <title>Halaman Data Siswa </title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity=
    "sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body align="center">
    <style>
        body{
            background-color: #758D93;
        }
        .navbar-brand img {
            width: 100px; 
            height: auto; 
        }
        .navbar-nav .nav-link {
            font-size: 20px; 
            font-weight: bold;
        }
        h2 {
            color: #000; /* Warna teks */
            font-family: "Machine BT", sans-serif; /* Jenis font */
            text-align: center; /* Pusatkan teks */
            font-size: 90px;
        }
        h3 {
            color: #000; /* Warna teks */
            font-family: "Cherry", sans-serif; /* Jenis font */
            text-align: center; /* Pusatkan teks */
            font-size: 30px;
            font-weight: bold;
        }
        .centered-image img {
            width: 100px;
            height: auto;
            display: flex;
            justify-content: center;
        }
        
    </style>
    <h2 style= "color: #fff">Data Siswa Parulian 1 Medan
        <br>
        <button type="button" class="btn btn-light">
        <a href="inputnilai.php" class="tambah">Input Nilai Siswa</a>
    </button> 
    </h2> 
    <table align="center" class="table1" border="1" >
        <tr class="tr1">
            <td>No</td>
            <td>NIM</td>
            <td>Nama Siswa</td>
            <td>Kelas </td>
            <td>Nilai MID</td>
            <td>Nilai Tugas</td>
            <td>Nilai UAS</td>
            <td>Rata-rata</td>
            <td>Opsi</td>
        </tr>
        <?php
        include 'koneksi.php';
        $no = 1;
        $select = mysqli_query($conn, "SELECT * FROM nilai ");
        if(mysqli_num_rows($select)> 0){
        while($hasil = mysqli_fetch_array($select)){
        ?>
         <tr style="text-align:ce_ter;">
            <td><?php echo $no++ ?></td>
            <td><?php echo $hasil['nim']?></td>
            <td><?php echo $hasil['nama_siswa']?></td>
            <td><?php echo $hasil['kelas']?></td>
            <td><?php echo $hasil['nilai_mid']?></td>
            <td><?php echo $hasil['nilai_tugas']?></td>
            <td><?php echo $hasil['nilai_uas']?></td>
            <td class="edit">
            <button type="button" class="btn btn-light">
                <a href="edit.php?nim=<?php echo $hasil['nim']?>" align="right" >Edit</a></button> 
            <button type="button" class="btn btn-light"><a href="hapus.php?nim=<?php echo $hasil ['nim']?>">Hapus</a><button>  
            </td>
            
        </tr>
        <?php }}else{?>
        <tr>
            <td colspan="9" align="center">Data kosong</td>   
        </tr>     
        <?php }?>
    </table>  
   
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
<?php
include "koneksi.php" ;
?>
