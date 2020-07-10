<?php

class Produk
{
  public $judul = "judul",
    $penulis = "penulis",
    $penerbit = "penerbit",
    $harga = 0;

  public function getlabel()
  {
    return "$this->penulis, $this->penerbit";
  }
}

// $produk1 = new Produk();

$produk2 = new Produk();
echo "Komik : "  . $produk2->getlabel();
