<!DOCTYPE html>
<html>
<body>
	<?php
	$dt = date("D");
	Switch (strtolower($dt)) {
		case "sun":
		echo "sunday";
		break;
		case "mon":
		echo "monday";
		break;
		case "tue":
		echo "tuesday";
		break;
		case "wed":
		echo "wednesday";
		break;
		case "thu":
		echo "thursday";
		break;
		case "fri":
		echo "friday";
		break;
		case "sat":
		echo "saturday";
		break;

		defult:
		echo "not found";
	}
	?>

</body>
</html>