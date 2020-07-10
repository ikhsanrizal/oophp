<?php

class Produk
{
  public $judul,
    $penulis,
    $penerbit,
    $harga,
    $jmlhalaman,
    $waktumain,
    $tipe;

  public function __construct($judul, $penulis, $penerbit, $harga = 0, $jmlhalaman = 0, $waktumain = 0, $tipe)
  {
    $this->judul = $judul;
    $this->penulis = $penulis;
    $this->penerbit = $penerbit;
    $this->harga = $harga;
    $this->jmlhalaman = $jmlhalaman;
    $this->waktumain = $waktumain;
    $this->tipe = $tipe;
  }

  public function getlabel()
  {
    return "$this->penulis, $this->penerbit";
  }

  public function getinfolengkap()
  {
    $str = "{$this->tipe} : {$this->judul} | {$this->getlabel()} (Rp. {$this->harga})";
    if ($this->tipe == "Komik") {
      $str .= " - {$this->jmlhalaman} Halaman.";
    } else if ($this->tipe == "Game") {
      $str .= " - {$this->waktumain} Jam.";
    }

    return $str;
  }
}

class cetakinfoproduk
{
  public function cetak(Produk $produk)
  {
    $str = "{$produk->judul} | {$produk->getlabel()} |  (Rp. {$produk->harga_}) ";
    return $str;
  }
}



$produk2 = new Produk("Naruto", "Mashasi Kishimoto", "Shonen Jump", 30000, 200, 0, "Komik");
$produk3 = new Produk("PES", "abc", "Konami", 150000, 0, 50, "Game");

echo $produk2->getinfolengkap();
echo "<br>";
echo $produk3->getinfolengkap();
