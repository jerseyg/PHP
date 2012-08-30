<?php
     $numbers = array(1,2,3);
	 $to_do_list = array('finish homework', 'bathe', 'cook dinner');
	 
	 $to_do_list[] = 'practice taxidermy'; //Appeneded to the array
	 echo "Jersey {$to_do_list[0]} now!<br/>";
	 
	 $bookshelf = array('Dictionary', 'Computers', 'Cooking for Dummies', "Websites");
	  
	 echo " I own " . count($bookshelf) . " books.";	
?>