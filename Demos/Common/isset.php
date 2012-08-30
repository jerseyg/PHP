<?php
    
	$my_int = 12;
	$my_float = (float)$my_int; //Casting in to a float
	unset($my_int); //Equivalent to: $my_int = NULL
	if(!isset($my_int) && is_float($my_float)){
		echo " All is Well.";	
	}  
    
?>