<?php 

// class ContohStatic {
// 	public static $angka = 1;


// 	public static function halo (){
// 		return "Hayyy ". ++self::$angka ." kali" ;
// 	}
// }


// echo ContohStatic::$angka;
// echo "<br>";
// echo ContohStatic::$angka;
// echo "<br>";
// echo ContohStatic::halo();
// echo "<br>";
// echo ContohStatic::halo();

// class Contoh {
// 	public static $angka = 1;

// 	public function halo(){
// 		return "Hayyy ". self::$angka++ ." kali" ;
// 	}
// }


// $a = new Contoh;

// echo $a->halo();
// echo "<br>";
// echo $a->halo();
// echo "<br>";
// echo $a->halo();
// echo "<hr>";

// $b = new Contoh;
// echo $b->halo();
// echo "<br>";
// echo $b->halo();
// echo "<br>";
// echo $b->halo();
// echo "<br>";
// var_dump($b);


//Constanta PHP
//define() atau const

//tidak bisa dijadikan property di class
// define('NAMA', 'Riza');
// //bisa jadi property di class
// const UMUR = 26;

// echo NAMA;
// echo "<br>";
// echo UMUR;


//Magic Const
//__LINE__
//__FILE__
//__DIR__
//__FUNCTION__
//__CLASS__
//__TRAIT__
//__METHOD__
//__NAMESPACE__

// namespace hhhhhh;
// trait TraitName
// 	{
// 	public function h(){
// 		return __TRAIT__;
// 	}
// }

// class Coba{

	
// 	const NAMA = "Riza";
// 	public $umur = 26;
// 	/**
// 	 * 
// 	 */
// 	use TraitName;
	
// 	public function hey(){
// 		return __FUNCTION__;
// 	}
// }

// $a = new Coba;

// echo $a->hey();
// echo "<br>";
// echo Coba::NAMA;

//Interface 
//Kelas abstract yang sama sekali tidak memiliki implementasi
//Murni merupakan template untuk kelas turunannya
//Tidak boleh memiliki property
//Hanya ada deklarasi method, implementasinya wajid ada di kelas turunannya


interface Buah {
	public function makan();

	public function setWarna ($w);
}


interface Benda {
	public function setUkuranBenda($u);
}


//kelas Apel sebagai turunan dari interface Buah dan Benda
//kelas apel wajib mengimplementasikan semua method pada interface Buah dan Benda
class Apel implements Buah, Benda {
	public function makan(){
		echo "makan";
	}

	public function setWarna($w){
		return "warna = ". $w; 
	}

	public function setUkuranBenda($u)
	{
		return "Heyyy ukurannnya apel berpaa ya = ". $u;
	}
}


$a = new Apel;

echo $a->makan();
echo "<br>";
echo $a->setWarna("merah");
echo "<br>";
echo $a->setUkuranBenda(5);





















