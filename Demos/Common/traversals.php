<?php
	//Traversing arrays
    $words = array('one', 'two', 'buckle', 'my', 'shoe');
	foreach($words as $word){
		echo $word . ' ';
	}
	
	//Traversing hashes
	$names = array('Amy'	=> 'Pond',
					'Jon'	=> 'Snow',
					'William'	=> 'Adama');
	foreach($names as $firstname => $lastname){
		echo "<br />{$lastname}, {$firstname}.";
	}
?>