<?php
//1.Class adalah sebbuah blueprint/template 
//untuk membuat instance dari object 
//2.Class mendefinisikan object
//3.Class Menyimoan data(property) dan prilaku(method)

//membuat class dengan nama kucing
class kucing
{
        //membuat property
    public $warna;
    public $jml_kaki;
    public $mkn_fav;

        //membuat method dengan nama bersuara
    public function bersuara()
    {
        return "Miaww";
    }
}
//membuat objeck baru
//ditandai dengan keyword 'new'
$kucing1 = new kucing;
var_dump($kucing1);
?>