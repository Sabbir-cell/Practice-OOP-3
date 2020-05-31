<?php
	$n=array("Computer Tecnology","Civil Tecnology","Macanical Tecnology","Power Tecnology","RAC Tecnology","Electrical Tecnology");
	$a=$_POST['s'];              
	$x=0;
	foreach ($n as $z) {
		if ($a==$z) {
			$x=1;
		}
	}
	if ($x==1) {
		echo "found your tecnology";
	}else{
		echo "don't found tecnology";
	}

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form method="post" action="#">
	<input type="text" name="s">
	<input type="submit">
		




	</form>

</body>
</html>