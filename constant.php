<?php


//define('nama', 'MUHAMMAD AGUNG RAMADHAN ');
//echo nama;

//echo "<br>";

//const Umur = 20;
//echo Umur;



//class coba
//{
//const nama = 'AGUNG';
//}

//echo coba::nama;

//echo __line__;


//function coba()
//{
//return __FUNCTION__;
//}

//echo coba();

class Coba
{
    public $kelas = __CLASS__;
}

$obj = new Coba;
echo $obj->kelas;
