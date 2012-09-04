<?php
	//An Array Of Hashes
    $employees = array(
					array('name'	=> 'Wally Glutton',
						  'position'	=> 'Ninja'),
					array('name'	=> 'Jersey Galapon',
						  'position'	=>	'Student')
	);
	echo "{$employees[0]['name']} is a {$employees[0]['position']}.</br>";
	
	$mixed_bag = array('one',2,'three',4,
					array(5 => 'five','six'	=> 6));	
	print "<pre>";
	print_r($mixed_bag);
	print "</pre>"	
?>