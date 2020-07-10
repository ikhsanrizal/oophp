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

  public function __construct($judul, $penulis, $penerbit, $harga = 0, $jmlhalaman = 0, $waktumain = 0)
  {
    $this->judul = $judul;
    $this->penulis = $penulis;
    $this->penerbit = $penerbit;
    $this->harga = $harga;
    $this->jmlhalaman = $jmlhalaman;
    $this->waktumain = $waktumain;
  }

  public function getlabel()
  {
    return "$this->penulis, $this->penerbit";
  }

  public function getinfoproduk()
  {
    $str = "{$this->judul} | {$this->getlabel()} (Rp. {$this->harga})";

    return $str;
  }
}

class Komik extends Produk
{
  public function getinfoproduk()
  {
    $str = "Komik : " . parent::getinfoproduk()  . " - {$this->jmlhalaman} Halaman. ";
    return $str;
  }
}

class Game extends Produk
{
  public function getinfoproduk()
  {
    $str = "Game : {$this->judul} | {$this->getlabel()} |  (Rp. {$this->harga}) - {$this->waktumain} Jam. ";
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



$produk2 = new Komik("Naruto", "Mashasi Kishimoto", "Shonen Jump", 30000, 200, 0);
$produk3 = new Game("PES", "abc", "Konami", 150000, 0, 50);

echo $produk2->getinfoproduk();
echo "<br>";
echo $produk3->getinfoproduk();
