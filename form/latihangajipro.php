<?php
class Gaji
{
    public $nam;
    public $nip;
    public $alam;
    public $jum;
    public $ppn = 0.025;

    public function __construct($nam, $nip, $alam, $jum)
    {
        $this->nam = $nam;
        $this->nip = $nip;
        $this->alam = $alam;
        $this->jum = $jum;
    }

    public function data()
    {
        echo "Nama : $this->nam <br>";
        echo "NIP : $this->nip<br>";
        echo "Alamat : $this->alam<br>";
        echo "Jumlah Hari Kerja : $this->jum<br>";
    }
    public function gaji_kotor()
    {
        $gajikot = $this->jum * 75000;
        return $gajikot;
    }
    public function gaji_bersih()
    {
        $gajibersih = $this->gaji_kotor() - ($this->gaji_kotor() * $this->ppn);
        return $gajibersih;
    }
}
if (isset($_POST['simpan'])) {
    $a = $_POST['nama'];
    $b = $_POST['nip'];
    $c = $_POST['alamat'];
    $d = $_POST['jmlh'];
}
echo "<center>GAS LURD</center>";
$surs = new Gaji($a, $b, $c, $d);
echo $surs->data();
echo "Gaji Kotor : " . $surs->gaji_kotor() . "<br>";
echo "Gaji Bersih : " . $surs->gaji_bersih();
?>