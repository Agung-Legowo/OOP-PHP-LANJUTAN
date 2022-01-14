<?php


class produk
{
    public $judul = "judul",
        $penerbit = "penerbit",
        $penulis = "penulis",
        $harga = 1;


    public function getlabel()
    {
        return "$this->penulis, $this->penerbit";
    }
}

//$produk1 = new produk();
//$produk1->judul = "Doraemon";
//var_dump($produk1);


//$produk2 = new produk();
//$produk2->judul = "Gta v";
//$produk2->tambahproperty = "wkwkwkckckck";
//var_dump($produk2);

$produk3 = new produk();
$produk3->judul = "doraemon";
$produk3->penulis = "fujiko";
$produk3->penerbit = "shogakukan";
$produk3->harga = 8000;

$produk4 = new produk();
$produk4->judul = "undercard";
$produk4->penulis = "neil druckman";
$produk4->penerbit = "sony computer";
$produk4->harga = 12000;

echo "komik : " . $produk3->getlabel();
echo "<br>";
echo "game : " . $produk4->getlabel();
