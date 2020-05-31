<?php
	$date="February";
	$date1=date("Y");
		echo $date1."<br>";
	switch ($date) {
		case "January":
			echo "January month is 31 days";
			break;
		case "February":
			echo "February month is 28 days";
			break;
		case "March":
			echo "March month is 31 days";
			break;
		case "April":
			echo "April month is 30 days";
			break;
		case "May":
			echo "May month is 31 days";
			break;
		case "June":
			echo "June month is 30 days";
			break;
		case "July":
			echo "July month is 31 days";
			break;
		case "August":
			echo "August month is 30 days";
			break;
		case "September":
			echo "September month is 31 days";
			break;
		case "October":
			echo "October month is 30 days";
			break;
		case "November":
			echo "November month is 31 days";
			break;
		case "December":
			echo "December month is 30 days";
			break;
		default:
			echo "Please correct your data";
			break;
	}



?>