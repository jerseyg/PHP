<?php
require_once('/Home/jerseyg/Documents/PHP/PhpConsole.php');
PhpConsole::start();


function boolean_test($var){
	if($var){
		echo "{$var} is true </br>";
	}
	else{
		"{$var} is false </br>";
	}
	
}  
 boolean_test(TRUE); boolean_test(FALSE); 
 boolean_test(0); boolean_test(1); 
 boolean_test(2); boolean_test(3); 
 boolean_test('String'); boolean_test(''); 
 boolean_test(array()); boolean_test(array(34)); 
 boolean_test(NULL); 
?>