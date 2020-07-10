<?php
// class contohstatic
// {
//   public static $angka = 1;

//   public static function halo()
//   {
//     return "Halo " . self::$angka++ . " kali.";
//   }
// }

// echo contohstatic::$angka;
// echo "<br>";
// echo contohstatic::halo();
// echo "<hr>";
// echo contohstatic::halo();

class contoh
{
  public static $angka = 1;

  public function halo()
  {
    return "Halo " . self::$angka++ . " kali.<br>";
  }
}

$obj = new contoh;
echo $obj->halo();
echo $obj->halo();
echo $obj->halo();

echo "<hr>";
$obj2 = new contoh;
echo $obj2->halo();
echo $obj2->halo();
