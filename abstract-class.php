<?php

abstract class Produk
{
  public $judul,
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

  abstract public function getinfoprodk();

  public function getinfo()
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
    $str = "Komik : " . $this->getinfo()  . " - {$this->jmlhalaman} Halaman. ";
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
    $str = "Game : " . $this->getinfo() . " - {$this->waktumain} Jam. ";
    return $str;
  }
}


class cetakinfoproduk
{
  public $daftarproduk = [];

  public function tambahproduk(Produk $produk)
  {
    $this->daftarproduk[] = $produk;
  }

  public function cetak()
  {
    $str = "DAFTAR PRODUK : <br>";

    foreach ($this->daftarproduk as $p) {
      $str .= "- {$p->getinfoproduk()} <br>";
    }
    return $str;
  }
}



$produk2 = new Komik("Naruto", "Mashasi Kishimoto", "Shonen Jump", 30000, 200);
$produk3 = new Game("PES", "abc", "Konami", 150000, 50);

$cetakproduk = new cetakinfoproduk();
$cetakproduk->tambahproduk($produk2);
$cetakproduk->tambahproduk($produk3);

echo $cetakproduk->cetak();
