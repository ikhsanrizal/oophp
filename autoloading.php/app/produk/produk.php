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


  abstract public function getinfo();
}
