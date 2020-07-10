<?php 
class Komik extends Produk implements infoproduk
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
  public function getinfo()
  {
    $str = "{$this->judul} | {$this->getlabel()} (Rp. {$this->harga})";

    return $str;
  }
}
