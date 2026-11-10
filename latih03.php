<?php
// transaksi penjualan produk
$namaproduk = "baju suka tidur";
$harga_satuan = 20000;
$qty = 4;

// hitung harga yang harus di bayar
$tharga = $harga_satuan * $qty;

echo "sub total: " . $tharga;

//terdapat diskon 5% jika sub total lebih dari 500.000
if( $tharga >50000){
    $diskon = $tharga * 5 / 100;
   }else{
    $diskon = 0;
   }

   //hitung total pembayaran
   $total_bayar = $harga - $diskon;

   //tampilan hasil
   echo "<br>diskon " . $diskon;
   echo "<br>total bayar: " .  $total_bayar;
   ?>
 