<?php

class Produk {
    public  $judul,
            $penulis,
            $penerbit,
            $harga,
            $jumlahHalaman,
            $waktuMain,
            $tipe;
    
    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $jumlahHalaman = 0, $waktuMain = 0, $tipe = "tipe") {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
        $this->jumlahHalaman = $jumlahHalaman;
        $this->waktuMain = $waktuMain;
        $this->tipe = $tipe;
    }

    public function getPenulisPenerbit() {
        return "$this->penulis, $this->penerbit";
    }

    public function cetakLengkap() {
        $str = "{$this->tipe} : {$this->judul} | {$this->getPenulisPenerbit()} (Rp. {$this->harga})";

        if ( $this->tipe == "Komik" ) {
            $str .= " - {$this->jumlahHalaman} halaman.";
        } else if ( $this->tipe == "Game" ) {
            $str .= " ~ {$this->waktuMain} jam.";
        }

        return $str;
    }

}

class CetakInfoProduk {
    // fungsi cetak hanya menerima parameter yang jenis nya class Produk lalu object nya
    public function cetak(Produk $produk) {
        $str = "{$produk->judul} | {$produk->getPenulisPenerbit()} (Rp. {$produk->harga})";

        return $str;
    }
}

$produk1 = new Produk("Naruto", "Masashi Khisimoto", "Shonen Jump", 30000, 100, 0, "Komik");
$produk2 = new Produk("Shingeki no Kyojin", "Hajime Isayama", "Shonen Jump", 99000, 0, 50, "Game");
$produk3 = new Produk("Mortal Combat", "Riki Widiantoro", "Toro Groub", 234000, 0, 77, "Game");
$produk4 = new Produk("Dragon Ball");

// $infoProduk1 = new CetakInfoProduk();
// $p1 = $infoProduk1->cetak($produk1);
// echo $p1;

// echo "<br>";

// $infoProduk2 = new CetakInfoProduk();
// $p2 = $infoProduk2->cetak($produk2);
// echo $p2;

// echo "<br>";

// $infoProduk3 = new CetakInfoProduk();
// $p3 = $infoProduk3->cetak($produk3);
// echo $p3;

// echo "<br>";

// $infoProduk4 = new CetakInfoProduk();
// $p4 = $infoProduk4->cetak($produk4);
// echo $p4;

$infoProduk1 = new CetakInfoProduk();
echo $infoProduk1->cetak($produk1);
echo "<br>";
$infoProduk2 = new CetakInfoProduk();
echo $infoProduk2->cetak($produk2);
echo "<br>";
$infoProduk3 = new CetakInfoProduk();
echo $infoProduk3->cetak($produk3);
echo "<br><br>";

echo $produk1->cetakLengkap();
echo "<br>";
echo $produk2->cetakLengkap();
echo "<br>";
echo $produk3->cetakLengkap();

?>
