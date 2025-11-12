<?php

class Rumah {
   //properti
   public $warna = "putih";
   public $jumlahKamar = 3;
   public $alamat = "Jl. merdeka no.11";

   //constructor
   public function __construct($warnaBaru,$kabarBaru,$alamatBaru){
        $this->warna = $warnaBaru;
        $this->jumlahKamar = $kabarBaru;
        $this->alamat = $alamatBaru;
   }

   //method
   public function kunciPintu(){
        return "Pintu dikunci";
   }

   public function gantiWarna($warnaBaru){
        $this->warna  = $warnaBaru;
        return "Warna rumah telah diganti menjadi " . $this->warna;
   }
}

function pasangListrik(Rumah $rumah){
    return "Rumah yang berwarna " . $rumah->warna . " ini dipasangi listrik";
}


//ini adalah rumah 1
$rumahSaya = new Rumah("Putih", 5, "Jl.kenari no.12");
$rumahDika = new Rumah("Biru", 4, "Jl.melati no.8");
echo pasangListrik($rumahDika);
// $rumahSaya->gantiWarna("kuning");
// echo "Rumah saya berwarna $rumahSaya->warna"; 
// echo "<br>";
// echo "Rumah saya ada " . $rumahSaya->jumlahKamar . " kamar";
// echo "<br>";
// echo $rumahSaya->kunciPintu();
// echo "<br>";
// echo "<br>";

//ini adalah rumah 2
$rumahTetangga = new Rumah("hijau", 7, "Jl.Pasundan no.13");
// $rumahSaya->gantiWarna("abu-abu");
// echo "Rumah saya berwarna $rumahTetangga->warna";
// echo "<br>";
// echo "Rumah saya ada " . $rumahTetangga->jumlahKamar . " kamar";
// echo "<br>";
?>