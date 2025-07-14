<?php 
	abstract class info{
		abstract public function getInfo();
		public function getresult(){
			echo "hello <br>";
		

		}
	}
	
	class childclass extends info
	{
		
	public function getInfo()
		{
			echo "good moarning";
		}
	}

 ?>