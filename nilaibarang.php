<html>
<head>
    <title>NILAI BARANG</title>
</head>
<body>
    <h1 style= "text-align: center">Program Menghitung Barang Belanja SMK</h1>
    <form method="POST"action="">
        <div style="margin-left: 25%">
            Harga Barang 1: <input type="text" name="barang1">
            <br>
            <br>
            Harga Barang 2: <input type="text" name="barang2">
            <br>
            <br>
            Harga Barang 3: <input type="text" name="barang3">
            <br>
            <br>
            Harga Barang 4: <input type="text" name="barang4">
            <br>
            <br>
            Tunai         : <input type="text" name="tunai">
            <br>
            <br>
            <input type="submit" name="submit" value="Total Harga">
        </div>
    </form>
        <div style="margin-left: 25%">
            <?php
                if(isset($_POST['submit'])){
                    $barang1 = $_POST['barang1'];
                    $barang2 = $_POST['barang2'];
                    $barang3 = $_POST['barang3'];
                    $barang4 = $_POST['barang4'];
                    $tunai   = $_POST['tunai'];
                    
                     
                 //rumus perhitungan nilai
                 $barang1 = $barang1;
                 $barang2 = $barang2;
                 $barang3 = $barang3;
                 $barang4 = $barang4;
                 $tunai   = $tunai;

                 $hasil = $barang1 + $barang2 + $barang3 + $barang4;
                 $kembalian = $tunai - $hasil; 
                 
                 if ($hasil>=10000000) {
                    $total = "Gula";
                 } else if ($hasil>=8000000) {
                    $total = "Garam";
                 } else if ($hasil>= 6000000) {
                    $total = "Minyak";
                 } else if ($hasil>=4000000) {
                    $total = "Sendok";
                 } else if ($hasil<=> 2000000) {
                    $total = "Tidak ada Bonus";
                 } 

                echo "Harga Barang 1: $barang1 <br/>";
                echo "Harga Barang 2: $barang2 <br/>";
                echo "Harga Barang 3: $barang3 <br/>";
                echo "Harga Barang 4: $barang4 <br/>";
                echo "Total : $hasil <br/>";
                echo "Tunai: $tunai <br/>";
                echo "Kembalian : $kembalian <br/>";
                echo "Selamat Anda mendapatkan bonus <b>$total</b> <br/> ";
                }

            ?>

        </div>
</body>
</html>