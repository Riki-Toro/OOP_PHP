<?php
// INTERFACE 
// kelas abstrak yg sama sekali tidak memiliki implementasi.
// murni merupakan template untuk kelas turunannya.
// tidak boleh memiliki property, hanya deklarasi method saja.
// semua method harus dideklarasikan dengan visibility public.
// boleh mendeklarasikan __construct()
// satu kelas boleh mengimplementasikan banyak interface
// dengan menggunakan type-hinting dapat menggunakan Dependency Injection
// pada akhirnya akan mencapai polymorphism


interface  InfoProduk {
    public function cetakLengkap();
}

Abstract class Produk {
    protected $judul,
            $penulis,
            $penerbit,
            $harga,
            $diskon = 0;
    
    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0) {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }

// setter getter judul
    // setter method >> agar dapat mensetting properti dari luar >> membutuhkan parameter >> tanpa return/mengembalikan nilai
    public function setJudul( $judul ) {
        // melakukan validasi yg boleh ditulis hanya string
        // if ( !is_string($judul) ) {
        //     throw new Exception("Judul harus string!");
        // }
        $this->judul = $judul;
    }

    // getter method >> mencetak properti >> tanpa parameter >> harus mengembalikan nilai/return
    public function getJudul() {
        return $this->judul;
    }

// setter getter penulis
    public function setPenulis( $penulis ) {
        $this->penulis = $penulis;
    }
    public function getPenulis() {
        return $this->penulis;
    }

// setter getter penerbit
    public function setPenerbit( $penerbit ) {
        $this->penerbit = $penerbit;
    }
    public function getPenerbit() {
        return $this->penerbit;
    }

// setter getter harga
    public function setHatga( $harga ) {
        $this->harga = $harga;
    }
    // method untuk menampilkan hanya harga / visibility
    public function getHarga() {
        return $this->harga - ($this->harga * $this->diskon / 100);
    }

// setter getter diskon
    // method diskon
    public function setDiskon($diskon) {
        $this->diskon = $diskon;
    }
    public function getDiskon() {
        return $this->diskon;
    }


    public function getPenulisPenerbit() {
        return "$this->penulis, $this->penerbit";
    }

    abstract public function getInfo();

}

class Komik extends Produk implements InfoProduk {

    public $jumlahHalaman;

    public function __construct( $judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $jumlahHalaman = 0 ) {
        // jalankan/panggil method cunstruct dari kelas parent nya dengan overriding
        parent::__construct( $judul, $penulis, $penerbit, $harga, $jumlahHalaman );

        $this->jumlahHalaman = $jumlahHalaman;
    }

    public function getInfo() {
        $str = "{$this->judul} | {$this->getPenulisPenerbit()} (Rp. {$this->harga})";

        return $str;
    }

    public function cetakLengkap() { 
        // overriding >> keyword this diganti parent:: dan bukan variabel, harus di concat
        $str = "Komik : " . $this->getInfo() . " - {$this->jumlahHalaman} halaman.";

        return $str;
    }

}

class Game extends Produk implements InfoProduk {

    public $waktuMain;

    public function __construct( $judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $waktuMain = 0 ) {
        parent::__construct( $judul, $penulis, $penerbit, $harga, $waktuMain );

        $this->waktuMain = $waktuMain;
    }

    public function getInfo() {
        $str = "{$this->judul} | {$this->getPenulisPenerbit()} (Rp. {$this->harga})";

        return $str;
    }

    public function cetakLengkap() {
        $str = "Game : " . $this->getInfo() . " ~ {$this->waktuMain} jam.";

        return $str;
    }

}

class CetakInfoProduk {
    public $daftarProduk = array();

    public function tambahProduk( Produk $produk ) {
        $this->daftarProduk[] = $produk;
    }


    public function cetak() {
        $str = "DAFTAR PRODUK: <br>";

        foreach( $this->daftarProduk as $p ) {
            $str .= "- {$p->cetakLengkap()} <br>";
        }

        return $str;
    }
}

$produk1 = new Komik("Naruto", "Masashi Khisimoto", "Shonen Jump", 30000, 100);
$produk2 = new Game("Shingeki no Kyojin", "Hajime Isayama", "Shonen Jump", 99000, 50);
// $produk3 = new Game("Mortal Combat", "Riki Widiantoro", "Toro Groub", 234000, 77);
// $produk4 = new Produk("Dragon Ball");

$cetakProduk = new CetakInfoProduk();
$cetakProduk->tambahProduk( $produk1 );
$cetakProduk->tambahProduk( $produk2 );
echo $cetakProduk->cetak();


?>
