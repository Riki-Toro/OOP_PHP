<?php

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

?>
