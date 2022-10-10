<?php

class produk
{
class produk {
  public $judul,
    $penulis,
    $penerbit;
@@ -39,8 +38,7 @@ public function getInfoLengkap()
}


class komik extends produk
{
class komik extends produk {
  public $jmlhHalaman;

  public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $jmlhHalaman = 0)
@@ -58,8 +56,7 @@ public function getInfoLengkap()
  }
}

class game extends produk
{
class game extends produk {
  public $waktumain;
  public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $waktumain = 0)
  {
@@ -81,8 +78,7 @@ public function getInfoLengkap()
}


class CetakInfoProduk
{
class CetakInfoProduk {
  public function cetak(Produk $produk)
  {
    $str = "{$produk->judul} | {$produk->getLabel()} (Rp. {$produk->harga})";
    return $str;
  }
}
$produk3 = new Komik("naruto", "masashi kishimoto", "shonen jump", 30000, 100, 0);
$produk4 = new Game("uncharted", "neil druckmann", "sony computer", 250000, 50);
echo $produk3->getInfoLengkap();
echo "<br>";
echo $produk4->getInfoLengkap();
echo "<hr>";
$produk4->setDiskon(50);
echo $produk4->getHarga();