<?php
	session_start();
?>
<html>
<body>
	<?php
	$_SESSION['collage']="spa collage";
	if(isset($_SESSION['collage']))
	{
		echo $_SESSION['collage'];
	}else{
		echo "not session";
	}
	?>
</body>
</html>