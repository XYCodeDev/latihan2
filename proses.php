<?php
# var harga barang
$baju = 80000;
$celana = 185000;
$tas = 113000;
$sepatu = 225000;
$harga = null;

# var input 
$nama = $_POST["nama_barang"];
$jumlah = $_POST["jumlah_barang"];

# pengkondisian barang
switch ($nama) {
    case "baju":
      $harga = $baju;
      break;
    case "celana":
      $harga = $celana;
      break;
    case "tas":
      $harga = $tas;
      break;
    case "sepatu":
      $harga = $sepatu;
  }

# var hasil perhitungan harga barang dan jumlah barang
$hitung = $harga * $jumlah;

# perhitungan diskon 
if ($hitung >= 100000) {
    $diskon = 0.05 * $hitung;
  }else{
    $diskon = 0;
  }
 
# var total yang sudah di kasih diskon
$bayar = $hitung - $diskon;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<!-- PRINT hasil -->
Nama Barang : <?php echo $nama ?><br>
    Jumlah Beli : <?php echo $jumlah ?><br>
    Total : <?php echo $hitung ?><br>
    Diskon : <?php echo $diskon ?><br>
    Bayar : <?php echo $bayar ?><br><br>
    <a href="index.php"><< Kembali</a>
</body>
</html>