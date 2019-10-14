<?php
class perhitungan
{
    public $bil1;
    public $bil2;

    public function __construct($bil1, $bil2)
    {
        $this->bil1 = $bil1;
        $this->bil2 = $bil2;
    }

    public function tambah()
    {
        $tambah = $this->bil1 + $this->bil2;
        return "Hasil Pertambahan : $tambah<br>";
    }
    public function kurang()
    {
        $kurang = $this->bil1 - $this->bil2;
        return "Hasil Pengurangan : $kurang<br>";
    }
    public function kali()
    {
        $kali = $this->bil1 * $this->bil2;
        return "Hasil Perkalian : $kali<br>";
    }
    public function bagi()
    {
        $bagi = $this->bil1 / $this->bil2;
        return "Hasil Pembagian : $bagi<br>";
    }
}
if (isset($_POST['smpn'])) {
    $a = $_POST['bil1'];
    $b = $_POST['bil2'];
}
echo "<center>Hasil Perhitungan Boy</center><br>";
$hasil = new perhitungan($a, $b);
echo $hasil->tambah();
echo $hasil->kurang();
echo $hasil->kali();
echo $hasil->bagi();
?>