<?php
	$lipyear=$_POST['z'];
	$lipyear2="2004";
	$lipyear3="2008";
	$lipyear4="2012";
	$lipyear5="2016";
	$lipyear6="2020";
	$lipyear7="2024";
	$lipyear8="2028";
	$lipyear9="2032";
		if ($lipyear=="2000") {
			if ($lipyear2=="2004") {
				if ($lipyear3=="2008") {
					if ($lipyear4=="2012") {
						if ($lipyear5=="2016") {
							if ($lipyear6=="2020") {
								if ($lipyear7=="2024") {
									if ($lipyear8=="2028") {
										if ($lipyear9=="2032") {
											echo "This year is lipyear";
										}else{
											echo "This year is not leapyear"; 
										}
									}else{
										echo "This year is not leapyear";
									}
								}else{
									echo "This year is not leapyear";
								}
							}else{
								echo "This year is not leapyear";
							}
							
						}else{
							echo "This year is not leapyear";
						}
					}else{
						echo "This year is not leapyear";
					}	
				}else{
					echo "This year is not leapyear";
				}
			}else{
				echo "This year is not leapyear";
			}	
		}else{
			echo "This year is not leapyear";
		}
	
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form method="post" action="#">
	<input type="text" name="z" placeholder="type your years">
	<input type="submit">
		


	</form>

</body>
</html>