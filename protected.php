<?php 
class Student {
    protected $name = "ram";

    protected function info() {
        echo "hello $this->name <br>";
    }  
}

class Derived extends Student {
    public function getInfo() {
        $this->info(); 
    }
}
$obj = new Derived();
$obj->getInfo(); 
?>
