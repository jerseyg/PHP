<?php
    $name = 'Bobby McGhee';
	$fancy_string = "My name is {$name} <br/>";
	$plain_string = 'My name is {$name} <br/>';
	
	echo $fancy_string;
	echo $plain_string;
	
	$old_shopping_list = "bacon, peas, gas, grapes";
	$new_shopping_list = $old_shopping_list . ", corn, motorcycle";
	
	$output = "Our list is " . strlen($new_shopping_list);
	$output .= " characters long.";
	echo $output;
?>