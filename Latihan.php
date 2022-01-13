<?php 

//Interface 
//Kelas abstract yang sama sekali tidak memiliki implementasi
//Murni merupakan template untuk kelas turunannya
//Tidak boleh memiliki property
//Hanya ada deklarasi method, implementasinya wajid ada di kelas turunannya
interface InfoProduk {
    public function getInfoProduk();

}
//Abstract Class
//Merupakan template child class
//Wajid ada min 1 method abstract
//method abstract hanya interfacenya saja
//Implementasi abstract method pada child class
//Abstract class tidak bisa di instansiasi
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


//kelas yang menerima input parameter objek khusus instanse dari kelas Produk
//Object Type  
class CetakInfoProduk {
    public $daftarProduk = [];
    public function tambahProduk(Produk $produk){
        return $this->daftarProduk[] = $produk;
    }

    public function cetak(){
        $str = "|| Daftar Produk || <br> <br>";
        foreach($this->daftarProduk as $p){
            $str .= $p->getInfoProduk() . "<br>";

        }

        return $str;
    }

}

//Inheritence
//Kelas produk sbg Parent Class
//Kelas Komik Yang Mewarisi kelas produk

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
        var_dump($this);
        
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


//Kelas Game Yang Mewarisi Kelas Produk
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


//intansiasi kelas child 
$komik = new Komik("Naruto", "Shonen", "Khisimoto", 20000, 100);
$game = new Game("Uncharted", "Neil", "Sony Computer", 250000,50);


var_dump($komik);
//var_dump($game);



$produk = new CetakInfoProduk;

$produk->tambahProduk($komik);
$produk->tambahProduk($game);


var_dump($produk);
echo $produk->cetak();

echo "<br>";

echo $produk->daftarProduk[1]->getInfoProduk();
echo "<br>";


// echo $komik->getInfo();
// echo "<br>";
// echo $game->getInfo();
// echo "<hr>";
// $komik->setPenulis("Penulis Baru");
// echo $komik->getPenulis();

//var_dump($game);
// $produk1 = new Produk();
// $produk1->judul = "Naruto";


// $produk2 = new Produk();
// $produk2->judul = "Spiderman";
// //Nambah property pada objek produk2
// $produk2->TambahProperty = "hehehe";

// var_dump($produk2);

//$produk3 = new Produk("Naruto", "Shonen", "Khisimoto", 20000);
// $produk3->judul = "Naruto";
// $produk3->penerbit = "Shonen";
// $produk3->penulis = "Khisimoto";
// $produk3->harga = 20000;

//$produk4 = new Produk("Uncharted", "Neil", "Sony Computer", 250000);
// $produk4->judul = "Uncharted";
// $produk4->penulis = "Neil";
// $produk4->penerbit = "Sony Computer";
// $produk4->harga = 250000;

//$cetakInfoProduk = new CetakInfoProduk();


//echo "<br>";
// echo "Komik : " . $produk3->getLabel();
// echo "<br>";
// echo "Game : " . $produk4->getLabel();
// echo "<br>";
// //komik : Naruto | Khisimoto, Shonen (Rp. 20000) - 100 Halaman
// echo $cetakInfoProduk->cetak($komik);
// echo "<br>";
//Game : Uncaherted | Neil, Sony Computer (Rp. 250000) ~ 50 Jam
//echo $cetakInfoProduk->cetak($game);




?>
