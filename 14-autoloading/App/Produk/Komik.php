<?php
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

?>
