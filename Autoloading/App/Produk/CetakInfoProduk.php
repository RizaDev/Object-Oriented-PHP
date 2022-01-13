<?php 

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