<?php

//clas function => merupakan blue print atau rancangan. dan hasil nya itu adalah objek nya
//2.3 properti dan method
class Produk{
    public $Sku ;
    public $Merek ;
    public $Harga ;
#fungsi ini di dalam kelas akan menjadi method
    function PesanProduk() {
    return "Prodak  di pesan...";
}
}
$telvisi = new produk();
$MesinCuci = new produk();

$telvisi->Sku ="001";
$telvisi->Merek ="samsu";
$telvisi->Harga =10000;
$telvisi->PesanProduk();

echo $telvisi->Sku;
echo "<br>";
echo $telvisi->Merek;
echo "<br>";
echo $telvisi->Harga;
echo"<br>";
echo $MesinCuci ->PesanProduk();

echo "<br>"; #memberikan enter ke bawah
$MesinCuci->Sku = "002"; #mengakses properti dari mesin cuci
$MesinCuci->Merek = "samsul"; #mengakses properti dari mesin cuci
$MesinCuci->Harga = 1000; #mengakses properti dari mesin cuci

echo $MesinCuci->Sku;
echo "<br>";
echo $MesinCuci->Merek;
echo "<br>";
echo $MesinCuci->Harga;
echo"<br>";
echo $MesinCuci ->PesanProduk();
?>