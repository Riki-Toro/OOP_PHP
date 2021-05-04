<?php

require_once 'App/init.php';

$produk1 = new Komik("Naruto", "Masashi Khisimoto", "Shonen Jump", 30000, 100);
$produk2 = new Game("Shingeki no Kyojin", "Hajime Isayama", "Shonen Jump", 99000, 50);
// $produk3 = new Game("Mortal Combat", "Riki Widiantoro", "Toro Groub", 234000, 77);
// $produk4 = new Produk("Dragon Ball");

$cetakProduk = new CetakInfoProduk();
$cetakProduk->tambahProduk( $produk1 );
$cetakProduk->tambahProduk( $produk2 );
echo $cetakProduk->cetak();

echo "<hr>";

new Coba();
?>
