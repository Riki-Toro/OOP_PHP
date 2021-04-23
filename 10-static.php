<?php
// STATIC KEYWORD
class ContohStatic {
    public static $angka = 1;

    public static function halo() {
        return "Halo " . self::$angka++ . " kali <br>"; //self untuk pengganti this karena this hanya berlaku jika di instansiasi
    }
}
// untuk mencetak properti atau method static
// tanpa perlu instansiasi
echo ContohStatic::$angka;
echo "<br>";
echo ContohStatic::halo();
echo ContohStatic::halo();


// untuk apa static keyword?
// 1. member yg terikat dangan class, bukan dengan object
// 2. nilai static akan selalu tetap meskipun object di instansiasi berulang kali
// 3. membuat kode menjadi 'procedural'
// 4. digunakan untuk membuat fungsi bantuan / helper
// 5. digunakan di class-class utility pada framework

echo "<hr>";
// contoh 2
class Contoh {
    public static $ang = 1;

    public function helo() {
        return "helo " . self::$ang++ . " kali <br>";
    }
}
$var = new Contoh();
echo $var->helo();
echo $var->helo();
echo $var->helo();
echo "<hr>";
$var2 = new Contoh();
echo $var2->helo();
echo $var2->helo();
echo $var2->helo();
?>
