<?php
    function square($x) {
    	return $x * $x;	
    }
	
	function say_good_day($name){
		echo "<br/>A Fine day indeed {$name}!";
	}
	
		echo "16 squared = " . square(16);
		say_good_day('Bobby McGee');
?>