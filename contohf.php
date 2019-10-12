<?php
class Karyawan
{
    public $nama;
    public $pekerjaan;
    public $tahun_bekerja;
    protected $gaji;
    private $gjmanager = 5000000;
    private $gjob = 500000;

    public function setdata($nama = "mahmud", $pekerjaan = "ob", $tahun_bekerja = 7)
    {
        $this->nama = $nama;
        $this->pekerjaan = $pekerjaan;
        $this->tahun_bekerja = $tahun_bekerja;
    }
    public function getdata()
    {
        if (($this->pekerjaan == "manager") && ($this->tahun_bekerja >= 10)) {
            $this->gaji = $this->tahun_bekerja * $this->gjmanager;
        } else if (($this->pekerjaan == "ob") && ($this->tahun_bekerja >= 10)) {
            $this->gaji = $this->tahun_bekerja * $this->gjob;
        } else if (($this->pekerjaan == "manager ") && ($this->tahun_bekerja >= 5)) {
            $this->gaji = $this->tahun_bekerja * ($this->gjmanager - 1000000);
        } else if (($this->pekerjaan == "ob") && ($this->tahun_bekerja >= 5)) {
            $this->gaji = $this->tahun_bekerja * ($this->gjob - 100000);
        }
        return $this->gaji;
    }
}
$karyawan = new Karyawan();
$karyawan->setdata();

echo "Nama = $karyawan->nama <br>";
echo "Pekerjaan = $karyawan->pekerjaan<br>";
echo "tahun bekerja = $karyawan->tahun_bekerja <br>";
echo "gaji = " . number_format($karyawan->getdata(), 0, ",", ".") . "<br>";
?>