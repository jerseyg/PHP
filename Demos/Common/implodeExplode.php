<?php
    $poem = array('mares eat oats', 'goat eat oats', 'little lambs eat ivy<br/>');	
	echo implode(' and ', $poem);
	
	$the_numbers = '4,8,15,16,23,42';
	$dharama_hatch = explode(',', $the_numbers);
	print "<pre>";
	print_r($dharama_hatch);
	print "<pre>";
?>