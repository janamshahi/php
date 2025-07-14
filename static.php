<?php 	
	class info
	{
		public static $name = "spa collage";

		public static function getInfo()
		{
			echo "inside function".self::$name;
		}
	}

	echo info::$name;
	echo info::getInfo();



		 ?>