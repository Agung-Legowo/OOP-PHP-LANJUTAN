<?php

use produk as GlobalProduk;

class produk
{
    public $judul,
        $penerbit,
        $penulis,
        $harga,
        $jumlahhalaman,
        $waktumain;



    public function __construct($judul = "judul", $penerbit = "penerbit", $penulis = "penulis", $harga = 1, $jumlahhalaman = 0, $waktumain = 0)
    {
        $this->judul = $judul;
        $this->penerbit = $penerbit;
        $this->penulis = $penulis;
        $this->harga = $harga;
        $this->$jumlahhalaman = $jumlahhalaman;
        $this->$waktumain = $waktumain;
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
    public function getinfoproduk()
    {
        $str = "game: {$this->judul} | {$this->getlabel()} (rp . {$this->harga}) ~ {$this->waktumain} jam.";
        return $str;
    }
}



class komik extends Produk
{
    public function getinfoproduk()
    {
        $str = "komik: {$this->judul} | {$this->getlabel()} (rp . {$this->harga}) - {$this->jumlahhalaman} halaman.";
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




$produk1 = new komik("doraemon", "fujiko", "shogakukan", 8000, 200, 0);
$produk2 = new game("undercard", "neil druckman", "sony computer", 12000, 0, 80);

//komik : shogakukan, fujiko
//game : sony computer, neil druckman
//doraemon | shogakukan, fujiko (Rp. 8000)

echo $produk1->getinfoproduk();
echo "<br>";
echo $produk2->getinfoproduk();
