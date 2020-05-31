<?php
	$sum=0;
	$a=$_POST['z'];
	for ($i=0; $i <=$a; $i+=2) { 
		$sum=$sum+$i;
		
	}
	echo $sum;

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form method="post" action="#">
	<input type="text" name="z">
	<input type="submit">
		



	</form>

</body>
</html>