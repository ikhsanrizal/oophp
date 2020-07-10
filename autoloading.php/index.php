<?php

require_once 'app/init.php';



$produk2 = new Komik("Naruto", "Mashasi Kishimoto", "Shonen Jump", 30000, 200);
$produk3 = new Game("PES", "abc", "Konami", 150000, 50);

$cetakproduk = new cetakinfoproduk();
$cetakproduk->tambahproduk($produk2);
$cetakproduk->tambahproduk($produk3);

echo $cetakproduk->cetak();
