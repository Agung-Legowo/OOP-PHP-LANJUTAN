<?php

interface infoproduk
{
    public function getinfoproduk();
}

use cetakinfoproduk as GlobalCetakinfoproduk;
use produk as GlobalProduk;

abstract class produk
{
    protected $judul,
        $penerbit,
        $penulis,
        $harga,
        $diskon = 0;


    public function __construct($judul, $penerbit = "penerbit", $penulis = "penulis", $harga = 1)
    {
        $this->judul = $judul;
        $this->penerbit = $penerbit;
        $this->penulis = $penulis;
        $this->harga = $harga;
    }

    public function setjudul($judul)
    {

        $this->judul = $judul;
    }


    public function getjudul()
    {
        return $this->judul;
    }

    public function setpenulis($penulis)
    {
        $this->penulis = $penulis;
    }

    public function getpenulis()
    {
        return $this->penulis;
    }

    public function setpenerbit($penerbit)
    {
        $this->penerbit = $penerbit;
    }

    public function getpenerbit()
    {
        return $this->penerbit;
    }

    public function setdiskon($diskon)
    {
        $this->diskon = $diskon;
    }

    public function getdiskon()
    {
        return $this->diskon;
    }


    public function setharga($harga)
    {
        $this->harga = $harga;
    }

    public function getharga()
    {
        return $this->harga - ($this->harga * $this->diskon / 100);
    }


    public function getlabel()
    {
        return "$this->penulis, $this->penerbit";
    }

    abstract public function getinfo();
}


class game extends produk implements infoproduk
{
    public $waktumain;

    public function __construct($judul = "judul", $penerbit = "penerbit", $penulis = "penulis", $harga = 1,  $waktumain = 0)

    {
        parent::__construct($judul, $penerbit, $penulis, $harga);
        $this->waktumain = $waktumain;
    }

    public function setdiskon($diskon)
    {
        $this->diskon = $diskon;
    }

    public function getinfo()
    {
        $str = " {$this->judul} | {$this->getlabel()} (rp . {$this->harga})";

        return $str;
    }


    public function getinfoproduk()
    {
        $str = "game: " . $this->getinfo() . " ~ {$this->waktumain} jam.";
        return $str;
    }
}



class komik extends Produk implements infoproduk
{
    public $jumlahhalaman;

    public function __construct($judul = "judul",  $penerbit = " penerbit", $penulis = "penulis", $harga = 1,  $jumlahhalaman = 0)
    {


        parent::__construct($judul, $penerbit, $penulis, $harga);

        $this->jumlahhalaman = $jumlahhalaman;
    }


    public function getinfo()
    {
        $str = " {$this->judul} | {$this->getlabel()} (rp . {$this->harga})";

        return $str;
    }

    public function getinfoproduk()
    {
        $str = "komik: " . $this->getinfo() . " - {$this->jumlahhalaman} halaman.";
        return $str;
    }
}




class cetakinfoproduk
{
    public $daftarproduk = array();


    public function tambahproduk(produk $produk)
    {
        $this->daftarproduk[] = $produk;
    }




    public function cetak()
    {
        $str = "DAFTAR PRODUK : <br>";

        foreach ($this->daftarproduk as $p) {
            $str .= "- {$p->getinfoproduk()} <br>";
        }

        return $str;
    }
}




$produk1 = new komik("doraemon", "fujiko", "shogakukan", 8000, 200);
$produk2 = new game("undercard", "neil druckman", "sony computer", 12000, 80);


$cetakproduk = new Cetakinfoproduk();
$cetakproduk->tambahproduk($produk1);
$cetakproduk->tambahproduk($produk2);
echo $cetakproduk->cetak();
