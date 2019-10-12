<?php
class Kantor
{
    public function __construct()
    {
        echo "Masuk Kantor <br>";
    }

    public function __destruct()
    {
        echo "Keluar Kantor <br>";
    }
}

class Kerja extends Kantor
{
    public function __construct()
    {
        parent::__construct();
        echo "Masuk Ruangan <br>";
    }

    public function gawe()
    {
        echo "Kerja Di Ruangan <br>";
    }

    public function __destruct()
    {
        echo "Keluar Ruangan <br>";
        parent::__destruct();
    }
}
$surs = new Kerja();
echo $surs->gawe();
?>