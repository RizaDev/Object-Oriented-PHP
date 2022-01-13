<?php 

abstract class Produk {
    //Access Modifier = Visibility
    //Public => access manapun
    //Protected => kelas dan turunannya
    //Private => kelas ini saja
    protected $judul, 
            $penulis, 
            $penerbit, 
            $harga;
   


    // Construct Method -> Fungsi yang selalu dipanggil ketika kelas di instansiasi
    public function __construct($judul = "Judul", $penulis ="Penulis", $penerbit="Penerbit", $harga=0){
        //Menimpa property yang sudah di deklarasikan pada class Produk
        //Yakni property ini :
        // $judul,
        // $penulis,
        // $penerbit,
        // $harga;
        $this->penerbit = $penerbit;
        $this->penulis = $penulis;
        $this->harga = $harga;
        $this->judul = $judul;
        
        

    }

    //Getter dan Setter
    //Getter => Mengeget property private dengan membuat method public
    //Setter => Mengeset property private dengan membuat method set public

    //Get Penulis
    public function getPenulis(){
        return $this->penulis;
    }

    //Set Penulis
    public function setPenulis($p){
        $this->penulis = $p;
    }

    //1 method abstract
    abstract public function getInfo();
    
        
    
    public function getLabel(){
        return "$this->penulis, $this->penerbit";
    }


}