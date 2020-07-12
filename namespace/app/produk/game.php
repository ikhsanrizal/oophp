<?php 
class Game extends Produk implements infoproduk
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
  public function getinfo()
  {
    $str = "{$this->judul} | {$this->getlabel()} (Rp. {$this->harga})";

    return $str;
  }
}
