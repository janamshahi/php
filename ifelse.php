
	<?php
		$per = 80;
	if ($per>= 70){
		echo "destintion";
	}elseif ($per>= 60 && $per < 70){
		echo "first division";

	}elseif ($per >= 45 && $per <60){
		echo "secound division";

	}elseif ($per > 35){
		echo "fail";
	}else{
		echo "enter valid number";
	}
	?>
