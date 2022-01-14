<?php


class produk
{
    public $judul,
        $penerbit,
        $penulis,
        $harga;


    public function __construct($judul = "judul", $penerbit = "penerbit", $penulis = "penulis", $harga = 1)
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
}




class cetakinfoproduk
{
    public function cetak(produk $produk)
    {
        $str = "{$produk->judul} | {$produk->getlabel()} (Rp. {$produk->harga})";
        return $str;
    }
}




$produk1 = new produk("doraemon", "fujiko", "shogakukan", "8000");
$produk2 = new produk("undercard", "neil druckman", "sony computer", "12000");


echo "komik : " . $produk1->getlabel();
echo "<br>";
echo "game : " . $produk2->getlabel();

echo "<br>";
$infoproduk1 = new cetakinfoproduk();
echo $infoproduk1->cetak($produk1);
