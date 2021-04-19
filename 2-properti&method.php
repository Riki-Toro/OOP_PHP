<?php

class Produk {
    // properti
    public  $judul = "judul",
            $penulis = "penulis",
            $penerbit = "penerbit",
            $harga = 0;

    // method
    // public function sayHello() {
    //     return "hello world";
    // }

    public function getPenulisPenerbit() {
        return "$this->penulis, $this->penerbit";
    }
}

// $produk1 = new Produk();
// $produk1->judul = "Naruto";

// var_dump($produk1);

// echo "<br>";

// $produk2 = new Produk();
// var_dump($produk2);

$produk3 = new Produk();
$produk3->judul = "Naruto";
$produk3->penulis = "Masashi Kishimoto";
$produk3->penerbit = "Shonen Jump";
$produk3->harga = 30000;

echo "Komik : $produk3->judul, Harga : Rp. $produk3->harga";
echo "<br>";
// echo $produk3->sayHello();
echo "hai, " . $produk3->getPenulisPenerbit();
echo "<br>";

$produk4 = new Produk();
$produk4->judul = "Shingeki no Kyojin";
$produk4->penulis = "Hajime Isayama";
$produk4->penerbit = "Shonen Jump";
$produk4->harga = 99000;

echo "Komik : {$produk4->judul} | {$produk4->getPenulisPenerbit()} (harga : Rp. {$produk4->harga})";
?>
