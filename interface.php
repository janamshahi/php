<?php
interface info 
{
    public function getinfo();
}

interface address 
{
    public function getaddress();
}

class childclass implements info, address
{
    public function getinfo()
    {
        echo "<h2>Hello</h2>";
    }

    public function getaddress()
    {
        echo "<h3>Dhangadhi</h3>";
    }
}

$obj = new childclass();
$obj->getinfo();
$obj->getaddress();
?>


