<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kalkulator</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css" type="text/css" >
</head>
<body class="bg-light">
<div class="container">
    <h1 class="text-center">KALKULATOR SEDERHANA</h1><br>
    <div class="shadow p-3 mb-5 bg-light rounded" >
        <div class="row">
        <div class="col border-right"><img src="Calculator-pana.png" style="width:500px; height: 500px;"></div>
        <div class="col mt-5">

        <form action="" method="post">
        <table>
        <tr>
            <td>Bilangan 1 :</td>
            <td></td>
            <td><input type="number" required min="0" name="a"></td>
        </tr>
        <tr>
            <td>&nbsp;</td><td></td><td></td>
        </tr>
        <tr>
            <td>Bilangan 2 :</td>
            <td></td>
            <td><input type="number" required min="0"name="b"></td>
        </tr>
        <tr>
            <td>&nbsp;</td><td></td><td></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td><input type="submit" value="Hitung!"></td>
        </tr>
        <tr>
            <td>&nbsp;</td><td></td><td></td>
        </tr>
    <?php
    if(isset($_POST['a'], $_POST['b'])){ //isset digunakan untuk mengecek variabel $_GET dan $_POST yang dikirim dari sebuah form 
        $a=$_POST['a']; //$_POST mengirimkan data atau nilai tanpa menampilkan data/nilai pada url
        $b=$_POST['b'];
        
        function penjumlahan(){ //fungsi proses penjumlahan
            global $a, $b; //global membuat variabel global yang bisa digunakan pada fungsi yang berbeda
            $jumlah=$a + $b;
            return $jumlah; //mengembalikan nilai
        }
        function pengurangan(){
            global $a, $b;
            $jumlah=$a - $b;
            return $jumlah;
        }
        function perkalian(){
            global $a, $b;
            $jumlah=$a * $b;
            return $jumlah;
        }
        function pembagian(){
            global $a, $b;
            
            if ($a == 0 && $b == 0) 
            $jumlah = "Tidak Bisa DI Bagi";
            else
            $jumlah=$a / $b;
            return $jumlah;
        }
    ?>
    <tr>
            <td><h5>Hasil Perhitungan</h5></td><td></td><td></td>
        </tr>
    <tr>
        <td>Penjumlahan </td><td>:</td><td><?php echo penjumlahan();?></td>
    </tr>
    <tr>
            <td>&nbsp;</td><td></td><td></td>
        </tr>
    <tr>
        <td>Pengurangan </td><td>:</td><td><?php echo pengurangan();?></td>
    </tr>
    <tr>
            <td>&nbsp;</td><td></td><td></td>
        </tr>
    <tr>
        <td>Perkalian </td><td>:</td><td><?php echo perkalian();?></td>
    </tr>
    <tr>
            <td>&nbsp;</td><td></td><td></td>
        </tr>
    <tr>
        <td>Pembagian  </td><td>:</td><td><?php echo pembagian();?></td>
    </tr>
    </table>
        <?php } ?>

        </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>