<?php 
	$list = array("dog","cat","apple","orange");
	ksort($list);

	foreach($list as $value){
		echo "$value <br>";
	}
	

?>