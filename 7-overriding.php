<?php
// overriding >> sebuah istilah bisa membuat method di kelas child yang memiliki nama yang sama dikelas parent nya atau mengambil alih/menimpa method parent class.

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

    public function cetakLengkap() {
        $str = "{$this->judul} | {$this->getPenulisPenerbit()} (Rp. {$this->harga})";

        return $str;
    }

}

class Komik extends Produk {

    public $jumlahHalaman;

    public function __construct( $judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $jumlahHalaman = 0 ) {
        // jalankan/panggil method cunstruct dari kelas parent nya dengan overriding
        parent::__construct( $judul, $penulis, $penerbit, $harga, $jumlahHalaman );

        $this->jumlahHalaman = $jumlahHalaman;
    }

    public function cetakLengkap() { 
        // overriding >> keyword this diganti parent:: dan bukan variabel, harus di concat
        $str = "Komik : " . parent::cetakLengkap() . " - {$this->jumlahHalaman} halaman.";

        return $str;
    }
}

class Game extends Produk {

    public $waktuMain;

    public function __construct( $judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $waktuMain = 0 ) {
        parent::__construct( $judul, $penulis, $penerbit, $harga, $waktuMain );

        $this->waktuMain = $waktuMain;
    }
    public function cetakLengkap() {
        $str = "Game : " . parent::cetakLengkap() . " ~ {$this->waktuMain} jam.";

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

$produk1 = new Komik("Naruto", "Masashi Khisimoto", "Shonen Jump", 30000, 100);
$produk2 = new Game("Shingeki no Kyojin", "Hajime Isayama", "Shonen Jump", 99000, 50);
$produk3 = new Game("Mortal Combat", "Riki Widiantoro", "Toro Groub", 234000, 77);
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
