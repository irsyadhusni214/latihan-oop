<?php
class rpl2
{
    public $nama;
    public $umur;
    public $alamat;
    public $hobby;
    public $cita;

    public function sikap()
    {
        return "Baik";
    }

    public function perilaku()
    {
        return "rendah hati lah";
    }
}
$siswa1 = new rpl2;
$siswa1->nama = "Jajang";
$siswa1->umur = 16;
$siswa1->alamat = "Graha";
$siswa1->hobby = "Ngusep";
$siswa1->cita = "Polisi";

$siswa2 = new rpl2;
$siswa2->nama = "Kosmara";
$siswa2->umur = 18;
$siswa2->alamat = "Bandung";
$siswa2->hobby = "Lari dari kenyataan";
$siswa2->cita = "pengusaha";

$siswa3 = new rpl2;
$siswa3->nama = "Dadang";
$siswa3->umur = 15;
$siswa3->alamat = "Solo";
$siswa3->hobby = "Ngoding";
$siswa3->cita = "programer";

echo "Nama:$siswa1->nama <br>";
echo "Umur:$siswa1->umur <br>";
echo "Alamat:$siswa1->alamat <br>";
echo "Hobby:$siswa1->hobby <br><br><br>";
echo "Hobby:$siswa1->.$rpl2->sikap() <br>";


echo "Nama:$siswa2->nama <br>";
echo "Umur:$siswa2->umur <br>";
echo "Alamat:$siswa2->alamat <br>";
echo "Hobby:$siswa2->hobby <br>";
echo "Cita-cita:$siswa2->cita<br><br><br>";

echo "Nama:$siswa3->nama <br>";
echo "Umur:$siswa3->umur <br>";
echo "Alamat:$siswa3->alamat <br>";
echo "Hobby:$siswa3->hobby <br>";
echo "Cita-cita:$siswa3->cita<br>";


?>