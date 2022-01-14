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




$produk1 = new produk("doraemon", "fujiko", "shogakukan", "8000");
$produk2 = new produk("undercard", "neil druckman", "sony computer", "12000");
$produk3 = new produk("dragon ball");


echo "komik : " . $produk1->getlabel();
echo "<br>";
echo "game : " . $produk2->getlabel();
echo "<br>";
var_dump($produk3);
