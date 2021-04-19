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

class CetakInfoProduk {
    // fungsi cetak hanya menerima parameter yang jenis nya class Produk lalu object nya
    public function cetak(Produk $produk) {
        $str = "{$produk->judul} | {$produk->getPenulisPenerbit()} (Rp. {$produk->harga})";

        return $str;
    }
}

$produk1 = new Produk("Naruto", "Masashi Khisimoto", "Shonen Jump", 30000);
$produk2 = new Produk("Shingeki no Kyojin", "Hajime Isayama", "Shonen Jump", 99000);
$produk3 = new Produk("Mortal Combat", "Riki Widiantoro", "Toro Groub", 234000);
$produk4 = new Produk("Dragon Ball");


$infoProduk1 = new CetakInfoProduk();
$p1 = $infoProduk1->cetak($produk1);
echo $p1;

echo "<br>";

$infoProduk2 = new CetakInfoProduk();
$p2 = $infoProduk2->cetak($produk2);
echo $p2;

echo "<br>";

$infoProduk3 = new CetakInfoProduk();
$p3 = $infoProduk3->cetak($produk3);
echo $p3;

echo "<br>";

$infoProduk4 = new CetakInfoProduk();
$p4 = $infoProduk4->cetak($produk4);
echo $p4;

?>
