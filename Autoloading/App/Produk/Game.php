<?php 

Class Game extends Produk implements InfoProduk{
  
    //Overiding konstruk parent
    public function __construct($judul = "Judul", $penulis ="Penulis", $penerbit="Penerbit", $harga=0, $jmlJam = 0){
        parent::__construct($judul, $penulis, $penerbit, $harga);
        //Property pada kelas ini adalah
        //Private judul
        //Private penulis
        //Private Penerbit
        //Private harga
        //public jmlWaktu
        $this->jmlWaktu = $jmlJam;
        
    }

    // public function cetakInfo(){
    //     //Properti judul tidak bisa diakses oleh kelas Game as child class Produk
    //     //Properti harga tidak bisa diakses oleh kelas Game as child class Produk
    //     //Solusinya adalah Buat visibilty protected pada property judul dan harga
    //     return "Game : {$this->judul} | {$this->getLabel()} (Rp. {$this->harga}) ~ {$this->jmlWaktu} Jam";
    // }

    public function getInfo(){
        return "{$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";
    }


    public function getInfoProduk(){
        //Overiding method Parent cetakInfo()
        return "Game : ". $this->getInfo() ." - {$this->jmlWaktu} Jam";
    }
 }
