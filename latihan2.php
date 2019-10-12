<?php
class Produk
{
    var $pembeli;
    var $nambar;
    var $berat;
    var $harga;

    function Warung()
    {
        return "Warung Bi Asih";
    }
}
$herdi = new Produk();

$herdi->pembeli = "Herdi";
$herdi->nambar = "Katel";
$herdi->berat = "25 Kg";
$herdi->harga = "Rp. 250.000";

$andi = new Produk();

$andi->pembeli = "Andi";
$andi->nambar = "Sendok";
$andi->berat = "0.2 Kg";
$andi->harga = "Rp. 5.000";

echo "Nama Pembeli : $herdi->pembeli <br>";
echo "Nama Barang : $herdi->nambar <br>";
echo "Berat Barang : $herdi->berat <br>";
echo "Harga Barang : $herdi->harga <br>";
echo "Toko :" . $herdi->Warung();
echo "<br><br><br>";

echo "Nama Pembeli : $andi->pembeli <br>";
echo "Nama Barang : $andi->nambar <br>";
echo "Berat Barang : $andi->berat <br>";
echo "Harga Barang : $andi->harga <br>";
echo "Toko :" . $andi->Warung();
?>