<?php


class produk
{
    public $judul,
        $penerbit,
        $penulis,
        $harga,
        $jumlahhalaman,
        $waktumain,
        $tipe;


    public function __construct($judul = "judul", $penerbit = "penerbit", $penulis = "penulis", $harga = 1, $jumlahhalaman = 0, $waktumain = 0, $tipe)
    {
        $this->judul = $judul;
        $this->penerbit = $penerbit;
        $this->penulis = $penulis;
        $this->harga = $harga;
        $this->$jumlahhalaman = $jumlahhalaman;
        $this->$waktumain = $waktumain;
        $this->$tipe = $tipe;
    }

    public function getlabel()
    {
        return "$this->penulis, $this->penerbit";
    }


    public function getinfolengkap()
    {
        $str = "{$this->tipe} : {$this->judul} | {$this->getlabel()} (rp . {$this->harga})";
        if ($this->tipe == "komik") {
            $str .= " - {$this->jumlahhalaman} halaman.";
        } else if ($this->tipe == "game") {
            $str .= " ~ {$this->waktumain} jam.";
        }

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




$produk1 = new produk("doraemon", "fujiko", "shogakukan", 8000, 200, 0, "komik");
$produk2 = new produk("undercard", "neil druckman", "sony computer", 12000, 0, 80, "game");

//komik : shogakukan, fujiko
//game : sony computer, neil druckman
//doraemon | shogakukan, fujiko (Rp. 8000)

echo $produk1->getinfolengkap();
echo "<br>";
echo $produk2->getinfolengkap();
