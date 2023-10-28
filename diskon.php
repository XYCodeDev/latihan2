<?php
# var harga barang
$baju = 80000;
$celana = 185000; 
$tas = 113000; 
$sepatu = 225000; 

# var jumlah barang yang akan di beli
$jmlh_baju = 2;
$jmlh_celana = 2;
$jmlh_tas = 3;
$jmlh_sepatu = 4;
 
# var total semua barang 
$total_jmlh_barang = ($jmlh_baju + $jmlh_celana + $jmlh_tas + $jmlh_sepatu);

# var total semua harga barang
$total_harga = ($baju * $jmlh_baju) + ($celana * $jmlh_celana) + ($tas * $jmlh_tas) + ($sepatu * $jmlh_sepatu);

# pengkondisian diskon 3%
$diskon3 = 0.3;
if ($jmlh_baju > 1 ) {
    $total_harga -= $baju * $jmlh_baju * $diskon3;
} if ($jmlh_celana > 1 ) {
    $total_harga -= $celana * $jmlh_celana * $diskon3;
} if ($jmlh_tas > 1 ) {
    $total_harga -= $tas * $jmlh_tas * $diskon3;
} if ($jmlh_sepatu > 1 ) {
    $total_harga -= $sepatu * $jmlh_sepatu * $diskon3;
} else {
    $diskon3 = 0;
}

# pengkondisian diskon 5%
$diskon5 = 0.05;
if ($total_harga > 100000) {
    $kelipatan = floor($total_harga / 100000);
    $total_harga -= $kelipatan * 100000 * $diskon5;
} else {
    $diskon = 0;
}

# print jumlah barang dan total harga semua barang yang sudah di kasih diskon 3% dan 5%
echo "Total jumlah barang yang kita beli : " . $total_jmlh_barang . "<br>";
echo "Total semua yang harus di bayar setelah mendapatkan semua diskon : " . $total_harga . "<br>"
?>