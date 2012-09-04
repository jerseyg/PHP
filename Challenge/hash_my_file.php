<?php
$file = UC1JerseyGalapon.php;
$hashed = sha1(file_get_contents($file));
$timeStamp = date(l);

	echo "</br>file: $file </br>hash string: $hashed";
	echo "</br>Today is $timeStamp";
	
?>