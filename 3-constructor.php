<?php

class Produk {
    public  $judul,
            $penulis,
            $penerbit,
            $harga;
    
    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0) {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }

    public function getPenulisPenerbit() {
        return "$this->penulis, $this->penerbit";
    }
}

$produk1 = new Produk("Naruto", "Masashi Khisimoto", "Shonen Jump", 30000);
$produk2 = new Produk("Shingeki no Kyojin", "Hajime Isayama", "Shonen Jump", 99000);
$produk3 = new Produk("Mortal Combat", "Riki Widiantoro", "Toro Groub", 234000);
$produk4 = new Produk("Dragon Ball");

echo "Komik : $produk1->judul, Harga : Rp. $produk1->harga";
echo "<br><br>";
echo "Komik : {$produk2->judul} | {$produk2->getPenulisPenerbit()} (harga : Rp. {$produk2->harga})";
echo "<br><br>";
var_dump($produk4);


?>
