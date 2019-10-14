<?php
if (isset($_POST['smpa'])) {
    $a = $_POST['nama'];
    $b = $_POST['nik'];
    $c = $_POST['alamat'];
    $d = $_POST['umur'];
}

class Ngariung
{
    public $nama, $nik, $alamat, $umur;

    public function __construct($nama, $nik, $alamat, $umur)
    {
        $this->nama = $nama;
        $this->nik = $nik;
        $this->alamat = $alamat;
        $this->umur = $umur;
    }
}
echo "<center><h1>Keluarga</h1></center>";
echo "<hr>";
$surs = new Ngariung($a, $b, $c, $d);
foreach ($a as $key => $value) {
    echo "Nama : " . $a[$key] . "<br>";
    echo "Nik : " . $b[$key] . "<br>";
    echo "Alamat : " . $c[$key] . "<br>";
    echo "Umur : " . $d[$key] . "<br>";
    echo "<hr>";
}
?>