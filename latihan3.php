<?php
class pb
{
    public $id;
    protected $nick = "heavenz16";
    private $pass = "kamui221";

    public function akses()
    {
        return $this->nick;
    }
    private function pas()
    {
        return $this->pass;
    }
}
$kuy = new pb();

$kuy->id = "Irsyad ehe";

echo "Id : $kuy->id <br>";

echo "Nick : " . $kuy->akses() . "<br>";

echo "Pass : " . $kuy->pas;

?>