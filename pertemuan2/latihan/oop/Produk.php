<?php

class Produk {
   //properti parent
   public $judul,
    $penulis,
    $penerbit,
    $harga;

   // Constructor parent
   public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0) {
       $this->judul = $judul;
       $this->penulis = $penulis;
       $this->penerbit = $penerbit;
       $this->harga = $harga;
   }

   // Method milik parent
   public function getLabel() {
       return "$this->judul, $this->penulis, $this->penerbit";
   }
}

class Komik  extends Produk{
    // properti child
    public $jumlahHalaman;
    public function __construct( $judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $jumlahHalaman = 0) {
        parent::__construct($judul, $penulis, $penerbit, $harga);
        $this->jumlahHalaman = $jumlahHalaman;
    }

    public function getInfoProduk(){
        $info = "Komik : ". parent::getLabel(). " | Harga : ". $this->harga ." | Halaman : " . $this->jumlahHalaman;
        return $info;
    }

}
$komik1 = new Komik('Naruto', 'Masashi Kishimoto', "Shonen Jump", 45000, 100);
echo $komik1->getInfoProduk();
?>