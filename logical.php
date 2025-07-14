<html>
<body>
	<?php
	$age = 20;
	$country = "nepal";
	if($age >= 18 && $country == "nepal")
	{
		echo "eligible for vote<br>";
	}else {
		echo "not eligible for vote<br>";
	}

	if($age >= 20 || $country == "usa")
	{
		echo "eligible for marry";
	}else{
		echo "not eligible for marry";
	}


	?>
</body>
</html>