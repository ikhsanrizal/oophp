<?php

class Produk
{
  public $judul,
    $penulis,
    $penerbit,
    $harga;

  public function __construct($judul, $penulis, $penerbit, $harga)
  {
    $this->judul = $judul;
    $this->penulis = $penulis;
    $this->penerbit = $penerbit;
    $this->harga = $harga;
  }

  public function getlabel()
  {
    return "$this->penulis, $this->penerbit";
  }
}

class cetakinfoproduk
{
  public function cetak(Produk $produk)
  {
    $str = "{$produk->judul} | {$produk->getlabel()} |  (Rp. {$produk->harga}) ";
    return $str;
  }
}



$produk2 = new Produk("Naruto", "Mashasi Kishimoto", "Shonen Jump", 30000);
echo "Komik : "  . $produk2->getlabel();

$infoproduk1 = new cetakinfoproduk();
echo $infoproduk1->cetak($produk2);
