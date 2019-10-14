<?php
class Produk {
    var $nama;
    var $merk;
    var $size;
    var $harga;

    function pembeli() {
        return "Membeli barang";
    }
}
$Produk_1 = new Produk();
$Produk_2 = new Produk();

$Produk_1->nama="seli";
$Produk_1->merk="Uniqlo";
$Produk_1->size="M";
$Produk_1->harga="500000";

$Produk_2->nama="sisil";
$Produk_2->merk="Bape";
$Produk_2->size="M";
$Produk_2->harga="300000";

echo "Nama : $Produk_1->nama";
echo "<br />";
echo "Merk $Produk_1->merk";
echo "<br />";
echo "Size $Produk_1->size";
echo "<br />";
echo "Harga $Produk_1->harga";
echo "<br />";

echo $Produk_2->nama;
echo "<br />";
echo $Produk_2->merk;
echo "<br />";
echo $Produk_2->size;
echo "<br />";
echo $Produk_2->harga;
echo "<br />";

echo $Produk_1->pembeli();

?>