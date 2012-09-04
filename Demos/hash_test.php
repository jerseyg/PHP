<?php
    $data = "hello"; 

	foreach (hash_algos() as $v) { 
        $r = hash($v, $data, false); 
        printf("%-12s %3d %s\n</br>", $v, strlen($r), $r);
		 
} 
	echo "</br></br></br>";
	$i= "THIS_IS_NOT_A_PASSWORD";
	echo sha1($i);
	
?>