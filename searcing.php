<?php
	$a=array(5,10,15,20,45,68,7,67);
	$item=2;
	$found=0;
	foreach ($a as $v) {
		if ($item==$v) {
			$found=1;
			
		}
	}if ($found==1) {
				echo $item."found";
			}else{
				echo $item."not found";
			}


?>