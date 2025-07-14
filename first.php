<!DOCTYPE html>
<html>
<body>
	<?php
	$name = "ashok";
	echo $name."<br>";

	$age = 30;
	echo $age."<br>";

	$price = 30;
	echo $price."<br>";

	$friend = array("aaish","shock","kiran");
	echo $friend[1]."<br>";
  //object 
	class car
	{
		public $brand = "ABC";
	}
	$obj = new car();

	$nothing = NULL;
	echo $nothing."<br>";


		$is_eligable = true;
		if ($is_eligable == false){
			echo "sorry <br>";
		}else{
			echo "ok <br>";
		}

//object
		//class laptop
	//	{
		//	public $brand = "dell";
		//	public Functiin getdata()
		//	{
		//		echo $this->brand;
	//		}
	//	}
	//	$obj = new laptop();
	//	$obj->getdata();


?>
</body>
</html>