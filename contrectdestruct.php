<?php
	class collage
	{
		public function __construct()
		{
			echo "wellcome for  <br>";
		}
		public function info()
		{
			echo "processing data in data home <br>";
		}
		public function __destruct()
		{
			echo "bye <br>";
		}
	}
	$obj = new collage();
	$obj->info();
	$obj->__destruct();
?>
