<?php

class Produk
{
  private $judul,
    $penulis,
    $penerbit,
    $harga, $diskon = 0;



  public function __construct($judul, $penulis, $penerbit, $harga = 0)
  {
    $this->judul = $judul;
    $this->penulis = $penulis;
    $this->penerbit = $penerbit;
    $this->harga = $harga;
  }


  public function setharga($harga)
  {
    $this->harga = $harga;
  }

  public function setdiskon($diskon)
  {
    $this->diskon = $diskon;
  }

  public function getharga()
  {
    return $this->harga - ($this->harga * $this->diskon / 100);
  }

  public function setjudul($judul)
  {
    if (!is_string($judul)) {
      throw new Exception("Judul harus string");
    }
    $this->judul = $judul;
  }

  public function getjudul()
  {
    return $this->judul;
  }

  public function setpenulis($penulis)
  {
    $this->penulis = $penulis;
  }

  public function getpenulis()
  {
    return $this->penulis;
  }

  public function setpenerbit($penerbit)
  {
    $this->penerbit = $penerbit;
  }

  public function getpenerbit()
  {
    return $this->penerbit;
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

  public $jmlhalaman;

  public function __construct($judul, $penulis, $penerbit, $harga = 0, $jmlhalaman = 0)
  {
    parent::__construct($judul, $penulis, $penerbit, $harga);
    $this->jmlhalaman = $jmlhalaman;
  }


  public function getinfoproduk()
  {
    $str = "Komik : " . parent::getinfoproduk()  . " - {$this->jmlhalaman} Halaman. ";
    return $str;
  }
}



class Game extends Produk
{
  public $waktumain;

  public function __construct($judul, $penulis, $penerbit, $harga = 0, $waktumain = 0)
  {
    parent::__construct($judul, $penulis, $penerbit, $harga);
    $this->waktumain = $waktumain;
  }

  public function getinfoproduk()
  {
    $str = "Game : " . parent::getinfoproduk() . " - {$this->waktumain} Jam. ";
    return $str;
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



$produk2 = new Komik("Naruto", "Mashasi Kishimoto", "Shonen Jump", 30000, 200);
$produk3 = new Game("PES", "abc", "Konami", 150000, 50);

echo $produk2->getinfoproduk();
echo "<br>";
echo $produk3->getinfoproduk();

echo "<hr>";

$produk2->setdiskon(10);
echo $produk2->getharga();

echo "<hr>";

$produk2->setharga(50000);
echo $produk2->getharga();
$produk2->setjudul("ABC");
echo $produk2->getjudul();
