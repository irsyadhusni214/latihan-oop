<?php
class ruang
{
    public $j;
    public $l;
    public $k;

    public function __construct($jari)
    {
        return $this->j = $jari;
    }

    public function hitung_keliling()
    {
        $this->k = (2 * 3.14) * $this->j;
        return $this->k;
    }
    public function hitung_luas()
    {
        $this->l = 3.14 * $this->j * $this->j;
        return $this->l;
    }
}
$lingkar1 = new ruang(14);

echo "Jari Jari Lingkaran : " . $lingkar1->hitung_keliling();
echo "<br>";
echo " Luas Lingkaran : " . $lingkar1->hitung_luas();
?>