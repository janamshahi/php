<?php 

$list = array("name" =>"Jack Daniels","Address" =>"USA","Age" =>26);
//$list = ["name"=>"Jack Daniels","Address"=>"USA","Age"=>26];

foreach ($list as $key => $value) {
	echo $key . "=>" . $value ."<br>";
}
?>