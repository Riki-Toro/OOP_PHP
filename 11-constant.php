<?php
// CONSTANT
// jika membuat constanta tulis nama nya huruf besar semua supaya membedakan mana constanta dengan variabel biasa.

// cara pertama dengan define()
define('NAMA', 'Riki Widiantoro');
echo NAMA;

echo "<br>";

// cara kedua dengan const
const UMUR = 22;
echo UMUR;

echo "<hr>";
// perbedaan nya ketika kita ngoding nya dengan object oriented.
// menggunakan define() tidak bisa simpan dalam sebuah kelas. harus disimpan diluar sebagai konstanta global.
// sedangkan const bisa dimasukkan dalam class sehingga bisa digunakan dalam object oriented.
// coba
class Coba {
    const NAME = "Toro";
}
// cara mengakses sama dengan static
echo Coba::NAME;

// kalau mau menggunakan class gunakanlah const, kalu tidak menggunakan class gunakan defined()


echo "<hr>";
// MAGIC CONSTANT
// __LINE__, __FILE__, __DIR__, __FUNCTION__, __CLASS__, __TRAIT__, __METHOD__, __NAMESPACE__

echo __LINE__; //baris dalam code di code editor
echo "<br>";
echo __FILE__; //alamat file ini
echo "<br>";
echo __DIR__; //alamat directory / folder
echo "<br>";

function Cobi() {
    return __FUNCTION__; //sedang di function mana
}
echo Cobi();
echo "<br>";

class Coob {
    public $vari = __CLASS__;  //sedang di class mana
}
$co = new Coob();
echo $co->vari;
?>
