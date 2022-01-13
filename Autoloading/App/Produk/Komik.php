<?php 

class Komik extends Produk implements InfoProduk{
    public $jmlHalaman;
    //Overiding konstruk parent
    public function __construct($judul = "Judul", $penulis ="Penulis", $penerbit="Penerbit", $harga=0, $jmlHal = 0){
        parent::__construct($judul, $penulis, $penerbit, $harga);
        //Menimpa nilai dari property $jmlHalaman pada class ini atau Komik
        //Sehingga urutan property pada kelas ini adalah
        // public jmlHalaman
        // private judul
        // private penulis
        // private penerbit
        // private harga
        $this->jmlHalaman = $jmlHal;
        
    }

    public function getInfo(){
        return "{$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";
    }
  
    public function getInfoProduk(){
        //Overiding method Parent cetakInfo()
        // return "Komik : ". parent::cetakInfo() ." - {$this->jmlHalaman} Halaman";
        return "Komik : ". $this->getInfo() ." - {$this->jmlHalaman} Halaman";
    }
    

}
