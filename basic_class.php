<?php 
class Produk{
    //mendifinsikan properti
    public $name = "kulkas";
    public $jenis = "politron";
    public $harga = 4000;

    //ini method nya ⬇⬇⬇
    function PrdukNya($name, $jenis, $harga) {
        $this->name = $name;
        $this->name = $jenis;
        $this->name = $harga;
    }
    function GetProudukNya() {
        return $this->name;
        return $this->jenis;
        return $this->harga;
    }
}
$tv = new Produk();
$kulkas = new Produk();
$mobil = new Produk();
//
?>