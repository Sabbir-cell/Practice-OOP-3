<?php
	$a=$_POST['y'];
	if ($a<="33") {
		echo "Your grade is F";
	}else if ($a<=39) {
		echo "Your grade is C";
	}else if ($a<=49) {
		echo "Your grade is D";
	}else if ($a<=59) {
		echo "Your grade is B";
	}else if ($a<=69) {
		echo "Your grade is A-";
	}else if ($a<=79) {
		echo "Your grade is A";
	}else if ($a<=100) {
		echo "Your grade is A+";
		
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form method="post" action="#">
	<input type="text" name="y" placeholder="cheak your grade">
	<input type="submit">

		



	</form>

</body>
</html>
