<?php

use produk as GlobalProduk;

class produk
{
    public $judul,
        $penerbit,
        $penulis,
        $harga;




    public function __construct($judul, $penerbit = "penerbit", $penulis = "penulis", $harga = 1)
    {
        $this->judul = $judul;
        $this->penerbit = $penerbit;
        $this->penulis = $penulis;
        $this->harga = $harga;
    }

    public function getlabel()
    {
        return "$this->penulis, $this->penerbit";
    }


    public function getinfoproduk()
    {
        $str = " {$this->judul} | {$this->getlabel()} (rp . {$this->harga})";

        return $str;
    }
}


class game extends produk
{
    public $waktumain;

    public function __construct($judul = "judul", $penerbit = "penerbit", $penulis = "penulis", $harga = 1,  $waktumain = 0)

    {
        parent::__construct($judul, $penerbit, $penulis, $harga);
        $this->waktumain = $waktumain;
    }

    public function getinfoproduk()
    {
        $str = "game: " . parent::getinfoproduk() . " ~ {$this->waktumain} jam.";
        return $str;
    }
}



class komik extends Produk
{
    public $jumlahhalaman;

    public function __construct($judul = "judul",  $penerbit = " penerbit", $penulis = "penulis", $harga = 1,  $jumlahhalaman = 0)
    {


        parent::__construct($judul, $penerbit, $penulis, $harga);

        $this->jumlahhalaman = $jumlahhalaman;
    }



    public function getinfoproduk()
    {
        $str = "komik: " . parent::getinfoproduk() . " - {$this->jumlahhalaman} halaman.";
        return $str;
    }
}




class cetakinfoproduk
{
    public function cetak(produk $produk)
    {
        $str = "{$produk->judul} | {$produk->getlabel()} (Rp. {$produk->harga})";
        return $str;
    }
}




$produk1 = new komik("doraemon", "fujiko", "shogakukan", 8000, 200);
$produk2 = new game("undercard", "neil druckman", "sony computer", 12000, 80);

//komik : shogakukan, fujiko
//game : sony computer, neil druckman
//doraemon | shogakukan, fujiko (Rp. 8000)

echo $produk1->getinfoproduk();
echo "<br>";
echo $produk2->getinfoproduk();
